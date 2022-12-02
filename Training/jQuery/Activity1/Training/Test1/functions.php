<?php

function test1($val) {
    $strval = "";
    for ($i = 0; $i < $val; $i++) {
        $strval = $strval."*";
        echo $strval."<br>";
    }
}

function test2($val) {
    //Printing Spaces
    for ($i = 0; $i <= $val; $i++) 
    {
        
        for ($j = 0; $j < $val - $i; $j++) 
        { 
            echo "&nbsp;&nbsp;";
        }
        //Print Stars
        for ($x = 0; $x <= $i; $x++) 
        { 
            echo "*";
        }
        echo"<br>";
    }
}

function test3($val) 
{
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

?>