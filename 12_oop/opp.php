<?php

// what is class and instance

class Person {
    public  $name;
    public $surname;
    private $age;

        public function __construct($name,$surname)
        {
            // echo $name . ' '. $surname.'<br>';
            $this->name = $name;
            $this->surname = $surname;
        }
        public function setAge($age){
            $this->age = $age;
        }
        public function getAge(){
            $this->age = $age;
        }
}

$p = new Person("Abdurasul" , "Tursunboyev");
// $p->name = 'Abdurasul';
// $p->surname = 'Tursunboyev';
$p->setAge(21);

echo '<pre>';
var_dump($p);
 echo '</pre>';
//  echo $p->getAge();

// echo $p->name . '<br>'; 

$p2 = new Person("John","Smith");
// $p2->name = 'John';
// $p2->surname = 'Smith';
echo '<pre>';
var_dump($p2);
echo '</pre>';
// echo $p;

?>