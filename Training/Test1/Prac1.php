<?php
include 'functions.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>
    <form method="post">
        Enter Value to Loop:
    <input type="number" name="value" value="" placeholder="Enter value"/>
    <input type="submit" name="submit" value="Submit"/>
    </form>
    <br>
    <?php
        if(isset($_POST['submit'])) {
        $val = $_POST['value'];
        test1($val);
        }
        else{
            echo "No Variable is submitted";
        }
    ?>
    </body>
</html>