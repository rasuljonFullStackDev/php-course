<?php

include "conn.php";

echo $_GET['deleteid'];
$id = $_GET['deleteid'];
$sql = "DELETE FROM `date-cruds` WHERE id=$id";
// DELETE FROM `date-cruds` WHERE 0
$req = mysqli_query($con,$sql);

if($sql){
    echo "delete secsessfuly";
    // header("loaction:users.php");
    header('location: users.php');
} else {
    echo "erorr delete";
}

?>