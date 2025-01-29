<?php

$link = new mysqli("localhost", "root", "", "aquarium");

$idEvent = $_GET['idEvent'];

print_r($_GET);

$queryToEventsTable = "DELETE FROM `events` WHERE `idEvent` = '$idEvent'";

$link -> query($queryToEventsTable);
$link -> close();


header("Location: /php/pages/deleteEvent.php");

?>