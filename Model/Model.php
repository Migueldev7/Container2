<?php




require("DataBase/DataBase.php");

$name = $_REQUEST['name'];
$number = $_REQUEST['number'];
$status = $_REQUEST['status'];
$categoria = $_REQUEST['categoria'];

$service = new Service();

if ($number == "" || $number == null) {
    echo "Valores não podem ser nulos";
} else if ($telefone == "" || $telefone == null) {
    echo "Valores não podem ser nulos";
} else {
    $service->registerContainer($name, $number, $status, $categoria);
}
