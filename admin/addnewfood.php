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
    <?php
            if(isset($_GET['del'])){
                $del=$_GET['del'];
                $delquery="DELETE FROM  food WHERE id='$del'";
                mysqli_query($con, $delquery);
                 if (!$delquery) {
                    echo("Error description: " . mysqli_error($con));
                } else {
                    echo "Delete";
                }
            }
            ?>
            

	<div> <!-- style="margin-top:50px;margin-left:600px; padding-top: 8px; font-size: 10px;"> -->
   
			
			<a href="newfoodform.php" class="bbb" > Add New Food</a>
			
			 </div>

<!-- <table> -->
<center>
   
   
<table class="table">
<tr>
	<th>serial </th>
	   <th>food name</th>
	  <th>subcategory name</th>
         <th>category name</th>
         <th>action</th>
         
</tr>
  <?php
    $query="SELECT food.*,subcategory.*,category.category_name FROM food,subcategory,category WHERE food.subcategory_id=subcategory.subcategory_id AND subcategory.category_id=category.category_id";
    $result=  mysqli_query($con,$query);
    $i=1;
    while ($row=  mysqli_fetch_array($result)){
        $i++;
    ?>

<tr>
	<td><?php echo $i;?></td>
	<td><?php echo $row['food_name'];?></td>
        <td><?php echo $row['subcategory_name'];?></td>
        <td><?php echo $row['category_name'];?></td>
        <td>
	        <a  href="edit_addnewfood.php?idedit=<?php echo $row['id'];?>">Edit||</a>
	         <a href="?del=<?php echo $row['id']; ?>">Delete </a>   

	    </td>
</tr>
<?php
 }
?>	


</table>
</center>
</section>

<footer>
	
    <?php require("adminfooter.php");?>
</footer>
</body>
</html>
