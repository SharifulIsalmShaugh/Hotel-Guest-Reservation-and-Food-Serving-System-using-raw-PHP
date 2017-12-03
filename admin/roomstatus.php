<?php
include 'database.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>Hotel Guest Management System</title>
<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
<header>

<?php require("adminheader.php");?>
</header>
	


<aside >
	<?php require("menu.php");?>


</aside>
<section>
<div> <!-- style="margin-top:50px;margin-left:600px; padding-top: 8px; font-size: 10px;"> -->
   
			
			<a href="newroom.php" class="bbb" > Add new room</a>
			
			 </div>
<center>
	<table class="table" >
		<tr>
			<th>serial number</th>
			<th>room number</th>
			<th>room type</th>
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
		<td><?php echo $row['room_type'];?></td>
		
		
		<td>
	        <a  href="#"> Book</a> 
	        

		</td>

<?php
    }
?>
		


	</tr>
		


	</table>
</center>
</section>

<footer>
	
  <?php require("adminfooter.php");?>
</footer>
</body>
</html>
 