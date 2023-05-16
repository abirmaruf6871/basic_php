<?php

class Vehicle{
    protected static function vehicleType(){
        return "car";
    }
}

class cars extends Vehicle{
    public $vehicleTyp;
    function __construct()
    {
        $this->vehicleTyp=parent::vehicleType();
    }
}

$mycar=new cars();
print_r($mycar);
echo "<br>";

echo $mycar->vehicleTyp;

?>