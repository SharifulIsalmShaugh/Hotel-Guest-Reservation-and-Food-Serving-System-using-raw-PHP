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
            $con=  mysqli_connect('localhost', 'root', '', 'dbhms' ) or die ('Database not found');
             $name= $_POST['name'];
             $permited=array('jpg','png','jpeg');
             $image="profile/".$_FILES['receptionist_picture']['name'];
             $temp_name=$_FILES['receptionist_picture']['tmp_name'];
             $file_size=$_FILES['receptionist_picture']['size'];
             $file_type=$_FILES['receptionist_picture']['type'];
             $div=explode('.',$image);
             $file_ext=strtolower(end($div));
             
             $email= $_POST['email'];
             $nid= $_POST['nid'];
             $phone= $_POST['phone'];
             $dob= $_POST['dob'];
             $sex= $_POST['sex'];
             $address= $_POST['address'];
             $qulification= $_POST['qulification'];
             $result= $_POST['result'];
             
             if($file_size>1048576){
        echo "<span style='display:block;text-align:center;color:red;font-size:18px;'>File should be less then 1MB!!!</span>";
    }else if(in_array($file_ext,$permited)==false){
        echo "<span style='display:block;text-align:center;color:red;font-size:18px;'>You can upload only:-".implode(',', $permited)."</span>";
    }  else {
        move_uploaded_file($temp_name, $image);       
             $query="INSERT INTO  receptionist(receptionist_name,receptionist_picture,receptionist_email,receptionist_nid,receptionist_phone,receptionist_dob,receptionist_sex,receptionist_address,receptionist_qulification_name,receptionist_result)
              VALUES('$name','$image','$email','$nid','$phone','$dob','$sex','$address','$qulification','$result')";
             $res = mysqli_query($con,$query);
             if (!$res)
                {
                   echo("Error description: " . mysqli_error($con));
                   
                }
                else {
                        echo "Data Inserted";
                }
    }
    }   
    
    ?>
    <form action="" method="POST" enctype="multipart/form-data">
	<h3>personal details</h3>

			<div class="form">
				<table  width="90%">
					<tr>
						<td width="10%">Name</td>
                                                <td><input type="text" name="name"placeholder=" Name" required></td>
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
                                                <td> <input type="email" name="email"placeholder=" Email" required> </td>
					</tr>
					<tr>
						<td width="10%">NID</td>
                                                <td> <input type="Number" name="nid" placeholder=" Number" required></td>
					</tr>
					<tr>
						<td width="10%">Phone</td>
                                                <td> <input type="Number" name="phone" placeholder=" Number" required></td>
					</tr>
					<tr>
						<td width="10%">DOB</td>
                                                <td><input type="text" name="dob"placeholder="dob" required></td>
					</tr>
					<tr>
						<td >sex</td>
                                                <td><select name="sex">
						   <option></option>
                                                   <option value="male">male</option>
                                                   <option value="female">female</option>
						</select></td>
					<tr>
						<td width="10%">Address</td>
						<td> <textarea required placeholder="Address " name="address"></textarea></td>
					</tr>

				</table>
			
		    
		    </div>
		    
		 <h3>educational qualification</h3>
					    <div class="form">
					    <table width="80%">
					    
					        <td width="10%">qulification name </td> 
                                                <td><input type="text"placeholder=" name" name="qulification" required></td>
					        <tr>
					        <td>hsc/ssc/graduation</td>
                                                <td width="10%"><input type="text"placeholder="result "name="result" required></td>
					        </tr>
					        <tr>
								<td></td>
								<td> 
									<input type="submit" name="submit" value="Submit">
									<input type="reset" name="submit" value="Reset">
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
