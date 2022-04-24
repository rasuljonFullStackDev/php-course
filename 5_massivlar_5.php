<?php
// massiv yasash


$fruits = ["Banana","Apple","Orange"];


// massivni strukturaviy ekranga chiqarish

echo '<pre>';
var_dump($fruits);
echo '</pre>';


// massivni indexsi orqalichaqirish
echo $fruits[1].'<br>';

// massivni korsatilgan indexni boyicha ozgartirish

$fruits[0] = 'Peach';
echo '<pre>';
var_dump($fruits);
echo '</pre>';

// massivni berilgan indexi maxjud yoki mavjud
// emasligini tekshiryvchi funksiya

isset($fruits[3]);//false
isset($fruits[2]);//true

// massivga malumot qoshish yani push

$fruits[] = 'Banana';

echo '<pre>';
var_dump($fruits);
echo '</pre>';

// massivni uzunligini aniqlash

echo count($fruits);

// massivga malumot qoshish yoki massivlarni birlashtirish

array_push($fruits,'Foo');
echo '<pre>';
var_dump($fruits);
echo '</pre>';

// massivdan oxirgi elementni ochirish

echo array_pop($fruits);
echo '<pre>';
var_dump($fruits);
echo '</pre>';

// massivni boshidan qiymat qushish

array_unshift($fruits,'bar');
echo '<pre>';
var_dump($fruits);
echo '</pre>';


// massivni boshidan boshlab qiymatini ochirish
echo array_shift($fruits);

// string elementni massivga aylantirish 
// js dagi split ga oxshaydi

$string = "Banana,Apple,Orange"; 
echo '<pre>';
var_dump(explode(",",$string));
echo '</pre>';

// massivlarni stringga aylantirish

echo implode('&',$fruits);


// massiv ichidan maumot izlash

echo '<pre>';
var_dump(in_array('Mango',$fruits));
echo '</pre>';


echo '<pre>';
var_dump(in_array('Apple',$fruits));
echo '</pre>';

// massivni qidirish => bu fiunksiya massivda 
// qidirilgan element bolsa uning indexni qaytaradi

echo '<pre>';
var_dump(array_search("Banana",$fruits));
echo '</pre>';


// massivlarni biralshtirish

$vegatables = ["Potato","cucumber"];

echo '<pre>';
var_dump(array_merge($fruits,$vegatables));
// var_dump([...$fruits, ...$vegatables]);   
echo '</pre>';

// massivni tartiblash 

echo '<pre>';
var_dump($fruits);
echo '</pre>';
sort($fruits);
echo '<pre>';
var_dump($fruits);
echo '</pre>';

//  massivni teskari tartiblash
echo '<pre>';
var_dump($fruits);
echo '</pre>';
rsort($fruits);
echo '<pre>';
var_dump($fruits);
echo '</pre>';


// massiv ichiga massiv qushish

$person = [
    'name'=>'Abdurasul',
    'age'=>30,
    'surname'=>'Tursunboyev',
    'hobbies'=>[
        'Tennis','Coding','movie'
    ]
    ];

echo '<pre>';
var_dump($person);
echo '</pre>';

// massivni kaliti bilan chaqqirish

echo $person['name'].'<br>';
// massivga uzgartirishlar kiritish

$person['channel'] = 'TraversMedia';
echo '<pre>';
var_dump($person);
echo '</pre>';


// massiv elementlar ichidan boshqa kalitni qidirish

// if(!isset($person['adress'])) {
// $person['adress'] = 'this is adress';
// };

// echo '<pre>';
// var_dump($person);
// echo '</pre>';


// if ni ishlatishni qisqartma shakli

// $person['adress'] = $person['adress'] ?? 'this is if shorthand';

// $person['adress'] ??= 'this is if shorthand';

echo '<pre>';
var_dump($person);
echo '</pre>';

// massivlarni kalitlarini aniqlash

echo '<pre>';
var_dump(array_keys($person));
echo '</pre>';

// massivlarni valuasini chiqarish yani qiymatini

echo '<pre>';
var_dump(array_values($person));
echo '</pre>';
// kalitlarni tartiblash 

ksort($person);
echo '<pre>';
var_dump($person);
echo '</br>';

 

?>