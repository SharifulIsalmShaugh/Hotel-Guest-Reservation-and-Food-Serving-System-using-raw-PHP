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
<h3>Pending Order</h3>

<center>
	<table class="table" >
		<tr>
			<th>Serial number</th>
			<th>Order name</th>
			<th>room number</th>
			<th>action</th>

			

		</tr>
	<tr>
		<td>1.</td>
		<td>soup</td>
		<td>503</td>
		
		<td>
	        <a  href="penviewdetail.php"> View Detail</a> 
	        

		</td>


		


	</tr>
		


	</table>
	</center>
	<h3>confirm order</h3>
	<center>
	<table class="table" >
		<tr>
			<th>Serial number</th>
			<th>Order name</th>
			<th>room number</th>
			<th>action</th>

			

		</tr>
	<tr>
		<td>1.</td>
		<td>soup</td>
		<td>503</td>
		
		<td>
	        <a  href="conviewdetail.php"> View Detail</a> 
	        

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
