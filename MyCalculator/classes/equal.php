<?php
include_once 'functions.php';

$class = new oneLiner();
$result = $class->evaluate($_POST['result']);
echo $result;
?>