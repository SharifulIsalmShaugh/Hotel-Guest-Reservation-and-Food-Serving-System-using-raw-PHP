
<!DOCTYPE html>
<html>
<head>
<title>Hotel Guest Management System</title>
<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
<header>

 <?php require("receptionistheader.php");?>
</header>
	


<aside >
	<?php require("menu.php");?>


</aside>
<section>
<center>
    
	<table class="table">
            
		<tr>
			<th>serial number</th>
			<th>guest name</th>
			<th>room number</th>
			<th>check in</th>
			<th>check out</th>
			<th>detail</th>

			

	<tr>
		<td>1.</td>
		<td>ananya</td>
		<td>503</td>
		<td>11:45pm</td>
		<td>3:00 pm</td>
		<td>
	        <a  href="guestview.php">View/</a> 
	         <a  href="#">Checkout</a> 
	        
	        

		</td>


		


	</tr>
		

		


	</table>
</center>
</section>

<footer>
	

	
	  <?php require("receptionistfooter.php");?>
</footer>
</body>
</html>
