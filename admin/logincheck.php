<?php
include 'database.php';
    $uname = $_POST['uname'];
    $pass= $_POST['pass'];
    
    $query = "SELECT * FROM admin WHERE user_name='$uname' AND admin_password='$pass'";
    
    $receive =  mysqli_query($con, $query);
    if(mysqli_num_rows($receive)>0){
        session_start();
         while ($row = mysqli_fetch_assoc($receive)) {
            $_SESSION['userid']=$row['admin_id'];
            $_SESSION['username']=$row['user_name'];
            $type=$row['type'];
        }
        if($type==0){
 header("LOCATION:index.php");
        
        }
        elseif($type==1){
            header("LOCATION:../Receptionist/Receptionist.php");
        echo 'user';
        }
        else{
           header("LOCATION:adminlogin.php");
            echo "not ok";
        }
    }  
?>

