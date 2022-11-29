<?php
    include 'person.inc.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <?php
    // $PersonName = new Person();
    // $PersonName->setName('Daniel');
    // echo $PersonName->name;
    // $PersonName->setName('Bryan');
    // echo $PersonName->name;

    // $PersonInfo = new Person("Bryan","Black",24);
    // echo $PersonInfo->name;
    // echo $PersonInfo->eyecolor;
    // echo $PersonInfo->age;
    // $this->setName("Hernandez");
    // echo $PersonInfo->name;

    $object = new NewClass;
    echo $object->getProperty();


    ?>
</body>
</html>