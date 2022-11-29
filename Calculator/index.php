<?php
declare(strict_types = 1);
include 'includes/autoloader.inc.php';
?>
<!DOCTYPE html>
<html lang = "en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>

        <form action="includes/calc.inc.php" method="post">
            <p>Bryan's Calculator</p>
            <input type="number" name="num1" placeholder="First Number:">
            <select name="operator">
                <option value="add">+</option>
                <option value="sub">-</option>
                <option value="div">/</option>
                <option value="mul">x</option>
            </select>
            <input type="number" name="num2" placeholder="Second Number:">
            <button type="submit" name="submit">=</button>
        </form>

    </body>
</html>