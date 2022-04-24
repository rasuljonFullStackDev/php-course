<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<b>Вычисление факториала</b><br><br>
Введите число<br>
<form action="<?php echo $_SERVER['SCRIPT_NAME']; ?>">
<input type="text" name="fact"  >
<input type="submit" value="OK">
<input type="file" name="image" id="">
</form><br>

<?php
    $bolem = false;
    $k = intval(file_get_contents('num.txt'));
    if(!empty($_GET['fact']))
    {
        echo ' emputy';
        $name = $_GET['fact'];   
        file_put_contents("$k.txt","$name");
        echo '<pre>';
        var_dump($img);
        echo '</pre>';
        for ($i=0; $i < $k ; $i++)
            { 
                $massage = file_get_contents("$i.txt");
                echo "<h1>$massage</h1>".'<br>';       
            }
        $k++;
        file_put_contents("num.txt","$k.txt");
        $bolem = "";
        header( "Location:index.php");
    }
     else 
    {
        echo 'not emputy';
        for ($i=0; $i < $k ; $i++) 
        { 
                $massage = file_get_contents("$i.txt");
                echo "<h1 class='text'>$massage</h1>".'<br>';       
            }
    }
   


?> 


</body>
</html>