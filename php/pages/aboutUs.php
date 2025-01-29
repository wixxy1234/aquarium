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

    <link rel="stylesheet" href="/style/aboutUsPage.css">
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
            <div class="logo__wrapper col-lg-10 offset-lg-1 col-12 text-center d-flex flex-column  mt-5">
                <div class="logo__wrapper_small">океанариум</div>
                <div class="logo__wrapper_big"></div>
            </div>
            <div class="info__box d-flex flex-column flex-lg-row ">
                <div class="info__logo col-12 col-lg-4 ms-lg-5 ms-0 d-flex justify-content-center align-items-center">О
                    НАС</div>
                <div class="info__text">
                    <p>Океанариум «Аквамарин» — это уникальное место, где посетители могут познакомиться с
                        разнообразными морскими обитателями и узнать больше об их жизни, погрузившись в удивительный
                        подводный мир.</p>
                    <p>В океанариуме регулярно проходят познавательные экскурсии, лекции и мастер-классы для детей и
                        взрослых, которые позволяют посетителям узнать много нового о морской флоре и фауне, а также о
                        процессах, происходящих в Мировом океане.</p>

                    <p>Одним из главных преимуществ океанариума «Аквамарин» является его интерактивность. Здесь созданы
                        все условия для того, чтобы посетители могли максимально близко познакомиться с морскими
                        обитателями и даже потрогать некоторых из них. Это делает посещение океанариума незабываемым и
                        интересным для всей семьи.</p>
                </div>
            </div>
            <div class="facts__box">
                <div class="row col-12 col-md-10 offset-md-1">
                    <div class="col-12 col-md-6">
                        <div class="facts__img facts__img_square col-10  mb-2 mb-md-5"></div>
                        <div class="facts__text"> <span class="facts__text_bold">50 000 м2</span> экпозиции, наполненных
                            морскими обитателями,<span class="facts__text_bold"> 45 </span> интерактивных экспонатов
                        </div>
                    </div>
                    <div class="circle d-sm-block d-none"></div>
                    <div class="col-12 col-md-6 mt-5 mt-md-0 ">
                        <div class="facts__text  mb-2 mb-md-5"> <span class="facts__text_bold">1500</span><br>
                            Видов экзотических рыб, обитающих во всех концах света, собраны в одном месте </div>
                        <div class="facts__img facts__img_rentagle col-9 offset-md-3"></div>
                    </div>
                </div>
            </div>
            <div class="contacts__box">
                <div class="contacts__heading heading text-center">Контактная информация</div>
                <div class="row mt-md-5 mt-3">
                    <div class="contacts__item col-6 col-lg-3 d-flex flex-column align-items-center text-center ">
                        <div class="contacts__img mb-3">
                            <img src="/img/svg/phone.svg" class="contacts__svg contacts__svg_phone" alt="phone">
                        </div>
                        <div class="contacts__name mb-md-4 mb-2">Телефон:</div>
                        <div class="contacts__info"><span class="contacts__info_big">+7 (843) 344-71-71</span>
                            <br>(администрация)
                        </div>
                    </div>

                    <div class="contacts__item col-6 col-lg-3 d-flex flex-column align-items-center text-center ">
                        <div class="contacts__img mb-3">
                            <img src="/img/svg/map.svg" class="contacts__svg" alt="map">
                        </div>
                        <div class="contacts__name mb-md-4 mb-2">Адрес:</div>
                        <div class="contacts__info">Новоселов пер., д.5, <br>м. Фили, г. Москва</div>
                    </div>

                    <div
                        class="contacts__item col-6 col-lg-3 d-flex flex-column align-items-center text-center mt-5 mt-lg-0">
                        <div class="contacts__img mb-3">
                            <img src="/img/svg/envelope.svg" class="contacts__svg" alt="envelope">
                        </div>
                        <div class="contacts__name mb-md-4 mb-2">Электронная почта:</div>
                        <div class="contacts__info">akvamail@gmail.com</div>
                    </div>

                    <div
                        class="contacts__item col-6 col-lg-3 d-flex flex-column align-items-center text-center mt-5 mt-lg-0">
                        <div class="contacts__img mb-3">
                            <img src="/img/svg/clock.svg" class="contacts__svg" alt="clock">
                        </div>
                        <div class="contacts__name mb-md-4 mb-2">Часы работы:</div>
                        <div class="contacts__info">Каждый день с <span class="contacts__info_big"> 9.00</span> до
                            <br><span class="contacts__info_big"> 20.00</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="container-fluid">

            <div class="qa__box">
                <div class="qa__heading heading text-center mb-2">Вопросы и ответы</div>
                <div class="container">
                    <div class="qa__handler my-5 mt-4">
                        <div class="qa__question mb-2">- При покупке билета на Водное шоу могу ли я посетить Аквариум?
                        </div>
                        <div class="qa__answer">- Приобретая билет на Водное шоу, вы можете посетить только само шоу.
                            Чтобы попасть в Аквариум, вам нужно будет купить отдельный билет.</div>
                    </div>

                    <div class="qa__handler my-5">
                        <div class="qa__question mb-2">- Есть ли скидки на билеты на водное Шоу или в Аквариум в День
                            рождения?</div>
                        <div class="qa__answer">- В день рождения, предъявив документ, удостоверяющий личность, вы
                            получите возможность купить один билет на водное шоу или посетить аквариум со скидкой 15%.
                        </div>
                    </div>

                    <div class="qa__handler my-5">
                        <div class="qa__question mb-2">- Есть ли в океанариуме доступная среда для людей с ограниченными
                            возможностями?</div>
                        <div class="qa__answer">- В Аквамарине создана безбарьерная среда для людей с ограниченными
                            возможностями, при возникновении затруднений обратитесь к сотрудникам.</div>
                    </div>

                    <div class="qa__handler my-5">
                        <div class="qa__question mb-2">- Я оплатил билеты, но они не пришли на почту, что делать?</div>
                        <div class="qa__answer">- Билеты приходят на электронную почту в течение 30 минут после оплаты
                            заказа. Если по истечении 30 минут билеты не поступили, позвоните в Информационный центр по
                            телефону +7(499)677-77-77</div>
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