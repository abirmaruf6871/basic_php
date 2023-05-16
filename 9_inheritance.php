<?php
class Cars
{
    public $name;
    public $color;


    function __construct($name,$color)
    {
        $this->name=$name;
        $this->color=$color;
    }

    function set_name($name)
    {
        $this->name=$name;
    }

    function get_name()
    {
        return $this->name;
    }

    function set_color($color)
    {
        $this->color=$color;
    }

    function get_color()
    {
        return $this->color;
    }



}

class Engine extends Cars{
    public $secretEngine;

    function set_secret($secretEngine)
    {
        $this->secretEngine=$secretEngine;
    }

    function get_full_details($name,$color)
    {
        echo "The brand is $name and color is $color and its secret Engine ";
        return $this->secretEngine;
    }
}

$myCar = new Engine("Toyota","Blue");
$myCar->set_secret("4hdhsj");

// print_r($myCar );

$new= $myCar->get_full_details($myCar->get_name(),$myCar->get_color());
echo $new;

?>