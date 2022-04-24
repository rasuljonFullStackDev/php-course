<?php
// magic constants

echo __DIR__.'<br>';/// filegacha bolgan yoni beradi
echo __FILE__.'<br>';//// bu file manziligacha  yolni olib beradi
echo __LINE__.'<br>'; //// bu nechanchi qatordagi yozilganligini korsatadi
// yangi papka hosil qilish
// mkdir('test');  
// for ($i=0; $i < 5; $i++) { 
//     mkdir("$i");
// }
// yangi hosil qilingan file ni nomini ozgartish
// rename('test','test2');
// for ($i=0; $i < 5; $i++) { 
//     # code...

//     rmdir("$i");
// }
// yangi hosil qilingan papkani ochirish
// rmdir('test2')

// fileni oqish
echo file_get_contents('test.txt');
// file manzillari yoki yollarni korsatish
$files =  scandir('./');

echo '<pre>';
var_dump($files);
echo '</pre>';


// file hosil qilish va qiymat berish

file_put_contents('firstFile.txt','This is first file i am create php file and more ');
// fileni hosil qilingan funksiya bilan API chaqirish mumkin
// $userJson =  file_get_contents("https://jsonplaceholder.typicode.com/posts");

// echo $userJson;
// $user = json_decode($userJson,true);

// echo '<pre>';
// var_dump($user);
// echo '</pre>';

// qosimcha file boshqa xususiyatlari
// echo file_exists('firstFile.txt');
// echo is_dir('firstFile.txt');
// echo filemtime('firstFile.txt');
// echo  filesize('firstFile.txt');
// echo disk_free_space('firstFile.txt');
$fileMore = file('firstFile.txt');
$file_ex = file_exists('firstFile.txt');
echo '<pre>';
var_dump($fileMore);
echo '</pre>';
echo '<pre>';
var_dump($file_ex);
echo '</pre>';





?>