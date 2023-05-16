<?php
trait madeinChina{
    public function showinfo(){
        echo "This car made by china";
    }
}

trait madeinUSA{
    public function showinfo2(){
        echo "This car engine made by USA";
    }
}

trait madeinUK{
    public function showinfo3(){
        echo "This car glasses made by UK";
    }
}

class Car{
    use madeinChina,madeinUSA,madeinUK;
    public $name;
    public function __construct($brand)
    {
        $this->name=$brand;
    }
}
$mycar=new Car("BMW");
echo "<h1>";
echo  $mycar->name="Audi"; 
echo "</h1>";
echo "<br>";
$mycar->showinfo();
echo "<br>";
$mycar->showinfo2();
echo "<br>";
$mycar->showinfo3();
echo "<br>";
?>