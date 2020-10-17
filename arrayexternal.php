<?php
$arr=["one","two","three","four","five"];//manual array
$name=[];//declare
$name[0]="Maung Maung";
$name[1]="Aung Aung";
$name[2]="KO Ko";
$name[3]="Zaw Zaw";
$name[4]="Mya Mya";
echo $name[3];
echo "<hr/>";

$arr=["name" =>"Maung Maung","age"=>"25"];//associate array
$color=[];
$color["one"]="red";
$color["two"]="blue";
$color["three"]="black";
$color["four"]="white";
$color["five"]="green";
echo $color["two"];
echo "<hr/>";

$arr=[
    ["name"=>"Aung Aung","age"=>"20"],
    ["name"=>"Maung Maung","age"=>"30"],
    ["name"=>"Mya Mya","age"=>"28"],
    ["name"=>"Shan Shan","age"=>"18"],
];//mutidimentional array
$x=[];
$x[0]["name"]="Aung Aung";
$x[0]["age"]="20";
$x[1]["name"]="Mya Mya";
$x[1]["age"]="30";
echo $x[1]["age"];
echo "<hr/>";
echo $x[0]["name"];
?>