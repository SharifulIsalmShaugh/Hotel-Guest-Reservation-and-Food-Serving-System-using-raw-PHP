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
    if(isset($_POST['submit']))
    {
             $category=$_POST['category'];
             $subcategory=$_POST['subcategory'];
             $food= $_POST['food'];
             $price= $_POST['price'];
             
            
             $query="INSERT INTO food(food_name,subcategory_id,price)
              VALUES('$food','$subcategory','$price')";
             $res = mysqli_query($con,$query);
             if (!$res)
                {
                   echo("Error description: " . mysqli_error($con));
                   
                }
                else {
                        echo "Data Inserted";
                }

    }   
    
    ?>
    <form action="" method="POST">
	

			<div class="form">
				<table  width="90%">
					
					<tr>
						<td >catagory</td>
                                                <td><select name="category">
                                                        <option value="bengli desi food"> Desi Food</option>
                                                         <option value="chinese food">Chinese Food</option>
                                                          <option value="italian  food">Italian  Food</option>
                                                           <option value="indian spicy food">Indian Spicy Food</option>
						</select></td>
					</tr>
                                        
					<tr>
						<td >subcatagory</td>
                                                <td><select name="subcategory"
                                       <?php 
                                       $query = "SELECT * FROM subcategory";
                    $subcategory = mysqli_query($con, $query);
                    while ($res_subcat = mysqli_fetch_assoc($subcategory)){
                          ?>
                   <option value="<?php echo $res_subcat['subcategory_id'];?>"><?php echo $res_subcat['subcategory_name']; ?></option>
              <?php
                    }
                ?>

	     
		
		 </tr>
                        <tr>
						<td width="10%"> food Name</td>
                                                <td><input name="food" type="text" placehold=" Name" required></td>
					</tr>
                                         <tr>
						<td width="10%"> price</td>
                                                <td><input name="price"type="text" required></td>
					</tr>
				<tr >
						<td > 
							
								<td><input class="submitbutton" type="submit" name="submit" value="submit"></td>
									
						</td>
					</tr>

					        </table>
					    </div>
					    





		</form>


</section>

<footer>
	
  <?php require("adminfooter.php");?>
</footer>
</body>
</html>
