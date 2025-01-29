<?php

$db = new mysqli("localhost", "root", "", "aquarium");

$ticketCounts = $_POST['ticketCount'];
$idUser = $_COOKIE['id'];
$idEventCost = $_POST['idEventCost'];

$action = $_POST['action'];

function insertIntoCart($db, $ticketCounts, $idEventCost, $idUser){
    for ($i = 0,  $size = count($ticketCounts); $i < $size; ++$i) {
        if ($ticketCounts[$i] > 0) {
            $db->query("INSERT INTO `cart_items` (`userID`, `eventCostID`, `counter` ) VALUES ('$idUser', '$idEventCost[$i]', '$ticketCounts[$i]')");
        }
    }

}

if ($action === 'to_tickets') {
    insertIntoCart($db, $ticketCounts, $idEventCost, $idUser);
    header("Location: /php/pages/tickets.php");
    exit();
} else {
    insertIntoCart($db, $ticketCounts, $idEventCost, $idUser);
    header("Location: /php/pages/cart.php");
    exit();
}
