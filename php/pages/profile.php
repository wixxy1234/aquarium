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

    <link rel="stylesheet" href="/style/profilePage.css">
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
        $idUser = $_COOKIE['id'];
        $link = new mysqli("localhost", "root", "", "aquarium");

        $query = "SELECT * FROM `users` WHERE `idUser` = '$idUser'";

        $res = mysqli_query($link, $query);

        $user = $res->fetch_assoc();

        // print_r($user);
        ?>
        <div class="d-flex flex-column align-items-center">
            <div class="container-fluid profile__bg-img"></div>
            <div class="profile__img-user rounded-circle d-flex justify-content-center">
                <img src="/img/profilePage/userFotoUndefined.jpg" alt="undefinedUserFoto" class="align-center">
            </div>
            <div class="container profile">
                <div class="profile__name-user text-center"><?= $user['loginUser'] ?></div>
                <?php
                if ($_COOKIE['role'] == '1'):
                    ?>
                    <div class="row mt-5">
                        <div class="col-12 admin-panel">

                            <h5 class="heading">Админ панель</h5>
                            <div class="admin-panel__btns-wrapper d-flex justify-content-around">
                                <div class="col-6 col-md-5 col-lg-3 ">

                                    <a href="/php/pages/createEvent.php">
                                        <button type="button" class="admin__btns">
                                            Добавить новое событие +
                                        </button>

                                    </a>
                                </div>
                                <div class="col-6 col-md-5 col-lg-3 d-flex align-items-center justify-content-center">
                                    <a href="/php/pages/deleteEvent.php">
                                        <button type="button" class="admin__btns">
                                            Удалить событие -
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
                <div class="row mt-5">
                    <div class="col-12 col-md-6">
                        <div class="future-events">
                            <div class="future-events__heading heading">
                                Предстоящие мероприятия:
                            </div>
                            <div class="future-events__events events mt-4">
                                Билет еще не куплен
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 my-5 my-sm-0">
                        <div class="past-events">
                            <div class="past-events__heading heading">
                                Посещенные мероприятия:
                            </div>
                            <div class="past-events__events events mt-4">
                                Билет еще не куплен
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row row-second">

                    <div class="col-12 col-md-6">
                        <div class="promo position-relative">
                            <form class="promo-form d-flex flex-column">
                                <div class="promo-form__heading heading">Есть промокод на скидку? Введите его здесь!
                                </div>
                                <input type="text" name="promo" class="promo-form__input mt-4" placeholder="Промокод">
                                <button type="button" class="promo-form__btn mt-3">Воспользоваться</button>
                            </form>
                            <div class="circle row__circle_extra-small"></div>
                        </div>
                    </div>
                    <div class="col-12 col-md-5 offset-md-1 d-flex align-items-center mt-5 mt-sm-0">
                        <div class="feedback">
                            <div class="feedback__heading">
                                Есть вопросы? Свяжитесь с нами, и мы обязательно разребемся
                            </div>
                            <div class="feedback__info mt-4">
                                <div class="feedback__info-wrapper my-2">
                                    <span class="badge"><img src="/img/svg/phone.svg" alt="phone" class="feedback__img"
                                            id="phone"></span>
                                    <span class="feedback__info-text">+7 (843) 344-71-71 (администрация)</span>
                                </div>
                                <div class="feedback__info-wrapper my-2">
                                    <span class="badge"><img src="/img/svg/envelope.svg" alt="phone"
                                            class="feedback__img"></span>
                                    <span class="feedback__info-text">akvamail@gmail.com</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </main>
    <?php
    $root = $_SERVER['DOCUMENT_ROOT'];
    include "$root/php/pages/footer.php"
        ?>
</body>

</html>