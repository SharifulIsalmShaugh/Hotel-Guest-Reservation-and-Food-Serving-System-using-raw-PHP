<?php
include '../admin/database.php';
?>
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
	<table class="table" >
		<tr>
                       <th>serial number</th>
			<th>room number</th>
			
			<th>status</th>

			

		</tr>
                <?php
                $query="SELECT * FROM room";
                 $result=  mysqli_query($con,$query);
      $i=0;
    while ($row=  mysqli_fetch_array($result)){
       $i++;
                ?>
	<tr>
               <td><?php echo $i;?></td>
		<td><?php echo $row['room_number'];?></td>
		
		<td>
	        <a  href="#"> Book</a> 
	        

		</td>


		


	</tr>
   <?php
    }
   ?>
		


	</table>
</center>
</section>

<footer>
	

	  <?php require("receptionistfooter.php");?>
</footer>
</b


ody>
</html>
