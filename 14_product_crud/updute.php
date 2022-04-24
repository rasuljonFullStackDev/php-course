<?php

$pdo = new PDO('mysql:host=localhost;port=3306;dbname=products_crud','root','');
$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);



$id = $_GET['id'] ?? null;

if(!$id){
    header('Location: index.php');
    exit;
}

// 3:49
$statement = $pdo->prepare('SELECT * FROM porducts WHERE id = :id');
$statement->bindValue(':id',$id);
$statement->execute();
$product = $statement->fetch(PDO::FETCH_ASSOC);



$errors = [];
echo $_SERVER['REQUEST_METHOD'];
    $titles =$product['title'];
    $descriptions = $product['description'];
    $prices = $product['price'];
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $titles = $_POST['price-title'];
        $descriptions = $_POST['price-description'];
        $prices = $_POST['price-crud'];
        $date = date('Y-m-d H:i:s');
      

    if(!$titles){
        $errors[] = 'Product title is required';
    }
    if(!$prices){
        $errors[] = 'Product price is required';
    }

  

    if(empty($errors)){

        $img = $_FILES['price-img'] ?? null;
        $imgPath = $product['image'];
        if ($product['image']) {
            unlink($product['image']);
        }

        if($img){
            $imgPath = 'images/'.$img['name'];
            echo '<pre>';
            var_dump($imgPath);
            echo '</pre>';
            move_uploaded_file($img['tmp_name'], $imgPath );
        }


   $statement =  $pdo->prepare("UPDATE   porducts SET title = :title, image = :image ,
            description = :description ,price =:price WHERE id=:id");
  
    $statement->bindValue(':title',$titles);
    $statement->bindValue(':image',$imgPath);
    $statement->bindValue(':description',$descriptions);
    $statement->bindValue(':price',$prices);
    $statement->bindValue(':id',$id);   
    $statement->execute();
    }    
    header("Location: index.php"); 
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Crud</title>
</head>
<body>
    <p>
        <a href="index.php">Go back to Products </a>
    </p>
    <h1>Edit Product Crud <?php echo $product['title'] ?></h1>
    <h1>
        <?php foreach ($errors as $error) : ?>
            <p><?php echo $error ?></p>
        <?php endforeach; ?>
    </h1>
    <form action="" method="post" enctype="multipart/form-data">
        <p>
            <?php if($product['image']) : ?>
                <img src="<?php echo $product['image'] ?>" alt="" width="200px" height="200px">
                <?php endif; ?>
                <br>
            <label>Edit img</label> <br>
            <input type="file" name="price-img">
        </p>
        <p>
            <label>new title</label>
            <input type="text" name="price-title" value="<?php echo $titles ?>">
        </p>
        <p>
            <label>new Deskription</label>
            <input type="text" name="price-description" value="<?php echo $descriptions ?>">
        </p>
        <p>
            <label>new price</label>
            <input type="number" name="price-crud" value="<?php echo $prices ?>">
        </p>
        <button type="submit">send</button>
    </form>
    <?php
    
    ?>
</body>
</html>