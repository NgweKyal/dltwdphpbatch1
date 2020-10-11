<?php

$val1='Zaw Myint Maung\'s ';//only single code use 
$val2="Zaw Myint Maung\"s ";
echo  "{$val1}";//echo $val; 
echo  "{$val2}";
echo "<hr/>";

//statement function
$num1="Aung Aung";
var_dump($num1);//var_dump is use to view array
if(is_string($num1)){ //check variable is string?
echo "Your variable is String ";
}
echo "<hr/>";
$num2=150;
var_dump($num2);
if(is_numeric($num2)){ //check variable is numeric?
echo "Your variable is Numeric ";
}
echo "<hr/>";
$num3=20.5;
var_dump($num3);
if(is_float($num3)){ //check variable is float?
echo "Your variable is Float ";
}
echo "<hr/>";
$num4=false;
var_dump($num4);
if(is_bool($num4)){ //check variable is boolean?
echo "Your variable is Boolean ";
}
echo "<hr/>";
$num5=[1,2];
var_dump($num5);
if(is_array($num5)){ //check variable is array?
echo "Your variable is Array ";
}
echo "<hr/>";
$num6=[];
var_dump($num6);
if(empty($num6)){ //check variable is empty?
echo "Your variable is Empty ";
}
echo "<hr/>";
$num7=12;
var_dump($num7);
if(is_int($num7)){ //check variable is integer?
echo "Your variable is Int ";
}
?>