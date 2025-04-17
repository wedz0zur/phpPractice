<?php
class Person
{
    private $privateA = "Доступен только собственному классу";
    public $publicA = "Доспутен всем";
    protected $protectedA = "Доступен наследнику и родителю";

    function getInfo()
    {
        return $this->privateA;
    }

    static function getInformation(){
        return protectedA;
    }

    private function getPrivateMethod()
    {
        echo "Приватный метод";
    }

    protected function getProtectedMethod()
    {
        echo "Protected метод";
    }

    public function getPublicMethod()
    {
        echo "Публичный метод";
    }

}

Person::getInformation();


class User
{
    static $id = 0;
    public $name;
    public $age;
    function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
        User::$id++;
    }
}
$user1 = new User("Мага", 29);
echo  "id: " . User::$id . " ";
echo "Имя: " . $user1->name . " " . $user1->age . "<br>";


$user2 = new User("Иван", 42);
echo "id: " . User::$id . " ";
echo "Имя: " . $user2->name . " " . $user2->age . "<br>";


$user3 = new User("Чанга", 12);
echo "id: " . User::$id . " ";
echo "Имя: " . $user3->name . " " . $user3->age . "<br>";

?>
