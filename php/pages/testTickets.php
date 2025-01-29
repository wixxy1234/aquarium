<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aquarium</title>

    <script defer src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css">

    <link rel="icon" type="image/png" href="/my-favicon/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="/my-favicon/favicon.svg" />
    <link rel="shortcut icon" href="/my-favicon/favicon.ico" />

    <link rel="stylesheet" href="/bootstrap-5.3.3-dist/css/bootstrap.min.css">
    <script defer src="/bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="/style/ticketsPage.css">
    <link rel="stylesheet" href="/style/headerAndFooter.css">
    <link rel="stylesheet" href="/style/reset.css">
    <link rel="stylesheet" href="/style/mainStyle.css">
</head>

<body>
    <?php
    $root = $_SERVER['DOCUMENT_ROOT'];
    include "$root/php/pages/header.php"
        ?>
    <main>
        < class="container">


            <?php
            $link = mysqli_connect("localhost", "root", "", "aquarium");

            $sql_query_main_event = "SELECT *
                            FROM events
                            WHERE idCategory = 4;";
            $resultMainEvent = mysqli_query($link, $sql_query_main_event);
            $mainEvent = $resultMainEvent->fetch_assoc();

            $sql_query_events = "SELECT *
                            FROM events AS e
                            INNER JOIN category_event AS ce ON e.idCategory = ce.idCategory
                            WHERE ce.idCategory != 4;";
            $result = mysqli_query($link, $sql_query_events);
            $nameCategory = '';

            $groupedEvents = [];
            while ($event = $result->fetch_assoc()) {
                $eventTypeId = $event['idCategory']; // Предполагаем, что есть поле event_type
                $eventTypeName = $event['nameCategory']; // Предполагаем, что есть поле event_type
                if (!isset($groupedEvents[$eventTypeId])) {
                    $groupedEvents[$eventTypeId] = [
                        'CategoryName' => $eventTypeName,
                        'Events' => []
                    ]; // Инициализируем массив для нового типа события
                }
                $groupedEvents[$eventTypeId]['Events'][] = $event; // Добавляем событие в соответствующую группу
            }

            $sql_min_cost = "SELECT ce.*, e.*, MIN(ec.cost) AS minCost FROM events AS e INNER JOIN category_event AS ce ON ce.idCategory = e.idCategory INNER JOIN event_cost AS ec ON ec.idEvent = e.idEvent GROUP BY e.idEvent, ce.idCategory; ";
            $res_min_cost = mysqli_query($link, $sql_min_cost);
            $cost_arr = mysqli_fetch_all($res_min_cost, MYSQLI_ASSOC);
            ?>

            <?php
            function renderCost($cost_arr, $row)
            {
                $minCost = null;
                foreach ($cost_arr as $cost) {
                    if ($row['idEvent'] === $cost['idEvent']) {
                        $minCost = $cost['minCost'];
                        break;
                    }
                }
                return $minCost !== null
                    ? '<span class="card-body__cost"> от ' . '<span class="card-body__cost_big">' . $minCost . '</span>' . 'руб' . '</>'
                    : 'Цена не найдена';
            }
            ?>

            <div class="main-ticket text-end mt-4">
                <div
                    class="col-md-10 offset-md-2 col-12 col-xl-6 offset-xl-6 col-lg-8 offset-lg-4 d-flex flex-column justify-content-center main-ticket__text">
                    <div class="main-ticket__heading mb-3" id="category_mainEvent"><?= $mainEvent['nameEvent'] ?></div>
                    <div class="main-ticket__description col-md-10 offset-md-2  mb-3">
                        <?= $mainEvent['descriptionEvent'] ?>
                    </div>
                    <div class="col-lg-4 offset-lg-8 col-md-5 offset-md-7 col-6 offset-6">
                        <button type="button"
                            class="main-ticket__btn w-100 d-flex justify-content-center align-items-center"><a
                                href="/php/pages/ticket.php?id=<?= $mainEvent['idEvent'] ?>">Купить</a></button>
                    </div>
                </div>
            </div>


            <?php foreach ($groupedEvents as $eventType): ?>
                <?php
                switch ($eventType['CategoryName']) {
                    case 'Водные шоу':
                        echo '<div class="heading" id="categoty_water-show">' . $eventType['CategoryName'] . '</div>';
                        break;
                    case 'Экскурсии':
                        echo '<div class="heading" id="categoty_tour">' . $eventType['CategoryName'] . '</div>';
                        break;
                    case 'Лекции':
                        echo '<div class="heading" id="categoty_lecture">' . $eventType['CategoryName'] . '</div>';
                        break;
                }
                ?>
                <div class="row">

                    <?php foreach ($eventType['Events'] as $index => $row):
                        $index++;
                        $rowNumber = ceil($index / 3);
                        $needToStyle = $row['needToStyle'] == 1;
                        $isBigCard = ($rowNumber % 2 == 0 && $index % 3 == 1)
                            || ($rowNumber % 2 != 0 && $index % 3 == 0);
                    ?>

                        <?php if ($needToStyle): ?>

                            <div class="circle row__circle_big"></div>
                            <div class="circle row__circle_small"></div>

                            <?php if ($isBigCard): ?>

                                <div class="d-none d-xl-block my-xl-3 col-xl-6 ">
                                    <!-- <div class="col-12 col-sm-6 col-lg-4 col-xl-6 my-2 my-xl-3"> -->
                                    <div class="card card_big my-2 my-md-0">
                                        <img src="<?= $row['imgEvent'] ?>" class="card-img-top img-fluid"
                                            alt="<?= $row['nameEvent'] ?>">
                                        <div class="img-wrapper"></div>
                                        <div class="img-wrapper__text-content ">
                                            <h5 class="img-wrapper__card-title"><?= $row['nameEvent'] ?></h5>
                                            <div class="img-wrapper__tickets">
                                                <?php echo $row['ticketsEvent'] == 1 ? 'билеты есть' : 'билетов нет' ?>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="wrapper d-flex justify-content-between align-items-center">
                                                <div class="card-body__cost-row  "><span class="bage me-1"><img
                                                            src="/img/svg/ticket.svg" alt="ticket"></span>
                                                    <?php echo renderCost($cost_arr, $row) ?>
                                                </div>
                                                <a href="/php/pages/ticket.php?id=<?= $row['idEvent'] ?>"
                                                    class="btn btn-primary">Купить</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            <?php endif; ?>

                        <?php else: ?>

                            <div class="circle row__circle_extra-small"></div>

                        <?php endif; ?>

                        <div
                            class="col-12 <?php echo ($needToStyle && $isBigCard) ? 'd-block d-xl-none' : 'col-xl-3' ?> col-sm-6 col-lg-4 my-2 my-xl-3 ">
                            <div class="card card_small">
                                <div class="img-wrapper">
                                    <img src="<?= $row['imgEvent'] ?>" class="card-img-top img-fluid"
                                        alt="<?= $row['nameEvent'] ?>" style="height: 13rem; object-fit: cover;">
                                    <div class="img-wrapper__text-content">
                                        <h5 class="img-wrapper__card-title"><?= $row['nameEvent'] ?></h5>
                                        <div class="img-wrapper__tickets">
                                            <?php echo $row['ticketsEvent'] == 1 ? 'билеты есть' : 'билетов нет' ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="card-body__cost-row mb-3 "><span class="bage me-1"><img
                                                src="/img/svg/ticket.svg" alt="ticket"></span>
                                        <?php echo renderCost($cost_arr, $row) ?>
                                    </div>


                                    <p class="card-text"><?= $row['descriptionEvent'] ?></p>
                                    <a href="/php/pages/ticket.php?id=<?= $row['idEvent'] ?>" class="btn btn-primary">Купить</a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

            <?php endforeach;
            ?>

            </div>
    </main>
    <?php
    $root = $_SERVER['DOCUMENT_ROOT'];
    include "$root/php/pages/footer.php"
        ?>
</body>

</html>