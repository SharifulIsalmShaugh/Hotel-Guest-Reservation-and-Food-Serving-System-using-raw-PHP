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
		<form>
	<h3> New Guest Information</h3>

			<div class="form">
				<table class="view" style="border:none;">
				<tr>
					<td>name</td>
					<td>anaya</td>
					</tr>
					<tr>
					<td>email</td>
					<td>sk.an@gmail.com</td>
					</tr>
					<tr>
						<td>guest type</td>
						<td>local</td>
					</tr>
					<tr>
						<td>gender</td>
						<td>male</td>
					</tr>
					<tr>
						<td>nid</td>
						<td>152613817318</td>
					</tr>
					<tr>
						<td>passport no</td>
						<td>1265372682374237</td>
					</tr>
					<tr>
						<td>phone</td>
						<td>35874674</td>
					</tr>
					<tr>
					<td>adress</td>
					<td>  h:3 r:12 sec:3 uttara dhaka</td>
					</tr>
					<tr>
					<td>guest login key</td>
					<td>1245</td>
					</tr>

				</table>
				<h4>stay bill</h4>
				<center>
					<table class="table">
					<tr>
					<th>serial number</th>
					<th>check in</th>
					<th>check out</th>
					<th> days</th>
					<th>amouunt</th>
					<th>total</th>
					</tr>
					<tr>
						<td>1</td>
						<td>11.45am</td>
						<td>3.00am</td>
						<td>3 days</td>
						<td>123tk</td>
						<td>567tk</td>
					</tr>

					

				</table>
				</center>
					<h4>food bill</h4>
					<center>

					<table class="table">
					<tr>
					<th>serial number</th>
					<th>date</th>
					<th>time</th>
					<th>amouunt</th>
					<th>action</th>
					</tr>
					<tr>
						<td>1</td>
						<td>2.6.17</td>
						<td>3.00am</td>
						<td>1233tk</td>
						
						<td><a  href="detail.php">Detail</a> </td>
					</tr>
					<tr>
						<td colspan="3">total bill</td>
						<td colspan="2">1234tk</td>
					</tr>

					

				</table>
				</center>

			
		    
		    </div>
				 

		</form>


</section>

<footer>
	
   
	  <?php require("receptionistfooter.php");?>
</footer>
</body>
</html>
