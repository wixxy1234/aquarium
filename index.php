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

    <link rel="stylesheet" href="/style/mainPage.css">
    <link rel="stylesheet" href="/style/headerAndFooter.css">
    <link rel="stylesheet" href="/style/reset.css">
    <link rel="stylesheet" href="/style/mainStyle.css">


    <script defer src="/script/script.js"></script>
</head>

<body>
    <?php
    $root = $_SERVER['DOCUMENT_ROOT'];
    include "$root/php/pages/header.php"
    ?>

    <main class="m-0">

        <div class="container-fluid p-0">

            <div class="main-header">

                <div class="layers d-flex align-items-center justify-content-center ">
                    <div class="layers__left-side col-md-2 d-none d-md-block  mb-5">
                        <ul class="left-side__ul">
                            <li ckass="left-side__li d-flex py-5">
                                <span class="left-side__li_big d-block  text-center pt-5">+1 500</span>
                                <span class="left-side__li_small d-block  text-center">видов экзотических рыб</span>
                            </li>
                            <li ckass="left-side__li d-flex">
                                <span class="left-side__li_big d-block  text-center pt-5">+45</span>
                                <span class="left-side__li_small d-block  text-center">интерактивных экспонатов</span>
                            </li>
                            <li ckass="left-side__li d-flex">
                                <span class="left-side__li_big d-block  text-center pt-5">+10</span>
                                <span class="left-side__li_small d-block  text-center">тематических экскурсий</span>
                            </li>
                        </ul>
                    </div>

                    <div class="layers__header text-center mb-5 col-12 col-md-8">

                        <div class="layers__caprion">океанариум</div>
                        <div class="layers__title">Аквамарин</div>
                        <div class="layers__btn mt-4 d-flex justify-content-center">
                            <button type="button"
                                class="btn btn__more d-flex justify-content-center align-items-center"><a
                                    href="#main_content">Узнать больше</a></button>
                        </div>
                    </div>

                    <div
                        class="layers__right-side col-md-2 d-none d-md-block border-end border-1 border-white me-4 me-xxl-5">
                        <ul class="swiper-pagination__ul text-end ps-1 h-100 d-flex flex-column justify-content-around">
                            <li class="swiper-pagination__li li d-flex align-items-center justify-content-end"> 
                                <div class="swiper-pagination__name me-2">
                                    <span>Тихий</span>
                                    <span>океан</span>
                                </div>
                                <span class="badge"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor"
                                        class="bi bi-circle" viewBox="0 0 16 16">
                                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                                    </svg></span>
                                <img src="/img/svg/line.svg" alt="line">
                            </li>
                            <li class="swiper-pagination__li li d-flex align-items-center justify-content-end">
                                <div class="swiper-pagination__name me-2">
                                    <span>Индийский</span>
                                    <span>океан</span>
                                </div>
                                <span class="badge">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor"
                                        class="bi bi-circle" viewBox="0 0 16 16">
                                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                                    </svg>
                                </span>
                                <img src="/img/svg/line.svg" alt="line">
                            </li>
                            <li class="swiper-pagination__li li d-flex align-items-center justify-content-end">
                                <div class="swiper-pagination__name me-2">
                                    <span>Атлантический</span>
                                    <span>океан</span>
                                </div>
                                <span class="badge"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor"
                                        class="bi bi-circle" viewBox="0 0 16 16">
                                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                                    </svg></span>
                                <img src="/img/svg/line.svg" alt="line">
                            </li>
                        </ul>

                    </div>

                    <div class="layer layers__base" style="background-image: url(/img/slider/ocean.jpg);">
                    </div>

                    <div class="layer layers__front" style="background-image: url(/img/slider/people.png);"></div>

                </div>

            </div>
            <div class="main-content">
                <div class="container mt-5">
                    <div class="catalog-mini col-12">
                        <span class="catalog-mini__header heading" id="main_content">Для детей и взрослых</span>
                        <div class="catalog-mini__cards mt-5">
                            <div class="row">
                                <div class="card col-6 col-lg-4 mb-2 mb-xl-2 mb-xxl-5">
                                    <div class="catalog-mini__card p-2 p-sm-3 h-100">
                                        <div class="card__img-box">
                                            <div class="card__img card-img-top" id="box-img__img1"></div>

                                        </div>
                                        <div class="card-title mt-1 mt-md-2"><a href="/php/pages/tickets.php"
                                                class="card__link ">Постоянная экспозиция</a></div>
                                    </div>

                                </div>

                                <div class="card  col-6 col-lg-4 mb-2 mb-xl-2 mb-xxl-5">
                                    <div class="catalog-mini__card p-2 p-sm-3">

                                        <div class="card__img-box">
                                            <div class="card__img card-img-top" id="box-img__img2"></div>

                                        </div>
                                        <div class="card-title mt-1 mt-md-2"><a
                                                href="/php/pages/tickets.php#categoty_tour"
                                                class="card__link ">Тематические экскурсии</a></div>
                                    </div>
                                </div>


                                <div class="circle catalog-mini__circle_big"></div>
                                <div class="circle catalog-mini__circle_small"></div>

                                <div
                                    class="card d-none d-lg-flex col-lg-4 mb-5 d-flex align-items-center justify-content-center">
                                    <img src="/img/svg/starfish.svg" alt="starfish" class="card__svg svg__starfish">
                                </div>

                                <div
                                    class="card d-none d-lg-flex col-lg-4 mb-5 d-flex align-items-center justify-content-center ">
                                    <img src="/img/svg/coral.svg" alt="coral" class="card__svg svg__coral">

                                </div>

                                <div class="card col-6 col-lg-4 mb-2 mt-4 mt-md-5 mb-md-5 ">
                                    <div class="catalog-mini__card p-2 p-sm-3">

                                        <div class="card__img-box">
                                            <div class="card__img card-img-top" id="box-img__img3"></div>

                                        </div>
                                        <div class="card-title mt-1 mt-md-2"><a
                                                href="/php/pages/tickets.php#categoty_water-show"
                                                class="card__link ">Водные шоу</a></div>
                                    </div>
                                </div>

                                <div class="card col-6  col-lg-4 mb-2 mt-4 mt-md-5 mb-md-5">
                                    <div class="catalog-mini__card p-2 p-sm-3">

                                        <div class="card__img-box">
                                            <div class="card__img card-img-top" id="box-img__img4"></div>

                                        </div>
                                        <div class="card-title mt-1 mt-md-2"><a
                                                href="/php/pages/tickets.php#categoty_lecture"
                                                class="card__link ">Лекции</a></div>
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>
                </div>

                <div class="container-fluid position-relative">
                    <div class="row advantages">
                        <div class="advantages__jellyfish col-12 col-lg-7 order-lg-1 order-2 p-0 mt-2 mt-lg-0">
                            <div class="bg__jellyfish ">
                            </div>
                        </div>
                        <div class="advantages__text col-12 col-lg-5 order-1 order-lg-2">
                            <div class="container advantages__container">
                                <div class="col-xl-9 col-lg-11 col-12 advantages__block">

                                    <div class="heading text-center text-lg-start mb-3">
                                        Исследуйте глубину
                                    </div>
                                    <div class="advantages__handler d-flex">
                                        <div class="row">
                                            <div class="advantages__item d-flex align-items-center flex-column flex-lg-row col-6 col-lg-9 col-xl-10 pe-5 pe-lg-0 ps-0       "
                                                id="testAnimation">
                                                <div
                                                    class="item__circle  d-flex flex-column align-items-center justify-content-center col-2">
                                                    <div class="circle__text text-center">
                                                        <div class="circle__text_big">1 500</div>
                                                        <div class="circle__text_small">видов</div>
                                                    </div>
                                                </div>
                                                <div class="item__text ms-lg-5 text-center">Экзотических рыб со всего
                                                    света</div>
                                            </div>


                                            <div
                                                class="advantages__item advantages__item_move d-flex align-items-lg-center flex-column flex-lg-row   col-6 col-lg-9 col-xl-10  order-3 order-lg-2  align-items-end pe-5 pe-lg-0 ps-0">
                                                <div
                                                    class="item__circle  d-flex flex-column align-items-center justify-content-center col-2 ">
                                                    <div class="circle__text text-center">
                                                        <div class="circle__text_big">95</div>
                                                        <div class="circle__text_small">штук</div>
                                                    </div>
                                                </div>
                                                <div class="item__text ms-lg-5 text-center  ps-5  ps-lg-0"
                                                    id="item__text_media">Водных аквариумов</div>
                                            </div>



                                            <div
                                                class="advantages__item advantages__item_move d-flex align-items-lg-center flex-column flex-lg-row  col-6 col-lg-9 col-xl-10  order-4 order-lg-3  align-items-start ps-5 ps-lg-0">
                                                <div
                                                    class="item__circle  d-flex flex-column align-items-center justify-content-center col-2">
                                                    <div class="circle__text text-center">
                                                        <div class="circle__text_big">45</div>
                                                        <div class="circle__text_small">залов</div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="item__text ms-lg-5 text-center ps-1 ps-sm-3 ps-md-1 ps-lg-0">
                                                    Экспозиции</div>
                                            </div>


                                            <div
                                                class="advantages__item d-flex align-items-center flex-column flex-lg-row  col-6 col-lg-9 col-xl-10  order-2 order-lg-4  ps-5 ps-lg-0">
                                                <div
                                                    class="item__circle  d-flex flex-column align-items-center justify-content-center col-2">
                                                    <div class="circle__text text-center">
                                                        <div class="circle__text_big">3</div>
                                                        <div class="circle__text_small">часа</div>
                                                    </div>
                                                </div>
                                                <div class="item__text ms-lg-5 text-center ">Для полного осмотра
                                                    экспозиции</div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="container test mt-5">

                                <div class="col-12 position-relative"">
                                    <div class=" heading text-center heading_border">9 интересных мест</div>
                                <div class="row places-box mt-5 ">
                                    <div class="col-6 col-md-4 mb-4">
                                        <div class="card places-box__card pe-2 pe-lg-5 pb-2 pt-5  text-end"
                                            id="places-box__1">
                                            <div class="places-box__num">01</div>
                                            <div class="places-box__desc">Галерея медуз</div>
                                        </div>
                                    </div>

                                    <div class="col-6 col-md-4 mb-4">
                                        <div class="card places-box__card pe-2 pe-lg-5 pb-2 pt-5  text-end"
                                            id="places-box__2">
                                            <div class="places-box__num">02</div>
                                            <div class="places-box__desc">Тихоокеанский регион</div>
                                        </div>
                                    </div>
                                    <div class="circle places-box__circle_small"></div>

                                    <div class="col-6 col-md-4 mb-4">
                                        <div class="card places-box__card pe-2 pe-lg-5 pb-2 pt-5  text-end"
                                            id="places-box__3">
                                            <div class="places-box__num">03</div>
                                            <div class="places-box__desc">Коралловые рифы</div>
                                        </div>
                                    </div>

                                    <div class="col-6 col-md-4 mb-4">
                                        <div class="card places-box__card pe-2 pe-lg-5 pb-2 pt-5  text-end"
                                            id="places-box__4">
                                            <div class="places-box__num">04</div>
                                            <div class="places-box__desc">Контактные черепахи</div>
                                        </div>
                                    </div>

                                    <div class="col-6 col-md-4 mb-4">
                                        <div class="card places-box__card pe-2 pe-lg-5 pb-2 pt-5  text-end"
                                            id="places-box__5">
                                            <div class="places-box__num">05</div>
                                            <div class="places-box__desc">Индийский океан</div>
                                        </div>
                                    </div>

                                    <div class="col-6 col-md-4 mb-4">
                                        <div class="card places-box__card pe-2 pe-lg-5 pb-2 pt-5  text-end"
                                            id="places-box__6">
                                            <div class="places-box__num">06</div>
                                            <div class="places-box__desc">Бассейн с акулами</div>
                                        </div>
                                    </div>

                                    <div class="col-6 col-md-4 mb-4">
                                        <div class="card places-box__card pe-2 pe-lg-5 pb-2 pt-5  text-end"
                                            id="places-box__7">
                                            <div class="places-box__num">07</div>
                                            <div class="places-box__desc">Карибское море</div>
                                        </div>
                                    </div>

                                    <div class="col-6 col-md-4 mb-4">
                                        <div class="card places-box__card pe-2 pe-lg-5 pb-2 pt-5  text-end"
                                            id="places-box__8">
                                            <div class="places-box__num">08</div>
                                            <div class="places-box__desc">Амфибии</div>
                                        </div>
                                    </div>

                                    <div class="col-6 col-md-4 mb-4">
                                        <div class="card places-box__card pe-2 pe-lg-5 pb-2 pt-5  text-end"
                                            id="places-box__9">
                                            <div class="places-box__num">09</div>
                                            <div class="places-box__desc">Редкие моллюски</div>
                                        </div>
                                    </div>

                                    <div class="circle places-box__circle_big"></div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-box">

                    <div class="col-12 col-md-6 ">
                        <form>
                            <div class="form-box__text">
                                <div class="heading mb-3">Оставайтесь на связи</div>
                                <div class="form-box__desc mb-2">Получайте рассылку о новых мероприятиях и наших акциях
                                    на свою электронную почту. Отказаться от рассылки можно в любой момент в личном
                                    кабинете. </div>
                            </div>
                            <div class="mb-3">

                                <input type="email" class="form-control" id="InputEmail1" placeholder="Ваш e-mail">
                            </div>
                            <button type="button"
                                class="btn btn-primary d-flex justify-content-center align-items-center p-3 p-lg-1">Отправить</button>
                        </form>
                    </div>
                </div>


                <div class="social-media__box">
                    <div class="container">
                        <div class="heading text-center  col-md-6 offset-md-3">Присоединяйтесь к нам в социальных сетях
                        </div>
                        <div class="row col-lg-8 col-xl-6 offset-lg-2 offset-xl-3 mt-5">

                            <div class="col-sm-4 col-5 offset-1 offset-sm-0 mb-3 social-media__img"
                                id="social-media__img1"></div>

                            <div
                                class="col-sm-4 col-5  social-media__text d-flex flex-column align-items-center justify-content-center">
                                <img src="/img/svg/telegram.svg" alt="telegram" class="social-media__svg">
                                <div class="social-media__link text-center">Телеграмм канал:<br>
                                    @aquamarine_ocean</div>
                            </div>

                            <div class="col-sm-4 col-5 offset-1 offset-sm-0 mb-3 social-media__img"
                                id="social-media__img2"></div>


                            <div
                                class="col-sm-4 col-5  social-media__text d-flex flex-column align-items-center justify-content-center">
                                <img src="/img/svg/vk.svg" alt="telegram" class="social-media__svg">
                                <div class="social-media__link text-center">Группа ВКонтакте:<br>
                                    @aquamarine_ocean</div>
                            </div>

                            <div class="col-sm-4 col-5 offset-1 offset-sm-0 mb-3 social-media__img"
                                id="social-media__img3"></div>

                            <div
                                class="col-sm-4 col-5  social-media__text d-flex flex-column align-items-center justify-content-center">
                                <img src="/img/svg/classmates.svg" alt="telegram" class="social-media__svg">
                                <div class="social-media__link text-center">Группа Одноклассники:<br>
                                    @aquamarine_ocean</div>
                            </div>


                            <div class="col-sm-4 col-5 offset-1 offset-sm-0 mb-3 social-media__img"
                                id="social-media__img4"></div>

                            <div
                                class="col-sm-4 col-5  social-media__text d-flex flex-column align-items-center justify-content-center">
                                <img src="/img/svg/yandex.svg" alt="telegram" class="social-media__svg" id="yandex-svg">
                                <div class="social-media__link text-center">Профиль Яндекс.Дзен:<br>
                                    @aquamarine_ocean</div>
                            </div>

                            <div class="col-sm-4 col-5 offset-1 offset-sm-0 mb-3  social-media__img d-none d-sm-block"
                                id="social-media__img5"></div>

                        </div>
                    </div>
                </div>

                <div class="bottom-img"></div>
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