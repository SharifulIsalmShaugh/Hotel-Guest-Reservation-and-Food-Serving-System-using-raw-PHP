

  <?php
    if($_SERVER['REQUEST_METHOD']=='POST')
    {
      $con=  mysqli_connect('localhost', 'root', '', 'dbhms' ) or die ('Database not found');
            $name= $_POST['name'];
             $email=$_POST['email'];
             $guest=$_POST['guest'];
             $sex= $_POST['sex'];
             $number= $_POST['number'];
             $number= $_POST['number'];
             $room=$_POST['room'];
             $number=$_POST['number'];
             $address=$_POST['address'];
            
             $query="INSERT INTO tablename(guest_name,guest_email,guest_type,guest_sex,guest_nid,guest_phone,guest_roomType,guest_roomNumber,guest_address)"
                     . "VALUES('$name','$email','$guest','$sex','$number','$room','$number','$address')";
             $success=mysqli_query($con,$query);
             if($success){
                 echo '<span style="color:red">Data Insert<span>';

             }
              else {
                     echo '<span style="color:red">Data Not Insert<span>';
 }
                  
    }   
    
    ?>

