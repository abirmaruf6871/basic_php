<?php

// $age=18;
// if($age<=15)
// echo "You are not adult";
// else
// echo "You are adult"

// $color="red";
// if($color=="red")
// echo "Color is Red";
// else
// echo "Anything else";

// $fruits="mango";
// if($fruits=="orange")
// echo "This fruit is orange";
// elseif($fruits=="mango")
// echo "This fruit is mango";
// else
// echo "Anything else";

$color = "red";
switch($color){
    case "blue":
        echo "Color is blue";
        break;

    case "green":
        echo "Color is green";
        break;
    
    case "red":
        echo "Color is red";
        break;

    default:
    print "No Color";
}


$t_counter=0;
// while($t_counter<=100)
// {
// echo "ticket number : ".$t_counter;
// $t_counter++;
// }

// do{
//     echo "ticket number : ".$t_counter;
//     $t_counter++;  
// }while($t_counter<=10)

// for($t_counter=0;$t_counter<=20;$t_counter++)
// {
//     echo "Ticket: ".$t_counter;
// }

// $box=["apple","banana","mango","Lichi"];
// foreach($box as $value)
// echo "$value <br>"

$group=array(
    'Abir' =>23,
    'Shagor' =>24,
    'Nahid' =>22,
    'Tohin' =>25
);

foreach($group as $key =>$value)
{
    echo "Name : $key Age :$value <br>";
}


$name=["Joitta","joti","juta"];

foreach($name as $value)
echo "$value<br>";




?>