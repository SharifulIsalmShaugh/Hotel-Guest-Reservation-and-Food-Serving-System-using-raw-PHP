<?php
    if(isset($_GET['log'])){
        session_start();
        session_unset();
        session_destroy();
    }
?>
<!DOCTYPE html>
<html>
<head>
		<link rel="stylesheet" type="text/css" href="../css/style.css">

</head>
<body style="background-image: url(wallpaper_1.jpg);">

<div class="login">
	   <div class="page">

	   <form method="post" action="logincheck.php">
	   <center>
	   <table>
	   <tr>
	   
			 <td> <center><h1>Login</h1></center></td>

			 </tr>
			 <center>
			 <tr>
						
						<td> <input name="uname"type="text" class="log"  required> </td>

					</tr>
					</center>
					 <tr>
						
                                             <td> <input name="pass" type="password" class="log"  required> </td>
						
					</tr>
					<tr>
					<td><input type="submit" class="logbutton" name="login" value="Login"></td>
					</tr>
					</center>
		</table>
       </center>


		</form>
		
	   </div>

</div>
</body>
</html>