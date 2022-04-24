<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST" enctype="multipart/form-data">
        <p>user name</p>
        <input type="text"  name="username">
        <p>email</p>
        <input type="email" nema="email">
        <p>password</p>
        <input type="password">
        <p>user image</p>
        <input type="file" name="image">
        <br>
        <button type="submit">sign in</button>

    </form>
    <?php 
// $username = $_GET['username'];
// $email = $_GET['email'];
// $password = $_GET['password'];
$image = $_FILES['image'];

// echo '<pre>';
// var_dump($image);
// echo '</pre>';
move_uploaded_file($image["tmp_name"],$image['name']);

?>
</body>
</html>