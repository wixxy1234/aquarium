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

    <link rel="stylesheet" href="/style/createEvent.css">
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
        <div class="container my-5">
            <form action="/php/actions/create.php" method="post" class="row g-3 needs-validation" novalidate>
                <h3>Создание нового мероприятия</h3>
                <div class="col-12 col-md-6 d-flex flex-column align-items-center">
                    <div class="col-8 my-4">
                        <label for="validationCustom01" class="form-label">Название мероприятия</label>
                        <input type="text" class="form-control" id="validationCustom01" name="nameEvent" minlength="5"
                            maxlength="50" required>
                        <div class="invalid-feedback text-start">
                            Пожалуйста, заполните поле верно (не менее 5 и не более 50 символов).
                        </div>
                    </div>
                    <div class="col-8 my-4">
                        <label for="validationCustom02" class="form-label">Описание мероприятия</label>
                        <textarea class="form-control" id="validationCustom02" rows="5" name="descEvent" minlength="30"
                            maxlength="150" required></textarea>
                        <div class="invalid-feedback text-start">
                            Пожалуйста, заполните поле верно (не менее 30 и не более 150 символов).
                        </div>
                    </div>
                    <div class="col-8 my-4">
                        <label for="validationCustom03" class="form-label">Категория мероприятия</label>
                        <select class="form-select" id="validationCustom03" name="categoryEvent">
                            <option value="1">Водные
                                шоу</option>
                            <option value="2">
                                Экскурсии</option>
                            <option value="3">Лекции
                            </option>
                            <option value="4">Основная экспозиция</option>
                        </select>
                    </div>

                    <div class="col-8 my-4">
                        <label for="validationCustom04" class="form-label">Добавить фото</label>
                        <select class="form-select" id="validationCustom04" name="fotoEvent">
                            <option value="\img\ticketsPage\extra-img-show-musician.jpg">Музыканты</option>
                            <option value="\img\ticketsPage\extra-img-show-people.jpg">
                                Актеры</option>
                            <option value="\img\ticketsPage\extra-img-show-killerwhale.jpg">Косатка
                            </option>
                            <option value="\img\ticketsPage\extra-img-lecture.jpg">Лекция</option>
                            <option value="\img\ticketsPage\extra-img-tour.jpg">Экскурсия</option>
                        </select>
                    </div>


                </div>
                <div class="col-12 col-md-6 d-flex flex-column align-items-center">
                    <?php
                    $link = new mysqli("localhost", "root", "", "aquarium");

                    $query = "SELECT * FROM `category_ticket`";
                    $result = mysqli_query($link, $query);
                    ?>

                    <?php
                    while ($costTicket = mysqli_fetch_assoc($result)):
                        ?>
                        <div class="col-8 my-4">
                            <input type="hidden" value="<?= $costTicket['idCategory'] ?>" name="idCategory[]">
                            <label for="validationCustom05" class="form-label">Название категории билета</label>
                            <input type="text" class="form-control" id="validationCustom05"
                                value="<?= $costTicket['nameCategory'] ?>" name="nameCategory[]" readonly>
                        </div>
                        <div class="col-8 my-4">
                            <label for="validationCustom06" class="form-label">Цена</label>
                            <input type="number" class="form-control" id="validationCustom06" name="cost[]" min="300"
                                max="10000" step="100" required>
                            <div class="invalid-feedback text-start">
                                Пожалуйста, заполните поле верно (не менее 300 и не более 10 000 руб).
                            </div>
                        </div>
                    <?php endwhile; ?>

                </div>
                <div class="col-12 text-center">
                    <button class="btn btn-create" type="submit">Создать</button>
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