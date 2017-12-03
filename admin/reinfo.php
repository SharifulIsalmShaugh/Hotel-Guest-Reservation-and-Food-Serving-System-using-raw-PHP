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
                $delquery="DELETE FROM receptionist WHERE receptonist_id='$del'";
                mysqli_query($con, $delquery);
                 if (!$delquery) {
                    echo("Error description: " . mysqli_error($con));
                } else {
                    echo "Delete";
                }
            }
            ?>
            	<div> <!-- style="margin-top:50px;margin-left:600px; padding-top: 8px; font-size: 10px;"> -->


   
			
			<a href="reform.php" class="bbb" > Add receptionist</a>
			
			 </div>
    <?php 
    if (isset($_GET['action'])){
        if ($_GET['action']=='yes'){
            echo 'Data Update';
            
        }
 else {
            echo 'Data not updated';
 }
    }
    
    
    ?>
    
	<center>		
	<table class="table" >
	
		<tr>
			<th> serial number</th>
			<th> Name</th>
                        <th>Photo</th>
			<th>Phone number</th>
			<th>Email</th>
			<th>Address</th>
			<th>action</th>

			

		</tr>
                <?php
                $query="SELECT * FROM receptionist";
                 $result=  mysqli_query($con,$query);
    $i=0;
    while ($row=  mysqli_fetch_array($result)){
        $i++;
                ?>
	<tr>
		
		<td><?php echo $i;?></td>
		<td><?php echo $row['receptionist_name'];?></td>
                <td><img style="width: 100px;height: 100px;" src="<?php echo $row['receptionist_picture']; ?>"></td>
                
		<td><?php echo $row['receptionist_phone'];?></td>
		<td><?php echo $row['receptionist_email'];?></td>
                <td><?php echo $row['receptionist_address'];?></td>
		<td>
                    <a  href="edit_receptnoist.php?idedit=<?php echo $row['receptonist_id'];?>">Edit||</a>
	         <a href="?del=<?php echo $row['receptonist_id']; ?>">Delete </a>  

	    </td>


	</tr>
        
        <?php
    }
        ?>
        
		
  </center>

	</table>


			   

			
		    
	
</section>

<footer>
	
    <?php require("adminfooter.php");?>
</footer>
</body>
</html>
