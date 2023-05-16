<?php
// $companies=array("honda","toyota","bmw","lamborgini");
// $companies_num=count($companies);
// echo $companies_num;

// for($index=0;$index<$companies_num;$index++)
// {
//     echo "$index =>$companies[$index]<br>";
// }

// $marketShare=array(
// "honda"=>"35b",
// "bmw"=>"350b",
// "toyota"=>"335b",
// "ferari"=>"85b",
// "royal"=>"351b");

// foreach($marketShare as $key =>$value)
// echo "Brand: $key"." Market:$value"."<br>";

// $companyProfile=array(
//     array("Toyota","35b","500k"),
//     array("Bmw","40b","300k"),
//     array("Honda","40b","380k"),
// );

// for($row=0;$row<count($companyProfile);$row++){
// echo "<p>Row # $row</p>";
// echo "<ul>";

// for($col=0;$col<3;$col++){
// echo "<li>".$companyProfile[$row][$col]."</li>";}
// echo "</ul>";}

// for($row=0;$row<count($marketShare);$row++)
// echo $row;
// echo "<ul>";

// for($col=0;$col<3;$col++){
//     echo "<li>".$marketShare[$row][$col]."</li>";
// 

// $fruits=array("mango","banana","lichi","apple");
// rsort($fruits);

// for($index=0;$index<count($fruits);$index++){
//     echo "$index => $fruits[$index]<br>";
// }

// $fruits=array("banana","apple","mango","pineapple","lichi");
// $fruitsnum=count($fruits);

// for($index=0;$index<$fruitsnum;$index++)
// {
//     echo "$index => $fruits[$index] <br>";
// }

// var_dump($fruits);

// $fruits=array("banana" => "1kg","apple"=>"3kg","mango"=>"2kg");
//     foreach($fruits as $key =>$value){
//         echo "Name : $key" ." Weight: $value"."<br>";

//     }

// $fruits=array(
//     array("Banana","2kg","480 TK"),
//     array("Banana","2kg","480 TK"),
//     array("Banana","2kg","480 TK")
    
// );

// for($row=0;$row<count($fruits);$row++){

// echo "<p> Row# $row</p>";

// Index Array

// $students=array('Abir','adib','sabbir');
// // var_dump($students);
// $std_num=count($students);
// for($index=0;$index<$std_num;$index++)
// {
//     echo "$index". $students[$index];
//     echo "<br>";
// }

// $numbers=array(9,8,7,5.9,7,8,77,66,666);
// var_dump($numbers[3]);

// echo "<br>";
// $std_age=array(
//     "Abir"=>24,
//     "Joti"=>21,

// );

// echo $std_age["Abir"];

// $emp=array(
//     [
//         "name"=>"abir",
//         "age"=>24,
//         "email"=>"abir@gmail.com"
//     ],
//     [
//         "name"=>"adib",
//         "age"=>14,
//         "email"=>"adib@gmail.com"
//     ]
//     );

// echo $emp[1] ['email'];


$companies=array("Honda","Toyota","Lamborgini","BMW");
print_r(array_slice($companies,2,4));
$marketShare=array("Honda"=>"35b","Toyota"=>"40b","Lamborgini"=>"45b","BMW"=>"50b");

$merge=array_merge($companies,$marketShare);
// print_r($merge);
print_r(array_keys($merge));
print_r(array_values($merge));
print_r(array_key_exists("Honda",$merge));
array_push($companies, "Royal Enfield");

print_r($companies);

array_pop($companies);
print_r($companies);

//array map

function salesTax($price){
    return number_format(($price*1.20),3,".","");
}

$items=array(
    200,
    450,
    30,
    50,
    60
);

$final=array_map('salesTax',$items);
print_r($final);


echo "<br>";

function shirtTax($prices){
    return number_format(($prices*0.4),2,".","");
}

$item=array(
    "mens_shirt"=>"700",
    "womens_shirt"=>"600",
    "casual_shirt"=>"900",
    "formal_shirt"=>"980"
)
;
$finalCost=array_map('shirtTax',$item);
print_r($finalCost);


































// echo "<ul>";

// for($col=0;$col<3;$col++){
//     echo "<li>".$companyProfile[$row][$col]."</li>";}
//     echo "</ul>";}



?>