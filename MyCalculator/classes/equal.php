<?php
include_once 'newphp.php';

$class = new oneLiner($_POST['result']);
$result = $class->evaluate();
echo $result;
?>