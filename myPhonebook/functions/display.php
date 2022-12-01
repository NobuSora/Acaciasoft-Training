<?php
$query = "SELECT * FROM contacts";
if ($result = $mysqli->query($query)) 
{
    while ($row = $result->fetch_assoc()) {
        $FNameOut = $row["FName"];
        $LNameOut = $row["LName"];
        $NumberOut = $row["PhoneNum"];
        $IDOut = $row["ID"];
        $Location = "http://localhost/myPhonebook/functions/edit.php?ID=".$IDOut;
        echo 
        '<tr> 
            <td>'.$FNameOut.'</td> 
            <td>'.$LNameOut.'</td> 
            <td>'.$NumberOut.'</td> 
            <td>'.$IDOut.'</td>
            <td><a href="'.$Location.'">Edit</a></td>
            <td><a href="index.php?ID='.$IDOut.'">Delete</a></td>
        </tr>';
    }
    $result->free();
} 
?>