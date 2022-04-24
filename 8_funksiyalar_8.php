<?php
// funksiya haqida "salom dunyo" sozini chiqarish

// function hello(){
//     echo "salom dunyo".'<br>';
// }
// hello();
// hello();
// hello();

// funksiyani argument orqali foydalanish

function hello($name){
    return   "Hello i am $name".'<br>';
}
echo hello('Abdurasul');
echo hello('Asadbek');
echo hello('Sharafiddin');

// hisoblochi funksiya tuzish
function sum($a,$b){
    return $a + $b;
}

echo sum(5,6).'<br>';

// kop qiymatli hisoblovchi funksiya tuzish

// function moreSum(...$nums){
//     $sum = 0;
//     foreach($nums as $s){
//         $sum += $s;
//     }
//     return $sum;
// }

// echo moreSum(1,5,4,8,1,12,4);

// arrow function


function moreSum(...$nums){
    return array_reduce($nums, fn($carry,$n) => $carry + $n);
}

echo moreSum(1,5,4,8,1,12,4);


?>