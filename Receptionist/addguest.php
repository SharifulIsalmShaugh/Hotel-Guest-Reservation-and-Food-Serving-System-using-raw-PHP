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

  <?php require("receptionistheader.php");?>
</header>
	


<aside >

		
			

  <?php require("menu.php");?>
		

</aside>
<section>
      <?php
    if(isset($_POST['submit']))
        
    {
             $name= $_POST['name'];
             $email= $_POST['email'];
             $guest= $_POST['guest'];
             $sex= $_POST['sex'];
             $nid= $_POST['nid'];
             $phone= $_POST['phone'];
             $room= $_POST['room'];
             $num= $_POST['num'];
             $address= $_POST['address'];
             $key= $_POST['key'];
              $query="INSERT INTO  guest(guest_name, 	guest_email,guest_type,guest_sex,guest_nid,guest_phone,guest_roomType,guest_roomnumber, guest_address,guest_Login)
              VALUES('$name','$email', '$guest','$sex',$nid','$phone',' $room','$num',$address','$key')";
             $res = mysqli_query($con,$query);
             if (!$res)
                {
                   echo("Error description: " . mysqli_error($con));
                   
                }
                else {
                        echo "Data Inserted";
                }?>
       <?php
    }
    ?>


		<form action="" method="POST">
	<h3>guest details</h3>

			<div class="form">
				<table  width="90%">
					<tr>
						<td width="10%">Name</td>
                                                <td><input type="text" name="name"placeholder=" Name" required></td>
					</tr>
					<tr>
						<td>Email</td>
                                                <td> <input type="email" name="email"placeholder=" Email" required> </td>
					</tr>
					
					<tr>
						<td >Guest Type</td>
                                                <td><select name="guest">
						   <option></option>
                                                   <option value="local">local</option>
                                                   <option value="international">international</option>
						</select></td>
					</tr>
					<tr>
						<td >sex</td>
                                                <td><select name="sex">
						   <option></option>
                                                   <option value="male">male</option>
                                                   <option value="female">female</option>
						</select></td>
					</tr>
					<tr>

						<td>NID/passport no</td>
                                                <td> <input type="number" name="nid" placeholder=" xxxxxxxxxxxx" required></td>
					</tr>
					
					<tr>
						<td>Phone</td>
                                                <td> <input type="number" name="phone"placeholder=" Number" required></td>
					</tr>
					
					<tr>
					<td>room type</td>
                                        <td><select name="room">
						   <option></option>
                                                   <option value="AC">AC</option>
                                                   <option value="NONAC">NON AC</option>
						</select></td>
					</tr>
					<tr>
						<td>room number</td>
                                                <td> <input type="number" name="num" placeholder=" Number" required> </td>
					</tr>
					<tr>
						<td>Address</td>
						<td> <textarea required placeholder="Address " name="address"></textarea></td>
					</tr>
					<tr>
					<tr>

						<td>guest login key</td>
                                                <td> <input type="number" placeholder=" Key" name="key" required></td>
					</tr>
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
	
      <?php require("receptionistfooter.php");?>
</footer>
</body>
</html>
