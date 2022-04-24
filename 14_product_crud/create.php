<?php

$pdo = new PDO('mysql:host=localhost;port=3306;dbname=products_crud','root','');
$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);


$errors = [];
echo $_SERVER['REQUEST_METHOD'];
    $titles ='';
    $descriptions = '';
    $prices = '';
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

    $img = $_FILES['price-img'] ?? null;

  
    if(empty($errors) && $img['size']>0)
    {

      m
        if($img)
        {
            $imgPath = 'images/'.$img['name'];
            // echo '<pre>';
            // var_dump($imgPath);
            // echo '</pre>';
            move_uploaded_file($img['tmp_name'], $imgPath);
        }


        $statement =  $pdo->prepare("INSERT INTO porducts ( title, image ,description ,price, create_date)
        VALUE (:title,:image,:description,:price,:date)");
        $statement->bindValue(':title',$titles);
        $statement->bindValue(':image',$imgPath);
        $statement->bindValue(':description',$descriptions);
        $statement->bindValue(':price',$prices);
        $statement->bindValue(':date',$date);
        $statement->execute();
        header("Location: index.php"); 
    }
    else
    {
        $errors[] = "image not upload";
    }   
    
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
    <h1>New Product Crud</h1>
    <h1>
        <?php foreach ($errors as $error) : ?>
            <p><?php echo $error ?></p>
        <?php endforeach; ?>
    </h1>
    <form action="" method="post" enctype="multipart/form-data">
        <p>
            <label>new img</label> <br>
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