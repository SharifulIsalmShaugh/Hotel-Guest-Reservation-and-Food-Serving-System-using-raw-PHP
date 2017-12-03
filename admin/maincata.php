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
    if(isset($_POST['add']))
    {
            $con=  mysqli_connect('localhost', 'root', '', 'dbhms' ) or die ('Database not found');
             $name= $_POST['name'];
            
             $query="INSERT INTO category(category_name)
              VALUES('$name')";
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
<form action=""method="POST">
<center>
	
	</center>
</form>

	


<!-- <table> -->
<center>
<table class="table">
<tr>
	<th>serial </th>
	<th>category name</th>
	
	
</tr>
<?php
                $query="SELECT * FROM category";
                 $result=  mysqli_query($con,$query);
    $i=0;
    while ($row=  mysqli_fetch_array($result)){
        $i++;
                ?>
<tr>
	<td><?php echo $i;?></td>
	<td><?php echo $row['category_name'];?></td>
	
	

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
