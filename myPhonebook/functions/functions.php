<?php

class ClassMain{
    

function add()
{	
include 'connection.php';

$FNameIn = $mysqli->real_escape_string($_POST['FNameTB']);
$LNameIn = $mysqli->real_escape_string($_POST['LNameTB']);
$NumberIn = $mysqli->real_escape_string($_POST['NumTB']);

$queryadd = "INSERT INTO contacts (FName, LName, PhoneNum)
            VALUES ('{$FNameIn}','{$LNameIn}','{$NumberIn}')";
if ($mysqli->query($queryadd))
{
    header('Location: index.php');
}
else
{
    echo "Error Inserting!!";
    header('Location: index.php');
}

}
function del($ID)
{
    include 'connection.php';
    $querydel = "DELETE FROM contacts WHERE ID = '$ID'";
    if ($mysqli->query($querydel))
    {
        echo 
        "<script>
            alert('Data Deleted Succesfully!');
            </script>";
        header('Location: index.php');
    }
    else
    {
        echo 
        "<script>
            alert('Delete Failed');
            </script>";
        header('Location: index.php');
    }


}
}
?>