<?php
$a = 3;
$b = 6;
$c = 1.5;

echo $a + $b * $c.'<br>';
echo $a - $b.'<br>';
echo $a + $b.'<br>';
echo $a % $b.'<br>';
echo $a / $b.'<br>';
echo $a * $b.'<br>';


// arifmetik ammalarni qisqartma shakllari

$a += $b; echo $a.'<br>';
$a *= $b; echo $a.'<br>';
$a /= $b; echo $a.'<br>';
$a -= $b; echo $a.'<br>';
$a %= $b; echo $a.'<br>';

// increment operator

echo $a++.'<br>';
echo ++$a.'<br>';

// decrement operaator

echo $a--.'<br>';
echo --$a.'<br>';
echo --$a.'<br>';

// turlariga qarab mantiqiy qiymat beruvchi funksiya

is_float(1.21); ///true
is_double(1.23); ///true
is_int(5); //true
is_numeric("3.45"); //true
is_numeric("3g.45"); //false

// ozgaruvchilarni tipini ozgartirish

$strNumber  = '12.45';
$numbers = (float)$strNumber;
var_dump($numbers);

$numbers = (int)$strNumber;
var_dump($numbers);

$numbers = floatval($strNumber);
var_dump($numbers);

$numbers = intval($strNumber);
var_dump($numbers);

// arifmetik amallar funksiyallari
echo '<br> ';
echo "abs(-15)".abs(-15).'<br>';
echo "pow(2,3)" . pow(2,3).'<br>';
echo "sqrt(16)" . sqrt(16).'<br>';   
echo "max(2,3)" . max(2,3).'<br>';
echo "min(2,3)" . min(2,3).'<br>';
echo "round(2.4)" . round(2.4).'<br>';
echo "round(2.6)" . round(2.6).'<br>';
echo "floor(2.6)" . floor(2.6).'<br>';
echo "ceil(2.4)" . ceil(2.4).'<br>';

// formating number

$forNumber = 123456789.123;

echo number_format($forNumber,2,'.',',');
  















?>