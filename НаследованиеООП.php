<?php

class Person
{
    public $id, $name, $email, $phone, $address;

    function __construct($id, $name, $email, $phone, $address)
    {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
        $this->address = $address;

    }
    // final function getInfo()
    function getInfo()
    {
        echo "id: " . $this->id . "<br> Имя: " . $this->name . "<br> Почта: " . $this->email . "<br> Номер: " . $this->phone;
    }
}


class Employee extends Person
{

    private $company;
    function __construct($id, $name, $email, $phone, $address, $company)
    {
        $this->company = $company;
        // parent::__construct($id, $name, $email, $phone, $address);
        Person::__construct($id, $name, $email, $phone, $address);
        // $this->name = $name;
        // $this->email = $email;
        // $this->phone = $phone;
        // $this->address = $address;
    }

    function getInfo()
    {
        return "<br> <br>id: " . $this->id . "<br> Имя: " . $this->name . "<br> Почта: " . $this->email . "<br> Номер: " . $this->phone . "<br> Адресс: " . $this->address . "<br> Компания: " . $this->company . "<br>" . parent::getInfo();
    }
}

$employ = new Employee("06", "Zurab", "vedzigev777@gmail.com", "+79283458723", "Plievo", "Яндекс");
echo $employ->getInfo();


echo $employ instanceof Employee;
?>
