<?php


$age = 21;
$heigh = 1200;

if($age === 21){
    echo '1'.'<br>';
}

if($heigh > 1200){
    echo 'this is height big'.'<br>';
} else{
    echo 'this is small heigh'.'<br>';
}

/*
shart operatorlari js bilan bir xil
strukturada ishlaydi
masalan
solishtirma tekshiruvlar ham bir xil
4=='4' true
4==='4' false
&& va deganmanoda ishlatiladi
|| yoki degan manoda ishlatiladi


*/
echo $age  > 20 ? 'Togri' : 'notugri';











// switch

$userRole = 'admins';

switch($userRole){
    case 'admin':
        echo 'this is admin';
         break;
    case 'user':
        echo 'this is user';
         break;
    case 'gost':
        echo 'this is gost';
         break;

    default: echo "not found";
}






?>