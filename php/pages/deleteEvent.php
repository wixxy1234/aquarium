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

    <link rel="stylesheet" href="/style/deleteEvent.css">
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

            $link = new mysqli("localhost", "root", "", "aquarium");

            $query = "SELECT DISTINCT events.idEvent, events.descriptionEvent, events.nameEvent, events.imgEvent ,category_event.nameCategory FROM events
            JOIN category_event ON events.idCategory = category_event.idCategory";

            $res = mysqli_query($link, $query);
            ?>

            <table class="table my-md-5 my-3" width="100%">
                <caption class="mb-2">Основная информация о событиях и удаление</caption>
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Название</th>
                        <th scope="col">Описание</th>
                        <th scope="col">Категория</th>
                        <th scope="col">Фото</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($row = $res->fetch_assoc()):
                        ?>
                        <tr>
                            <th scope="row"> <?= $row['idEvent'] ?> </th>
                            <td><?= $row['nameEvent'] ?></td>
                            <td><?= $row['descriptionEvent'] ?></td>
                            <td><?= $row['nameCategory'] ?></td>
                            <td><?= $row['imgEvent'] ?></td>
                            <td> <a class="text-danger" data-bs-toggle="modal" data-bs-target="#staticBackdrop"
                                    data-id="<?= $row["idEvent"] ?>"> Удалить событие </a>
                            </td>
                        </tr>





                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </main>


    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true" style="color: black;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Подтвердите действие</h1>
                </div>
                <div class="modal-body">
                    Вы действительно хотите удалить событие?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Нет</button>
                    <a href="#" id="delete" class="btn btn-danger"> Удалить </a>
                </div>
            </div>
        </div>
    </div>


    <?php
    $root = $_SERVER['DOCUMENT_ROOT'];
    include "$root/php/pages/footer.php"
        ?>



    <script>
        const deleteLinks = document.querySelectorAll('.text-danger');
        // let deleteLinks = document.getElementsByClassName('text-danger');

        deleteLinks.forEach(link => {
            link.addEventListener('click', function () {
                let idEvent = link.getAttribute('data-id');
                let deleteBtn = document.getElementById('delete');

                deleteBtn.href = `/php/actions/delete.php?idEvent=${idEvent}`;
            }
            )
        });

    </script>

</body>

</html>