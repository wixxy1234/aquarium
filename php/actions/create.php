
<?php


$db = new mysqli("localhost", "root", "", "aquarium");

$nameEvent = filter_var(trim($_POST['nameEvent']));
$descEvent = filter_var(trim($_POST['descEvent']));
$categoryEvent = intval($_POST['categoryEvent']);
$fotoEvent = filter_var(trim($_POST['fotoEvent']));

$idCategories = $_POST['idCategory'];
$costs = $_POST['cost'];


echo "<pre>";
print_r($_POST);
echo $fotoEvent;
echo "</pre>";


$stmt = $db->prepare("INSERT INTO `events` (nameEvent, descriptionEvent, ticketsEvent, idCategory, imgEvent) VALUES (?, ?, 1, ?, ?)");
$stmt->bind_param("ssis", $nameEvent, $descEvent, $categoryEvent, $fotoEvent);
$stmt->execute();
$stmt->close();

$newEventID = $db->insert_id;

foreach ($idCategories as $index => $idCategory) {
    $queryToCostTable = "INSERT INTO `event_cost` (idEvent, idTicketType, cost) VALUES ('$newEventID', '$idCategory', '$costs[$index]')";
    $db->query($queryToCostTable);
}

$db -> close();


header("Location: /php/pages/tickets.php");

?>