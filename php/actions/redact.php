<?php

$db = new mysqli("localhost", "root", "", "aquarium");


$idEvent = $_POST['idEvent'];
$nameEvent = filter_var(trim($_POST['nameEvent']));
$descriptionEvent = filter_var(trim($_POST['descEvent']));
$categoryEvent = filter_var(trim($_POST['categoryEvent']));
$nameCategoryTicket = $_POST['nameCategory'];

$idCategories = $_POST['idCategory'];
$costs = $_POST['cost'];


$queryForUpdateEventInfo = "UPDATE `events` SET `nameEvent` = '$nameEvent', `descriptionEvent` = '$descriptionEvent', `idCategory` = '$categoryEvent' WHERE `idEvent` = '$idEvent' ";

$db->query($queryForUpdateEventInfo);


// Для обновления таблицы `event_cost`
foreach ($idCategories as $index => $idCategory) {
    $queryForUpdateCost = "UPDATE `event_cost` SET `cost` = '$costs[$index]' WHERE `idEvent` = '$_POST[idEvent]' AND `idTicketType` = '$idCategory' ";

    $db->query($queryForUpdateCost);
}

$db->close();


// if (isset($_POST)) {
//     echo "<pre>";
//     print_r($_POST);
//     echo "</pre>";
// }

header("Location: /php/pages/ticket.php?id=$idEvent");

?>