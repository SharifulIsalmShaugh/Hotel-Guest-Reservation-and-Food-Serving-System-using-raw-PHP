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

            <?php require("adminheader.php"); ?>
        </header>



        <aside >
            <?php require("menu.php"); ?>


        </aside>
        <section>
            <?php
            if(isset($_GET['del'])){
                $del=$_GET['del'];
                $delquery="DELETE FROM subcategory WHERE subcategory_id='$del'";
                mysqli_query($con, $delquery);
               
            }
            ?>
            <?php
            if (isset($_POST['update'])) {

                $name = $_POST['name'];
                $id = $_POST['id'];
                $subcatid=$_POST['subcatid'];

                 $query = "UPDATE subcategory SET subcategory_name = '$name',category_id='$id' WHERE subcategory_id ='$subcatid';";
                $res = mysqli_query($con, $query);
                if (!$res) {
                    echo("Error description: " . mysqli_error($con));
                } else {
                    echo "Data Inserted";
                }
            }
            ?>
                
              <?php
                if(isset($_GET['edit'])){
                    $subid=$_GET['edit'];
                    ?>
             <form action="" method="POST">
                <center>
                    <table>
                        <tr>

                            <td>
                                 <?php
                            $query="SELECT * FROM subcategory WHERE subcategory_id='$subid'";
                            $subcategory = mysqli_query($con, $query);
                            if($subcategory){
                                while ($sub_cat = mysqli_fetch_assoc($subcategory)){
                            ?>
                                <select name="id" class="newcata">
                                  <?php 
                                    $query = "SELECT * FROM category";
                                    $category = mysqli_query($con, $query);
                                    while ($res_cat = mysqli_fetch_assoc($category)){
                                ?>
                                <option value="<?php echo $res_cat['category_id'];?>" 
                                        <?php
                                        if($sub_cat['category_id']==$res_cat['category_id']){
                                            echo ' selected';
                                        }
                                        ?>
                                        ><?php echo $res_cat['category_name']; ?></option>
                            <?php
                                }
                            ?>
                                </select></td>
                            <input type="hidden" name="subcatid" value="<?php echo $subid;?>"/> 
                            <td><input class="catagory" type="text" name="name" value="<?php echo $sub_cat['subcategory_name'];;?>"></td> 
                            <td><input class="mor"  type="submit" name="update" value="Update"></td>
                        </tr>
                    </table>
                </center>
                 <?php }}
                 else{
    echo mysqli_error($con);
                 }
                 
                 ?>
            </form>
                 <?php   
                }             
                else{
                    
                  ?>
              <?php
            if (isset($_POST['add'])) {

               
                 $id = $_POST['id'];
                 $name = $_POST['name'];
               $query="INSERT INTO subcategory(subcategory_name,category_id) VALUES('$name','$id')";
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
                <center>
                    <table>
                        <tr>

                            <td>
                                <select name="id" class="newcata">
                                  <?php 
                                    $query = "SELECT * FROM category";
                                    $subcategory = mysqli_query($con, $query);
                                    while ($res_cat = mysqli_fetch_assoc($subcategory)){
                                ?>
                                <option value="<?php echo $res_cat['category_id'];?>"><?php echo $res_cat['category_name']; ?></option>
                            <?php
                                }
                            ?>
                                </select></td>

                            <td><input class="catagory" type="text" name="name" placeholder="New Subcategory"></td> 
                            <td><input class="mor"  type="submit" name="add" value="Add"></td>
                        </tr>
                    </table>
                </center>
                
            </form>
            <?php
                }
              ?>
           


<!-- <table> -->
            <center>
                <table class="table" >
                    <tr>
                        <th>serial </th>
                        <th>subcategory name</th>
                        <th>category name</th>
                        <th>action</th>

                    </tr>

     <?php
     $query="SELECT subcategory.*, category.category_name FROM subcategory,category WHERE subcategory.category_id=category.category_id ";
     $result = mysqli_query($con, $query);
     $i = 0;
while ($row = mysqli_fetch_array($result)) {
    $i++;
    ?>
                    
                        <tr>
                            <td><?php echo $i; ?></td>
                            <td><?php echo $row['subcategory_name']; ?></td>
                            <td><?php echo $row['category_name']; ?></td>
                            <td><a href="?edit=<?php echo $row['subcategory_id']; ?>">Edit ||</a>
                                <a href="?del=<?php echo $row['subcategory_id']; ?>">Delete </a>
                            </td>


                        </tr>
    <?php
}
?>
                        

                </table>
            </center>
        </section>

        <footer>


<?php require("adminfooter.php"); ?>
        </footer>
    </body>
</html>
