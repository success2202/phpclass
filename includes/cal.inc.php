<?php
declare(strict_types = 1);
include 'class-autoloader.inc.php';

$operat = $_POST['operat'];
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];

$calc = new Calc($operat, (int)$num1, (int)$num2);

try{
    echo $calc->calculator();

}catch(TypeError $e){
    echo "Error!:" . $e->getMessage();

}
?>