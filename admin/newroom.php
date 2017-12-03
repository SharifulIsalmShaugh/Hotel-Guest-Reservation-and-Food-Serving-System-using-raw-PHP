
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
             $room= $_POST['room'];
             $type= $_POST['type'];
             $query="INSERT INTO  room(room_number,room_type)
              VALUES('$room','$type')";
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
						<td width="10%">room number</td>
                                                <td><input type="number"name="room" placeholder="room" required></td>
					</tr>
					<tr>
						<td >room type</td>
                                                <td><select name="type">
						   <option></option>
                                                   <option value="AC">AC</option>
                                                   <option value="NON AC"> NON AC</option>
						</select></td>
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
