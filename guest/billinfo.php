<!DOCTYPE html>
<html>
<head>
<title>Hotel Guest Management System</title>
<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
<header>
   <?php require("guestheader.php");?>
	 

</header>
<aside >
     <?php require("menu.php");?>
	 


</aside>
<section>

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

					
		    
		    </div>
		    </table>
		    </center>
</section>

<footer>
	

	 <?php require("guestfooter.php");?>
	 
</footer>
</body>
</html>
