<?php

// while


// loop with $counter
$counter = 0;
while ($counter < 10) {
    echo $counter.'<br>';
    $counter++;
}

// do while
do {
    echo $counter;
    $counter++;

} while($counter < 20);



// for
for($i = 0; $i<10; $i++ ){
    echo $i.'<br>';
}
// foreach
$fruits = ["banana","apple","orange"];

foreach($fruits as $i=> $fruit){
    echo $i.''. $fruit.'<br>';
}

// iterate over associative array

$person = [
    'name'=>'Abdurasul',
    'age'=>30,
    'surname'=>'Tursunboyev',
    'hobbies'=>[
        'Tennis','Coding','movie'
    ]
    ];
foreach($person as $key=>$value){
    echo $key.''.$value.'<br>';
    if(is_array($value)){
       echo $key.' '. implode(",",$value).'<br>';
    } else{
        echo $key .' '. $value.'<br>';
    }
}




?>