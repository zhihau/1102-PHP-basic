<?php
interface Sound{
    public function sound();
}
class Animal implements Sound{
    protected $name = ''; //只能接固定值，不能接function
    protected $age = 0; //封裝 外部無法存取此屬性
    private $heartbeat = 0;

    public function __construct()
    {
        $this->age = rand(10, 20);
        $this->name = 'john';
        $this->heartbeat = rand(20, 60);
    }
    public function sound(){
        return "gi";
    }

    public function getName()
    {
        return $this->name;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
}
$animal = new Animal;
// echo $animal->name;//甚麼時候改的不知道 如為public
// $animal->name="Tom";
$animal->getName();
$animal->setName('tom');
$animal->getName();

class Dog extends Animal
{
    protected $hair_color = "black";
    public function getColor()
    {
        return $this->hair_color;
    }
    public function getName()
    {
        return 'I am ' . $this->name;
    }
    public function setColor($hair_color)
    {
        return $this->hair_color = $hair_color;
    }
    public function sound(){
        return "忘";
    }
}
class Cat extends Animal
{
    protected $hair_color = "black";
    public function getColor()
    {
        return $this->hair_color;
    }
    public function getName()
    {
        return 'I am ' . $this->name;
    }
    public function setColor($hair_color)
    {
        return $this->hair_color = $hair_color;
    }
    public function sound(){
        return "喵";
    }
}
$dog = new Dog;
$cat = new Cat;
echo $dog->sound();
echo $cat ->sound();