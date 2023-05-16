<?php
$x=60;
$y=70;

//Global

function addition()
{
    $GLOBALS['z']=$GLOBALS['x']+$GLOBALS['y'];
}
addition();
echo $z;
echo "<br>";

//Server

echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
echo "<br>";
echo $_SERVER['REQUEST_TIME'];
echo "<br>";
echo $_SERVER['SERVER_PORT'];
echo "<br>";
?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">

Name:
<input type="text" name="fname">
<br>
Email:
<input type="number" name="email">
<br>
<input type="submit">

</form>

<?php
if($_SERVER["REQUEST_METHOD"]="POST")
{
    $name=$_REQUEST['fname'];
    $email=$_REQUEST['email'];
    if(empty($name))
    {
        echo "Name is empty";
    }
    else{
        echo $name;

    }
    if(empty($email))
    {
        echo "email is empty";
    }
    else
    echo $email;
}

?>

