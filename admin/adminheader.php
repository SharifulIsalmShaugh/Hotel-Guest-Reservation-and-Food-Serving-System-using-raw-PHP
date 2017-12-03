<?php
session_start();
if(!isset($_SESSION['username'])){
    header("LOCATION:adminlogin.php");
}
?>
<div>
HOTEL MANAGEMENT
<a href="#" class="logout"> <?php echo $_SESSION['username']; ?>
</a>
	
</div>