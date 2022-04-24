<?php
include "conn.php";
$id = $_GET['editid'];

echo '<pre>';
echo '</pre>';
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $username = $_POST['username'];
    $password = $_POST['password'];   

     $sql = "UPDATE `date-cruds` SET id=$id,name='$name',username='$username',password='$password' WHERE id=$id";
     $req = mysqli_query($con,$sql);
     var_dump($req);
    if($req){
        echo "update";
        header("location: users.php");
    // header('location: users.php');
  
    }
    else {
        echo "not erorr update";
    }
}
// $sql = "";


// $req = mysqli_query($con, $sql);


?>



<?php include "header.php" ?>
    <h1 class="">Edit database</h1>
    <form  method="post" class="p-4">
        <input type="text" class="p-1 input-group-sm" name="name" > <br> <br>
        <input type="username" class="p-1 input-group-sm" name="username" > <br> <br>
        <input type="password" class="p-1 input-group-sm" name="password" > <br>
        <button class="btn btn-outline-success mt-4" type="submit" name="submit">Add</button>
        

    </form>
    <?php include "footer.php" ?>
