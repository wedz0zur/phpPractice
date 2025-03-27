<?php
class Person
{
    public $name, $age;

    function hello()
    {
        echo "Здраствуйте " . $this->name . " " . "Мне $this->age года <br>";
    }
}


$person = new Person();
$person->name = "Tom";
$person->age = 23;
// print_r($person)
$person->hello();

$maga = new Person();
$maga->name = "Магомед Могаев";
$maga->age = 43;
$maga->hello();


class PersonNew
{
    public $name = "Undefined", $age = 18;

    function hello()
    {
        echo "Здраствуйте " . $this->name . " " . "Мне $this->age года <br>";
    }

}

$person3 = new PersonNew();
$person3->hello();

// for ($i = 0; $i < 10; $i++) {
//     $person3 = new PersonNew();
//     $person3->name = "Mango";
//     $person3->age = 20;
//     $person3->hello();
// }

class Car
{
    public $name = "Mercedes";
    public $year = 2009;
    function getName()
    {
        return $this->name;
    }

}

// $car1 = new Car();
// $car2 = new Car();
// $car3 = $car2;

// if($car3 == $car2){
//     echo '<br> Равны';
// }else{
//     echo '<br> Не равны';
// }


class car2
{
    public $name;
    public $year;
    function getName()
    {
        return $this->name;

    }

    function __construct($name, $year = 2013)
    {
        $this->name = $name;
        $this->year = $year;
    }

}

$car4 = new Car2("BMW", 2007);
$car5 = new Car2("Mercedes", 2025);
echo $car4->name . " " . $car4->year . ' ' . 'Аджара гуджу! <br>';
echo $car5->name . " " . $car4->year;


class Student
{
    public $name, $lastName, $age, $group, $specialization;
    function getInformation()
    {
        echo "<br>" . $this->name . " " . $this->lastName . " " . $this->age . " ", $this->group . " " . $this->specialization;
    }

    function __construct($name, $lastName, $age, $group, $specialization){
        $this->name = $name;
        $this->lastName = $lastName;
        $this->age = $age;
        $this->group = $group;
        $this->specialization = $specialization;
    }
}

$zurab = new Student("Zurab", "Vedzizhev", 21, "2Р1-11.23", "Разработчик");
$zurab->getInformation();

$oleg = new Student( "Олег", "Обрамович", 20, "2П1-11.23", "Программист");
$oleg->getInformation();


class car3{
    
}
?>