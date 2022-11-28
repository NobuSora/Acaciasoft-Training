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
            function test($val) {
                //Printing Spaces
                for ($i = 0; $i <= $val; $i++) 
                {
                    
                    for ($j = -1; $j < $val - $i - 1; $j++) 
                    { 
                        echo "&nbsp;&nbsp;";
                    }
                    //Print Stars
                    for ($x = 1; $x <= 2 * $i + 1; $x++) 
                    { 
                        echo "*";
                    }
                    echo"<br>";
                }
            }
        $val = $_POST['value'];
        test($val);
        }
        else{
            echo "No Variable is submitted";
        }
    ?>
    </body>
</html>