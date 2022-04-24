<?php
include 'conn.php';

$sql = "SELECT * FROM `date-cruds` " ;
// SELECT * FROM `date-cruds`
$result = mysqli_query($con,$sql);

if($result){
    echo "data sucsessful";
    $row = mysqli_fetch_assoc($result);
} else {
    echo "data eror";
}

// foreach ($result as $key => $rows) {
//     # code...
//     echo $rows['name'].'<br>';
//     echo $rows['username'].'<br>';
//     echo $rows['password'].'<br>';

// }

?>


<?php include "header.php"; ?>
<?php include "header.php"; ?>
<?php include "header.php"; ?>
    
    <div class="container ">
        <table class="" border="1">
            <tr>
                <th>id</th>
                <th>Name</th>
                <th>Username</th>
                <th>Password</th>
                <th>Options</th>
                
            </tr>

            <?php 
            
            foreach ($result as $key => $rows) :?>
              <tr>
              <td><?php echo $key + 1 ?></td>
                
                <td><?php echo $rows['name'] ?></td>
                <td><?php echo $rows['username'] ?></td>
                <td><?php echo $rows['password'] ?></td>
                <td>
                <a href="edit.php?editid=<?php echo $rows['id'] ?>" class="btn btn-success btn-sm text-white text-decoration-none bg-success">Edit</a>
                    <a href="delete.php?deleteid=<?php echo $rows['id'] ?>" class="btn btn-danger btn-sm text-white text-decoration-none">Delete</a>
                </td>

              </tr>
            
          
            
           <?php endforeach; ?>

        </table>
           <button class="btn btn-primary"><a href="add.php" class="text-white text-decoration-none">Add</a></button>         
    </div>

<?php include_once "footer.php" ?>