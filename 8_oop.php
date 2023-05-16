<?php
class Cars {
  // Properties
  public $name;
  public $color;

  function __construct($name,$color)
  {
    $this->name = $name;
    $this->color = $color;
  }

  function __destruct()
  {
    echo "The car is .{$this->name}. and the color is {$this->color}.";
  }

  // Methods
  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }

  function set_color($color) {
    $this->color = $color;
  }
  function get_color() {
    return $this->color;
  }
}

$new_car_object=new Cars("Toyota","Green");
// print_r($new_car_object) ;
$new_car_object->set_name("BMW");
// $new_car_object->set_color("Black");

$my_car_brand=$new_car_object->get_name();
$my_car_color=$new_car_object->get_color();


print($my_car_brand);
print "<br>";
print($my_car_color);

// $second_car_object=new Cars();
// $second_car_object->set_name("Toyota");
// $second_car_object->set_color("White");

// $my_scar_brand=$second_car_object->get_name();
// $my_scar_color=$second_car_object->get_color();

// print($my_scar_brand);
// print "<br>";
// print($my_scar_color);
?>