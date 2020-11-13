<?php 
//Variable Scope
$val=20; //Global Variable

function variablescope(){
    $num=10; //Local Variable
    echo $num;
}
echo $val;
echo "<br/>";
variablescope();
echo "<br/>";
// echo $num; local variable does not work in outside

echo "<hr/>";

$x=50; //global variable
$y=100;

function vscope(){
    global $x;
    global $y;
    $z=$x+$y;
    return $z;
}
echo $x;
echo "<br/>";
echo vscope();

echo "<hr/>";

//Static Variable
function staticvariable(){
    STATIC $val=0; //static
    $val++;
    echo $val;
}
staticvariable();
echo "<br/>";
staticvariable();
echo "<br/>";
staticvariable();
echo "<br/>";
staticvariable();
echo "<hr/>";

$num=20;
function myvale($num){
    $num=40;
    echo $num;
}
// $num=80;
echo " this is first value from globle {$num}";
echo "<br/>";
myvale($num);
echo "<br/>";
echo " this is second value from globle {$num}";
echo "<hr/>";

$num=20;
function myvale1(&$val){//&
    $val=40;
    echo $val;
}
echo " this is first value from globle {$num}";
echo "<br/>";
myvale1($num);
echo "<br/>";
echo " this is second value from globle {$num}";
echo "<hr/>";

$num=20;
$num2=50;
function myval1(&$num){
    $num=40;
    echo $num;
}
echo " this is first value from globle num {$num}";
echo "<br/>";
echo " this is first value from globle num2 {$num2}";
echo "<br/>";
myval1($num2);
echo "<br/>";
echo " this is second value from globle num {$num}";
echo "<br/>";
echo " this is second value from globle num2 {$num2}";
echo "<hr/>";
?>