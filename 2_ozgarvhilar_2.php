<?php

// ozgaruvhilar nima 



/// ozgaruvchi turi

// ozgaruvchilarni elon qilish

/*
 String
 Intager
 Float/Double
 Boolean
 Null
 Array
 Object
 Resoure
*/

$name = 'Abdurasul';
$age = 21;
$isMale = true;
$height = 1.80;
$salary = null;

// ozgaruvchilarni chop etish va ularni tushuntirish

echo $name.'<br>';
echo $age.'<br>';
echo $isMale.'<br>';//// mantiqiy tur rost yoki yolgon
echo $height.'<br>';
echo $salary.'<br>';


// ozgaruvchilarni turini bilish

echo gettype($name).'<br>';
echo gettype($age).'<br>';
echo gettype($isMale).'<br>';
echo gettype($height).'<br>';
echo gettype($salary).'<br>';


// ozgaruchilarni korinishi

var_dump($name,$age,$isMale,$height,$salary);

// ozgaruvchilarni boshqa qiymat bilan yozish

$name = false;

// ozgaruvchini turni korish

echo gettype($name);


// ozgaruvchilarni turini tekshiruvchi funksiya

is_string($name); //yolgon => false;
is_int($age); /// rost =>true
is_bool($isMale); /// rost =>true
is_double($height)  ////// rost =>true


// qiymat bor yoki elon qilingan ozgaruvchi
// borligini aniqlovchi funksiya

isset($name);
isset($adress);


// const ozgarmaslar haqida

define('PI',3.14);
define('e',2.71);

echo PI;
echo e;

// using php built-in constants
echo SORT_ASC.'<br>';
echo PHP_MAX_INT.'<br>' ;
?>