<footer class=" pt-md-3 pt-1">
    <nav class="navbar navbar-expand ">
        <div class="container-xxl container-fluid ps-0 ps-sm-3">
            <a class="navbar__logo d-flex align-items-center" href="/index.php">
                <img src="/img/svg/logoBig.svg" alt="логотип" class="navbar__logo-img">
                <div class="d-flex flex-column mx-lg-2 mx-0 navbar__logo-div">
                    <div class="navbar-brand navbar__logo-name"><span
                            class="navbar__logo-brand me-0 me-lg-5">Aquamarine</span> <br> <span
                            class="navbar__logo-desc d-none d-md-block">океанариум</span>
                    </div>
                </div>
            </a>

            <div class=" d-flex justify-content-end w-100">
                <ul class="navbar-nav">
                    <li class="nav-item mx-1 mx-lg-3">
                        <a class="nav-link  px-1 px-sm-3" aria-current="page" href="/index.php">Главная</a>
                    </li>
                    <li class="nav-item mx-1 mx-lg-3 p-0">
                        <a class="nav-link  px-1 px-sm-3" aria-current="page" href="/php/pages/tickets.php">Билеты</a>
                    </li>
                    <li class="nav-item mx-1 mx-lg-3 p-0">
                        <a class="nav-link  px-1 px-sm-3" href="/php/pages/aboutUs.php">О нас</a>
                    </li>
                    <?php if ($_COOKIE['login'] == ''): ?>
                        <li class="nav-item mx-1 mx-lg-3 p-0">
                            <a class="nav-link" href="/php/pages/profile.php" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">Профиль</a>
                        </li>
                    <?php else: ?>
                        <li class="nav-item mx-1 mx-lg-3 p-0">
                            <a class="nav-link" href="/php/pages/profile.php">Мой профиль</a>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>

        </div>
    </nav>
    <div class="container-xxl container-fluid pe-0 ps-0 ps-sm-3">

        <div class="line my-sm-3 my-2"></div>
        <div class="second-floor pb-3 d-flex justify-content-between">
            <div class="second-floord__copyright">© 2025, cоздано в учебных целях</div>
            <div class="second-floor__social-media">
                <ul class="second-floor__social-media_ul  d-flex">
                    <li class="second-floor__social-media_li mx-sm-2 mx-1"><img src="/img/svg/telegram.svg"
                            alt="телеграм"></li>
                    <li class="second-floor__social-media_li mx-sm-2 mx-1"><img src="/img/svg/vk.svg" alt="вк"></li>
                    <li class="second-floor__social-media_li mx-sm-2 mx-1"><img src="/img/svg/yandex.svg"
                            alt="яндекс дзен" id="yandex"></li>
                    <li class="second-floor__social-media_li mx-sm-2 mx-1"><img src="/img/svg/classmates.svg"
                            alt="одноклассники"></li>
                </ul>
            </div>
        </div>
    </div>
</footer>