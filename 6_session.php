<?php
session_start();

$_SESSION['favcolor']="yellow";
$_SESSION['pet']="dog";

echo "Sessions are set";
echo "<br>";

echo "My Favourite Color is ".$_SESSION['favcolor'];
echo "<br>";
echo "My Favourite Pet is ".$_SESSION['pet'];

print_r($_SESSION);

session_unset();
print_r($_SESSION);

session_destroy();

?>