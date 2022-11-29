<?php
require_once 'db.php';
$query1 = "SELECT * FROM contactdetails WHERE contact_id = '".$_SESSION['sesID']."'";
if ($result1 = mysqli_query($dbcon,$query1))
{
    	$rowc = mysqli_num_rows($result1);
      $rowcount = $rowc;
}
?>
<div class="menu">  
   <ul>
      <li><a href="dashboard.php">Home</a></li>
      <li><a href="add_user.php">Add New</a>
      <li><a href="view_user.php">View All</a><?php echo '<p class= "count">'.$rowcount.'</p>';?>
      <li><a href="#">Profile</a>
         <ul>
            <li><a href="viewProfile.php">View</a></li>
            <li><a href="changepassword.php">Change Password</a></li>
            <li><a href="logout.php">Logout</a></li>
         </ul>
      </li>
      <li><a href="contact.php">Contact Us</a></li>
   </ul>
</div>  