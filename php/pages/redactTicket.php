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

    <link rel="stylesheet" href="/style/redactTicket.css">
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
        <?php
        $idTicket = $_GET['id'];

        $link = new mysqli("localhost", "root", "", "aquarium");

        $query = "SELECT DISTINCT event_cost.idEvent, events.descriptionEvent, events.nameEvent, category_event.nameCategory FROM event_cost 
            -- JOIN category_ticket ON event_cost.idTicketType = category_ticket.idCategory 
            JOIN events ON event_cost.idEvent = events.idEvent 
            JOIN category_event ON events.idCategory = category_event.idCategory
            WHERE event_cost.idEvent = $idTicket";

        $res = mysqli_query($link, $query);
        $ticket = $res->fetch_assoc();
        ?>
        <div class="container mt-4 mb-5">
            <form action="/php/actions/redact.php" method="post" class="row g-3 needs-validation" novalidate>
                <h3>Изменение данных о мероприятии <?= $ticket['nameEvent'] ?></h3>
                <div class="col-12 col-md-6 d-flex flex-column align-items-center">
                    <div class="col-8 my-4">
                        <label for="validationCustom01" class="form-label">ID мероприятия</label>
                        <input type="text" class="form-control" id="validationCustom01"
                            value="<?= $ticket['idEvent'] ?>" name="idEvent" readonly>
                    </div>
                    <div class="col-8 my-4">
                        <label for="validationCustom02" class="form-label">Название мероприятия</label>
                        <input type="text" class="form-control" id="validationCustom02"
                            value="<?= $ticket['nameEvent'] ?> " minlength="5" maxlength="50" name="nameEvent" required>
                        <div class="invalid-feedback text-start">
                            Пожалуйста, заполните поле верно (не менее 5 и не более 50 символов).
                        </div>
                    </div>
                    <div class="col-8 my-4">
                        <label for="validationCustom03" class="form-label">Описание мероприятия</label>
                        <textarea class="form-control" id="validationCustom03" rows="5"
                            name="descEvent" minlength="30"
                            maxlength="150" required><?= $ticket['descriptionEvent'] ?></textarea>
                    </div>
                    <div class="col-8 my-4">
                        <label for="validationCustom04" class="form-label">Категория мероприятия</label>
                        <select class="form-select" id="validationCustom04" name="categoryEvent">
                            <option value="1" <?php if ($ticket['nameCategory'] == 'Водные шоу')
                                echo "selected" ?>>Водные
                                    шоу</option>
                                <option value="2" <?php if ($ticket['nameCategory'] == 'Экскурсии')
                                echo "selected" ?>>
                                    Экскурсии</option>
                                <option value="3" <?php if ($ticket['nameCategory'] == 'Лекции')
                                echo "selected" ?>>Лекции
                                </option>
                                <option value="4" <?php if ($ticket['nameCategory'] == 'Основная экспозиция')
                                echo "selected" ?>>Основная экспозиция</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 d-flex flex-column align-items-center">
                        <?php

                            $query = "SELECT category_ticket.idCategory, category_ticket.nameCategory, event_cost.cost 
                            FROM category_ticket
                            JOIN event_cost ON category_ticket.idCategory = event_cost.idTicketType
                            WHERE event_cost.idEvent = $idTicket 
                            ";

                            $result = mysqli_query($link, $query);
                            ?>

                    <?php
                    while ($costTicket = $result->fetch_assoc()):
                        ?>
                        <input type="hidden" value="<?= $costTicket['idCategory'] ?>" name="idCategory[]">
                        <div class="col-8 my-4">
                            <label for="validationCustom05" class="form-label">Название категории билета</label>
                            <input type="text" class="form-control" id="validationCustom05"
                                value="<?= $costTicket['nameCategory'] ?>" name="nameCategory[]" readonly>
                        </div>
                        <div class="col-8 my-4">
                            <label for="validationCustom06" class="form-label">Цена</label>
                            <input type="number" class="form-control" id="validationCustom06"
                                value="<?= intval($costTicket['cost']) ?>" name="cost[]" min="300" max="10000" step="100">
                            <div class="invalid-feedback text-start">
                                Пожалуйста, заполните поле верно (не менее 300 и не более 10 000 руб).
                            </div>
                        </div>
                    <?php endwhile; ?>

                </div>
                <div class="col-12 text-center">
                    <button class="btn btns-ticket btn-save" type="submit">Сохранить изменения</button>
                </div>
            </form>
        </div>

    </main>
    <?php
    $root = $_SERVER['DOCUMENT_ROOT'];
    include "$root/php/pages/footer.php"
        ?>
    <script src="/script/validation.js"></script>
</body>

</html>