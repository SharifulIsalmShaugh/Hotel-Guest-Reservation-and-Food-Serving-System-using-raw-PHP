<?php
include 'database.php';
?>
<?php 
if (isset($_GET['idedit'])){
   $employeeid=$_GET['idedit'];
}
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
             $name= $_POST['name'];
             $permited=array('jpg','png','jpeg');
             $image="profile/".$_FILES['receptionist_picture']['name'];
             $temp_name=$_FILES['receptionist_picture']['tmp_name'];
             $file_size=$_FILES['receptionist_picture']['size'];
             $file_type=$_FILES['receptionist_picture']['type'];
             $div=explode('.',$image);
             $file_ext=strtolower(end($div));
             
             $email= $_POST['email'];
            
             $phone= $_POST['phone'];
        
             $address= $_POST['address'];
         
             
             if($file_size>1048576){
        echo "<span style='display:block;text-align:center;color:red;font-size:18px;'>File should be less then 1MB!!!</span>";
    }else if(in_array($file_ext,$permited)==false){
        echo "<span style='display:block;text-align:center;color:red;font-size:18px;'>You can upload only:-".implode(',', $permited)."</span>";
    }  else {
        move_uploaded_file($temp_name, $image);       
             $query="UPDATE receptionist SET receptionist_name='$name',receptionist_picture='$image',receptionist_email='$email',receptionist_phone='$phone',receptionist_address='$address' WHERE receptonist_id='$employeeid'";
              
             $res = mysqli_query($con,$query);
             if (!$res)
                {
                   echo("Error description: " . mysqli_error($con));
                   
                }
                else {
                        echo "Data Inserted";
                }
                header("LOCATION:reinfo.php");
    }
    }   
    
    ?>
             
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="employeeid" value="<?php echo $employeeid; ?>" />
	<h3>personal details</h3>
         

			<div class="form">
				<table  width="90%">
              <?php
                $query="SELECT * FROM receptionist WHERE receptonist_id='$employeeid'";
                 $result=  mysqli_query($con,$query);
    $i=0;
    while ($row=  mysqli_fetch_array($result)){
        $i++;
                ?>
					<tr>
						<td width="10%">Name</td>
                                                <td><input type="text" name="name" value="<?php echo $row['receptionist_name'];?>"  required></td>
					</tr>
                                        <tr>
						<td>profile picture</td>
						<td>
							<label>
							 <input id="photo" name="receptionist_picture" type="file" >
							</label>
						</td>
					</tr>
					
					<tr>
						<td width="10%">Email</td>
                                                <td> <input type="Email" name="email" value="<?php echo $row['receptionist_email'];?>"  required> </td>
					</tr>
					
					<tr>
						<td width="10%">Phone</td>
                                                <td> <input type="Number" name="phone" value="<?php echo $row['receptionist_phone'];?>"   required></td>
					</tr>
					
					
					<tr>
						<td width="10%">Address</td>
                                                <td> <textarea name="address">
                                                    <?php echo $row['receptionist_address'];?>
                                                    </textarea></td>
					</tr>

	                                  
			           
		    
		                              <tr>
								<td></td>
								<td> 
                                                                 
									<input type="submit" name="submit" value="Submit">
								</td>
					    </tr>
                                           <?php
                                              }
                                             ?>

                                            
					        </table>
					    </div>
					   
				 

		</form>


</section>

<footer>
	<?php require("adminfooter.php");?>
</footer>
</body>
</html>
