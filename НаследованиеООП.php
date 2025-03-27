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
}


class Employee extends Person
{

    private $company;
    function getInfo()
    {
        echo "id: " . $this->id . "<br> Имя: " . $this->name . "<br> Почта: " . $this->email . "<br> Номер: " . $this->phone . "<br> Адресс: " . $this->address;
    }
}

$employ = new Employee("06", "Zurab", "wedzigew777@gmail.com", "+79225663407", "Plievo");
$employ->getInfo();
?>