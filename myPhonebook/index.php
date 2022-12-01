<?php
include 'functions/connection.php';
include 'functions/functions.php';
$MainClass = new ClassMain();
?>


<html>
<head>
<title>Phone Book</title>
<link rel="stylesheet" href="css/main.css">
</head>
<body>
<div id = "main">
    <h1> Phone Book</h1>
    <table>
        <form method="POST">
            <tr>
                <td>First Name</td>
                <td>Last Name</td>
                <td>Number</td>
                <td>ID</td>
                <td>Action</td>
            </tr>
                <?php
                include 'functions/display.php';
                ?>
            <tr>
                <td><input type="text" name="FNameTB" placeholder="First Name">*</td>
                <td><input type="text" name="LNameTB" placeholder="Last Name">*</td>
                <td><input type="number" name="NumTB" placeholder="Number">*</td>
                <td><input type="submit" name="saveBT" value="Add Contact"></input></td>
            </tr>
        </form>
    </table>
    <?php
         if(isset($_POST['saveBT']))
         {
            $MainClass->add();
            header("Refresh:0");
         }
         if(isset($_GET['ID']))
         {
            $ID = $_GET['ID'];
            $MainClass->del($ID);
            
         }
    ?>
  
  
</div>

</body>
<link rel="stylesheet" href="css/main.css">
</html>