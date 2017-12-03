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

   <?php require("guestheader.php");?>
</header>
	


<aside >
<?php require("menu.php");?>


</aside>
<section>
<center>
    <form action="" method="POST" >
	
        <select name="subcategory" style="margin-top: 20px; margin-bottom:10px; width: 20%;">
		    <?php 
                                    $query = "SELECT * FROM subcategory";
                                    $subcategory = mysqli_query($con, $query);
                                    while ($res_cat = mysqli_fetch_assoc($subcategory)){
                                ?>
                                <option value="<?php echo $res_cat['subcategory_id'];?>"><?php echo $res_cat['subcategory_name']; ?></option>
                            <?php
                                }
                            ?>
	</select>
</center>
<center>
 <table class="table" >
<tr>
	<th>Name</th>
	<th>Price</th>
	<th>order</th>
	
</tr>
<?php
                $query="SELECT * FROM food";
                 $result=  mysqli_query($con,$query);
    
    while ($row=  mysqli_fetch_array($result)){
       
                ?>
<tr>
	<td><?php echo $row['food_name'];?></td>
	<td><?php echo $row['price'];?></td>
	<td><a href="#" > order</a></td>
	

</tr>
<?php
    }
?>
	


</table>
</center>
</section>

<footer>
	
<?php require("guestfooter.php");?>
</footer>
</body>
</html>
