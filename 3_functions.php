<?php

// function abirAhm(){
//     echo "there is no return type";
// }
// abirAhm();

// function fullName($fName,$lName){
//     echo "My Name is $fName $lName <br>";
// }

// fullName("Abir","Ahmed");
// fullName("Adib","Ahmed");

// function fName($fname="Abir Ahmed"){
//     echo "hello Mr. $fname";
// }

// fName();

// function fruitItem($ffruit,$lfruit){
//     return $ffruit." ".$lfruit;

// }

// echo fruitItem('Abir','Ahmed');

// function addNumber($x=0,$y=0):int
// {
//     return $x+$y;
// }

// echo addNumber(4,7)

// function addFiveToCount(&$fiveCount){
//     $fiveCount +=5;

// }

// $countingNumber=22;

// addFiveToCount($countingNumber);
//     print $countingNumber;


// function calculator($method="sum", int $var1, int $var2){
// if($method=="sum")
// return $var1+$var2;
// elseif ($method=="sub")
// return $var1-$var2;
// elseif ($method=="mul")
// return $var1*$var2;
// elseif ($method=="div")
// return $var1/$var2;}

// echo calculator("div",12,4);
// echo calculator("sum",12,4);
// echo calculator("sub",12,4);


function voterChecker($age=18){
    if($age<18)
    return "Not eligible for vote";
    else
    return "Congratulation!! You are eligible for vote";

}

echo voterChecker(13);



?>