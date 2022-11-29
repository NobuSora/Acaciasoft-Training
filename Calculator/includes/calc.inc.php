<?php
declare(strict_types = 1);
include 'autoloader.inc.php';

$Op = $_POST['operator'];
$Num1 = $_POST['num1'];
$Num2 = $_POST['num2'];

$calc = new Calc($Op,(int)$Num1,(int)$Num2);

try {
    echo $calc->Calculate();
} catch (TypeError $th) {
    echo "Error:" . $th->getMessage();
}

?>