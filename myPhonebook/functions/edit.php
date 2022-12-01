<?php
include 'connection.php';

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
                <?php
                $ID = $_GET['ID'];
                $query = "SELECT * FROM contacts WHERE ID='".$ID."';";
                if ($result = $mysqli->query($query)) 
                {
                    while ($row = $result->fetch_assoc()) {
                        $FNameOut = $row["FName"];
                        $LNameOut = $row["LName"];
                        $NumberOut = $row["PhoneNum"];
                        $IDOut = $row["ID"];
                        echo 
                        '<tr> 
                        <td><input type="text" name="FNameTBE" placeholder="First Name" value="'.$FNameOut.'"></td>
                            <td><input type="text" name="LNameTBE" placeholder="First Name" value="'.$LNameOut.'"></td>
                            <td><input type="text" name="NumTBE" placeholder="First Name" value="'.$NumberOut.'"></td>
                        </tr>';
                    }
                    $result->free();
                }

                $FNameIn = $mysqli->real_escape_string($_POST['FNameTBE']);
                $LNameIn = $mysqli->real_escape_string($_POST['LNameTBE']);
                $NumberIn = $mysqli->real_escape_string($_POST['NumTBE']);
                $query = "UPDATE contacts SET FName='".$FNameIn."',LName='".$LNameIn."',PhoneNum='".$NumberIn."'  WHERE id='".$ID."'";
                if ($mysqli->query($query)) {
                    echo "<script>
                    alert('Data Updated Succesfully!');
                    window.location.href='../';
                    </script>";
                }
                $mysqli->close();
  ?>
                <td><input type="submit" name="saveBT" value="Update"></input></td>
        </form>
    </table>