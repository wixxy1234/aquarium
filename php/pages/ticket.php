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

    <link rel="stylesheet" href="/style/ticketPage.css">
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
        <div class="container">

            <?php
            $idTicket = $_GET['id'];

            $link = new mysqli("localhost", "root", "", "aquarium");

            $query = "SELECT DISTINCT event_cost.idEventCost, event_cost.idEvent, event_cost.idTicketType, event_cost.cost, category_ticket.nameCategory, category_ticket.descCategory, category_ticket.imgCategory, events.descriptionEvent, events.nameEvent FROM event_cost 
            JOIN category_ticket ON event_cost.idTicketType = category_ticket.idCategory 
            JOIN events ON event_cost.idEvent = events.idEvent 
            WHERE event_cost.idEvent = $idTicket";

            $res = mysqli_query($link, $query);

            $tickets = [];
            while ($ticket = $res->fetch_assoc()) {
                array_push($tickets, $ticket);
            }

            $ticketsJson = json_encode($tickets);
            ?>

            <?php
            $query = "SELECT events.descriptionEvent, events.nameEvent FROM events WHERE idEvent = $idTicket";
            $resInfo = mysqli_query($link, $query);

            $ticketInfo = $resInfo->fetch_assoc();

            ?>

            <div class="main-desc row mt-5">
                <div class="col-md-9 col-12">
                    <div class="main-desc__name"><?= $ticketInfo['nameEvent'] ?></div>
                    <div class="main-desc__desc mt-4"><?= $ticketInfo['descriptionEvent'] ?></div>
                </div>
                <div class="col-md-3">
                    <img src="/img/ticketPage/fish.png" alt="fish" class="main-desc__img  d-none d-md-block">
                </div>
            </div>

            <div class="circle row__circle_extra-small"></div>


            <form action="/php/actions/addTicketsToDB.php" method="post" onsubmit="updateHiddenFields()">
                <?php
                foreach ($tickets as $ticket):
                    ?>
                    <input type="hidden" name="idEventCost[]" value="<?= $ticket['idEventCost'] ?>"
                        class="ticket-row__count-ticket idEventCost">
                    <div class="ticket-row d-flex mb-5 col-12 col-lg-9">
                        <div class="ticket-row__name-ticket col-lg-5 col-xl-4 col-5 d-flex">
                            <div class="col-4 ticket-row__img  d-flex justify-content-center align-items-center">
                                <img src="<?= $ticket['imgCategory'] ?>" alt="<?= $ticket['nameCategory'] ?>"
                                    class="img-ticket">
                            </div>
                            <div class="col-lg-8 col-8 ticket-row__name d-flex flex-column justify-content-center">
                                <div class="ticket-row__name_title"><?= $ticket['nameCategory'] ?></div>
                                <div class="ticket-row__name_desc"><?= $ticket['descCategory'] ?></div>
                            </div>
                        </div>
                        <div
                            class="col-3 col-lg-2 offset-xl-1 offset-xxl-0 d-flex justify-content-center align-items-center">
                            <span name="cost" class="ticket-row__cost"><?= $ticket['cost'] ?> </span>
                            <span class="ticket-row__cost_currency">руб</span>
                        </div>
                        <div
                            class="ticket-row__btns col-3 col-md-2 col-lg-2  offset-1 offset-sm-1 offset-md-2 offset-lg-3 offset-xxl-4 d-flex justify-content-around align-items-center">
                            <button type="button" name="minus" class="ticket-row__btn ticket-row__btn_minus"> — </button>
                            <input type="hidden" name="ticketCount[<?= $index ?>]" value="0"
                                class="ticket-row__count-ticket hiddenInput">
                            <span name="count" class="ticket-row__count-ticket">0</span>
                            <button type="button" name="plus" class="ticket-row__btn ticket-row__btn_plus"> + </button>
                        </div>
                    </div>
                <?php endforeach; ?>

                <div class="d-flex col-12 col-lg-9 justify-content-between align-items-center">
                    <div class="footnote col-7">*при покупке льготного билета работники океанариума могут потребовать
                        документы, подтверждающие льготную категорию</div>
                    <div class=" col-3 col-xl-3 text-center">
                        <span class="text-total">Итого: </span>
                        <div class="total d-inline">
                            0руб
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-9 d-flex justify-content-end mt-4">
                    <div class="btn-wrapper col-8 col-sm-6 col-md-5 col-xl-4 d-flex">
                        <button type="submit" class="btn btns-ticket btn-exit w-100" value="to_tickets" name="action">К
                            афише</button>
                        <button type="submit" class="btn btns-ticket btn-buy w-100 ms-4" value="to_cart"
                            name="action">Купить</button>
                    </div>
                </div>


                <?php if ($_COOKIE['role'] == 1): ?>
                    <div class="col-12 col-lg-9 d-flex justify-content-end mt-4">
                        <a class="btn btns-ticket btn-redact px-4"
                                href="/php/pages/redactTicket.php?id=<?=$ticket['idEvent']?>">Редактировать</a>
                    </div>
                <?php endif; ?>
            </form>

        </div>

        <div class="alert-wrapper d-flex justify-content-end col-12">
            <div class="alert alert-danger alert-dismissible fade show  col-xl-3 col-xl-4 col-lg-5 col-sm-8 me-sm-5 "
                role="alert">
                <strong>Внимание!</strong> Вы не можете купить больше 10 билетов.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>


        <script>
            let btnPlus = document.getElementsByName("plus");
            let btnMinus = document.getElementsByName("minus");
            let totalDiv = document.getElementsByClassName("total")[0];
            let countDiv = document.getElementsByName("count");

            let tickets = [];
            <?= $ticketsJson ?>.forEach(t => {
                tickets.push({
                    cost: parseInt(t.cost),
                    counter: 0,
                    idEventCost: t.idEventCost
                });
            });


            let totalCost = 0;
            let totalCounter = 0;

            let arrBtnsPlus = [...btnPlus];
            let arrBtnsMinus = [...btnMinus];

            function handleButtonPlusClick(index) {
                return function toPlus() {
                    if (totalCounter >= 10) {
                        showAlert();
                        return;
                    }

                    let ticket = tickets[index];

                    totalCost += ticket.cost;
                    totalDiv.innerText = totalCost + 'руб'

                    ticket.counter++;
                    totalCounter++;
                    countDiv[index].innerText = ticket.counter;
                }
            }

            function handleButtonMinusClick(index) {
                return function toMinus() {
                    if (totalCost <= 0) {
                        totalCost = 0;
                        totalDiv.innerText = totalCost + 'руб';
                    }

                    if (countDiv[index].innerText > 0) {
                        let ticket = tickets[index];

                        ticket.counter--;
                        totalCounter--;
                        countDiv[index].innerText = ticket.counter;

                        totalCost -= ticket.cost;
                        totalDiv.innerText = totalCost + 'руб'
                    }
                }
            }

            arrBtnsPlus.forEach((button, index) => {
                button.addEventListener("click", handleButtonPlusClick(index));
            })

            arrBtnsMinus.forEach((button, index) => {
                button.addEventListener("click", handleButtonMinusClick(index));
            });


            let alert = document.getElementsByClassName('alert')[0]

            function showAlert() {
                alert.classList.add('d-block');
                setTimeout(() => {
                    alert.classList.remove('d-block')
                }, 3000)
            }


            let ticketRows = document.getElementsByClassName("ticket-row");
            ticketRows[3].style.border = 'none';


            function updateHiddenFields() {
                let countDivs = document.getElementsByName("count");
                let hiddenInputs = document.getElementsByClassName("hiddenInput");
                let arrIdEventCost = document.getElementsByClassName("idEventCost");
                // let selectedIdEventCosts = [];

                for (let i = 0; i < countDivs.length; i++) {
                    hiddenInputs[i].value = tickets[i].counter;
                    if (hiddenInputs[i].value > 0) {
                        arrIdEventCost[i].value = tickets[i].idEventCost; // Обновляем idEventCost
                        // selectedIdEventCosts.push(tickets[i].idEventCost); // Добавляем в массив только если количество > 0
                    } else {
                        arrIdEventCost[i].value = ''; // Сбрасываем значение, если количество 0
                    }
                }

                // document.getElementById("selectedIdEventCosts").value = selectedIdEventCosts.join(',');
            }
        </script>

    </main>
    <?php
    $root = $_SERVER['DOCUMENT_ROOT'];
    include "$root/php/pages/footer.php"
        ?>
</body>

</html>