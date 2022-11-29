<?php
session_start();
require 'db.php';
$id = "Test";
//$query = "SELECT contact_id FROM contactdetails WHERE contact_id = '".$_SESSION['sesID']."'";
$query1 = "SELECT * FROM contactdetails WHERE contact_id = '".$_SESSION['sesID']."'";
if ($result1 = mysqli_query($dbcon,$query1))
{
    	$rowc = mysqli_num_rows($result1);
      $rowcount = $rowc;
}
?>
<html>
<head>
<title>Phone Book</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div id = "main">
  <h1> Phone Book</h1>
  <?php echo '<p class="loged">Logged in as <span>' .$_SESSION['username']. '</span></p>';
  
  include_once 'menu-main.php';
  ?>
  

 <div class=" totalcontact"> <p>Total users in your contacts<br> <?php echo '<span>'.$rowcount.'</span>';?></p></div>
  <div class= "addnew"><a href=""></a> </div> 
  <div class= "viewusers"><a href="view_user.php"></a> </div> 
  
  
</div>
</body>
</html>
