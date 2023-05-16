<?php
abstract class Car{
    public $name;

    function __construct($name)
    {
        $this->name=$name;
    }

    abstract public function intro():string;
}

class Audi extends Car{
    public $made_in;
    public function intro():string{
        return "Made in $this->made_in and brand name is $this->name";
    }

    public function price(){
        return "Price is 1M";
    }
}
$car_details=new Audi("Audi","German");
$car_details->intro();
$car_details->made_in="Japan";
// print_r($car_details);
echo $car_details->intro();
echo "<br>";
echo $car_details->price();
?>