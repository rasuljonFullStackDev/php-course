        <?php

include "conn.php";
var_dump(isset($_POST['submit']));

if(isset($_POST['submit'])){
    // echo "submit secsessfuly";
 
   if(!empty($_POST['name']) && !empty($_POST['username']) && !empty($_POST['password'])){
    $name = $_POST['name'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    // $sql = "INSERT INTO  `date-cruds`(name,username,password)
    // VALUES('$name','$username',$password')
    //  " ;
    $sql = "INSERT INTO `date-cruds` (name,username, password) VALUES ('$name','$username','$password')";
    $result = mysqli_query($con,$sql);
    header('location: users.php');
   }
   else{
       echo "erorr database";
   }


    
    
  

   

}



?>