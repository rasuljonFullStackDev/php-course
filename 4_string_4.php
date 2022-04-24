<?php

// Create simple string
$name = "Abdurasul";
$string = 'Hello $name';
$string2 = "Hello $name";

echo $string.'<br>';
echo $string2.'<br>';

// satrlsar bilan ishlovchi funksiyalar
$string = "  Hello php my name is $name  ";
echo "1-  ".strlen($string).'<br>';
echo "2-  ".trim($string).'<br>';
echo "3-  ".ltrim($string).'<br>';
echo "4-  ".rtrim($string).'<br>';
echo "5-  ".str_word_count($string).'<br>';
echo "6-  ".strrev($string).'<br>';
echo "7-  ".strtoupper($string).'<br>';
echo "8-  ".strtolower($string).'<br>';
echo "9-  ".ucfirst($string).'<br>';
echo "10-  ".ucwords($string).'<br>';
echo "11-  ".strpos($string,'my').'<br>';
echo "12-  ".stripos($string,'my').'<br>';
echo "13-  ".substr($string,8,15).'<br>';
echo "14-  ".str_replace('php','world',$string).'<br>';
echo "15-  ".str_ireplace('php','world',$string).'<br>';

// uzun text
echo '<br>';
$longText = "
    hello,my name is <b> Abdurasul </b>
    I am 21,
    I love my <b> coding</b>
";
echo "1- ". $longText.'<br>';
echo "2- ". nl2br($longText).'<br>';
echo "3- ".htmlentities($longText).'<br>';













?>