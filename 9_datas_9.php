<?php
// sanani korsatish;

echo date('Y-m-d H:i:s').'<br>';

// bir kun oldin
echo date('Y-m-d H:i:s',time() - 60 * 60 * 24).'<br>';

// echo date('H');

// sana oyi yili bilan chiqarish

echo date('F j Y, H:i:s ').'<br>';

// print current timestap

echo time().'<br>';

// Parse date
$parseDate = date_parse('2021-10-26 21:33:00');

echo '<pre>';
var_dump($parseDate);
echo '</pre>';

// parse date from format

$dateString = 'October 4 2021 21:33:35';
$parseDate = date_parse_from_format('F j Y, H:i:s',$dateString);

echo '<pre>';
var_dump($parseDate);
echo '</pre>';
?>