<?php
class Person
{
    private $privateA = "Доступен только собственному классу";
    public $publicA = "Доспутен всем";
    protected $protectedA = "Доступен наследнику и родителю";

    function getInfo(){
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

?>
