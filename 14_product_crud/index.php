<?php

$pdo = new PDO('mysql:host=localhost;port=3306;dbname=products_crud','root','');
$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

$search = $_GET['search'] ?? '';

// if($search){
//     $statement = $pdo->prepare('SELECT * FROM porducts WHERE title  LIKE :title ORDER BY create_date DESC');
//     $statement->bindValue(':title ',"%$search%");
// } else
// {
//     $statement = $pdo->prepare('SELECT * FROM porducts ORDER BY create_date DESC');

// }
$statement = $pdo->prepare('SELECT * FROM porducts ORDER BY create_date DESC');
$statement->execute();
$products = $statement->fetchAll(PDO::FETCH_ASSOC);

// echo '<pre>';
// var_dump($products);
// echo '<pre>';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Crud</title>
        <link rel="stylesheet" href="css.css">
</head>
<body>
    <h1>Product Crud</h1>

    <a href="create.php"><button>Create Product </button></a>
<!-- 3:34 -->
        <form >
            <input type="text" name="search" >
            <button type="submit">search</button>
        </form>


    <table border="1">
        <tr>
            <th>#</th>
            <th>Image</th>
            <th>Title</th>
            <th>Price</th>
            <th>Create Date</th>
            <th>Action</th>
        </tr>
        <?php foreach ($products as $id => $product) : ?>
            <tr>
            <td><?php echo $id + 1; ?></td>
            <td><img src="<?php echo $product['image'] ?>" alt=""></td>
            <td><?php echo $product['title']; ?></td>
            <td><?php echo $product['price']; ?></td>
            <td><?php echo $product['create_date']; ?></td>
            <td>
              
            
           <a href="updute.php?id=<?php echo $product['id'] ?>"><button type="submit">Edit</button></a>
  
               <form action="delete.php" method="post">
                   <input type="hidden" name="id" value="<?php echo $product['id'] ?>">
                   <button type="submit">Delete </button>
               </form>
             
            </td>
        
        </tr>
        
           <?php endforeach; ?> 
    </table>
</body>
</html>