<?php
include 'database.php';
?>
<?php
if (isset($_GET['idedit'])) {
    $foodid = $_GET['idedit'];
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

            <?php require("adminheader.php"); ?>
        </header>



        <aside >

            <?php require("menu.php"); ?>

        </aside>
        <section>
            <?php
            if (isset($_POST['submit'])) {
                $food = $_POST['food'];
                $subcategory = $_POST['subcategory'];

                $foodid = $_POST['foodid'];


                $query = "UPDATE food SET food_name='$food',subcategory_id='$subcategory'WHERE  id='$foodid'";
                $sucess = mysqli_query($con, $query);
                if ($sucess) {
                    header("LOCATION:addnewfood.php?action=yes");
                } else {
                    header("LOCATION:addnewfood.php?action=no");
                }
            }
            ?>
            <form action="edit_addnewfood.php" method="POST">
                <input type="hidden" name="foodid" value="<?php echo $foodid; ?>" />


                <div class="form">
                    <table  width="90%">

<?php
$query = "SELECT * FROM food WHERE id='$foodid'";
$result = mysqli_query($con, $query);
$i = 0;
while ($row = mysqli_fetch_array($result)) {
    $i++;
    ?>        
                            <tr>
                                <td >subcatagory</td>
                                <td><select name="subcategory">
                            <?php
                            $query = "SELECT * FROM subcategory";
                            $subcategory = mysqli_query($con, $query);
                            while ($res_subcat = mysqli_fetch_assoc($subcategory)) {
                                ?>
                                            <option value="<?php echo $res_subcat['subcategory_id']; ?>" <?php
                                            
                                            if ($row['subcategory_id']==$res_subcat['subcategory_id']){
                                                echo 'selected';
                                            }
                                            ?>><?php echo $res_subcat['subcategory_name']; ?></option>
                                            <?php
                                        }
                                        ?>
                                    </select>



                            </tr>
                            <tr>
                                <td width="10%"> food Name</td>
                                <td><input name="food" type="text" value="<?php echo $row['food_name']; ?>" ></td>

                            </tr>

                            <tr >
                                <td > 

                                <td><input class="submitbutton" type="submit" name="submit" value="submit"></td>

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

<?php require("adminfooter.php"); ?>
        </footer>
    </body>
</html>
