<?php

include_once 'functions.php';

$class = new oneLiner();
$result = $class->concatOpe($_POST['result'], $_POST['btn']);
echo $result;


?>