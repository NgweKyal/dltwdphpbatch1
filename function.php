<?php 
//Function
/*function functionname(){

}*/
function myfun(){
    echo "My name is function";
}
myfun();

echo "<hr/>";

function hellocal(){
    $num1=100;
    $num2=20;
    $cal=($num1/$num2) + (5*5);
    echo $cal;
} 
hellocal();

echo "<hr/>";

//parameter passing to function
function singleparameter($name){
    echo "My name is {$name}";
}
singleparameter("Aung Aung");

echo "<hr/>";

function multiparameter($name,$age){
    echo "My name is {$name}.My age is {$age}";
}
multiparameter("Mya Mya",30);

echo "<hr/>";

function multical($val1,$val2,$val3){
    $cal=($val1+$val2)*$val3;
    echo $cal;
}
multical(10,20,2);

echo "<hr/>";

//default parameter
function defaultparameter($name="Mya Mya"){
    echo "My name is {$name}.";
}
defaultparameter();

echo "<hr/>";

function defaultpp($num1=20,$num2=10,$num3=2){
    $cal=($num1+$num2)/$num3;
    echo $cal;
}
defaultpp(40,20);

echo "<hr/>";

//return value
//simple function 
function simplereturn(){
    return "My name is return function ";
}
echo simplereturn();

echo "<hr/>";

function singlereturn($num1){
    $cal=$num1+120;
    return $cal;
}
echo singlereturn(40);

echo "<hr/>";

function multireturn($num1,$num2,$num3){
    $cal=($num1+$num2)*$num3;
    return $num1;
}
echo multireturn(10,40,20);

echo "<hr/>";
?>