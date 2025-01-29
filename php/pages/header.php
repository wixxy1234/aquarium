<div style="all: initial; position: none; position: relative;">

    <header class="w-100">
        <nav class="navbar navbar-expand-lg">
            <div class="container-xxl container-fluid">
                <a class="navbar__logo d-flex align-items-center" href="/index.php">
                    <img src="/img/svg/logoBig.svg" alt="логотип" class="navbar__logo-img">
                    <div class="d-flex flex-column mx-2 navbar__logo-div">
                        <div class="navbar-brand navbar__logo-name"><span class="navbar__logo-brand">Aquamarine</span>
                            <br> <span class="navbar__logo-desc">океанариум</span>
                        </div>
                    </div>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <img src="/img/svg/menu.svg" alt="">
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <div class=" d-flex justify-content-end w-100 justify-content-md-end text-end">
                        <ul class="navbar-nav mb-2 mb-lg-0">
                            <li class="nav-item mx-lg-4 mx-1">
                                <a class="nav-link" aria-current="page" href="/php/pages/tickets.php">Билеты</a>
                            </li>
                            <li class="nav-item mx-lg-4 mx-1">
                                <a class="nav-link" href="/php/pages/aboutUs.php">О нас</a>
                            </li>
                            <?php if ($_COOKIE['login'] == ''): ?>
                                <li class="nav-item mx-lg-4 mx-1">
                                    <a class="nav-link" href="/php/pages/profile.php" ч data-bs-toggle="modal"
                                        data-bs-target="#exampleModal">Профиль</a>
                                </li>
                            <?php else: ?>
                                <li class="nav-item mx-lg-4 mx-1">
                                    <a class="nav-link" href="/php/pages/profile.php">Мой профиль</a>
                                </li>
                                <li class="nav-item mx-lg-4 mx-1">
                                    <a class="nav-link" href="/php/actions/exit.php">Выход</a>
                                </li>
                            <?php endif; ?>



                            <li class="nav-item mx-lg-4 mx-1">
                                <a class="nav-link" href="/php/pages/cart.php"><img src="/img/svg/cart.svg"
                                        alt="корзина"></a>
                            </li>


                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>



</div>
<div class="modal modal-lg fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body p-0">
                <div class="container " id="container">
                    <div class=" form-container sign-up-container">
                        <form action="/php/actions/reg.php" method="post" class="needs-validation" novalidate>
                            <h1 class="mb-3">Создать аккаунт</h1>
                            <input type="text" placeholder="Логин" name="login" class="form-control"
                                id="validationCustom01" required />
                            <div class="invalid-feedback text-start">
                                Пожалуйста, заполните поле верно.
                            </div>
                            <input type="email" placeholder="E-mail" name="email" class="form-control"
                                id="validationCustom02" required />
                            <div class="invalid-feedback text-start">
                                Пожалуйста, заполните поле верно.
                            </div>
                            <input type="password" placeholder="Пароль" name="pass" class="form-control"
                                id="validationCustom03" required />
                            <div class="invalid-feedback text-start">
                                Пожалуйста, заполите поле верно.
                            </div>
                            <button class="mt-4">Создать</button>
                        </form>
                    </div>
                    <div class=" form-container sign-in-container">
                        <form action="/php/actions/auth.php" method="post" class="needs-validation" novalidate>
                            <h1 class="mb-md-5 mb-3">Авторизация</h1>
                            <input type="text" placeholder="Логин" name="login" class="form-control"
                                id="validationCustom04" required />
                            <div class="invalid-feedback text-start">
                                Пожалуйста, заполните поле верно.
                            </div>
                            <input type="password" placeholder="Пароль" name="pass" class="form-control"
                                id="validationCustom05" required />
                            <div class="invalid-feedback text-start">
                                Пожалуйста, заполните поле верно.
                            </div>
                            <a href="#">Забыли пароль?</a>
                            <?php
                            if (isset($_GET['error'])) {
                                echo "<div class='error text-danger'>Неверный логин или пароль</div>";
                            }
                            ?>
                            <button>Войти</button>
                        </form>
                    </div>
                    <div class="overlay-container">
                        <div class="overlay">
                            <div class="overlay-panel overlay-left">
                                <h1>С возвращением!</h1>
                                <p>Чтобы оставаться на связи с нами, пожалуйста, войдите в аккаунт</p>
                                <button class="ghost" id="signIn">Войти</button>
                            </div>
                            <div class="overlay-panel overlay-right">
                                <h1>Приветствуем!</h1>
                                <p>Создайте свой аккаунт, чтобы совершать покупки</p>
                                <button class="ghost" id="signUp">Зарегистрироваться</button>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </div>
    </div>
</div>


<script>
    const signUpButton = document.getElementById('signUp');
    const signInButton = document.getElementById('signIn');
    const container = document.getElementById('container');

    signUpButton.addEventListener('click', () => {
        container.classList.add("right-panel-active");
    });

    signInButton.addEventListener('click', () => {
        container.classList.remove("right-panel-active");
    });





    document.addEventListener('DOMContentLoaded', function () {
        const urlParams = new URLSearchParams(window.location.search);
        if (urlParams.has('error')) {
            const modal = document.getElementById('exampleModal');
            const modalInstance = new bootstrap.Modal(modal); // Используем Bootstrap для открытия модала
            modalInstance.show();
        }
    });




    // function showModal() {
    //     const modal = document.getElementById('exampleModal');
    //     const modalInstance = new bootstrap.Modal(modal);
    //     modalInstance.show();
    // }
</script>
<script src="/script/validation.js"></script>