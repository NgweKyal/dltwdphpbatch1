<?php
// 3 array
$val1=["red","blue","black","gray","green"];//manual array
$val2=["one"=>"this is post one",
        "two"=>"this is post two",
        "three"=>"this is post three",
        "four"=>"this is post four"];//Associative array
$val3=[
    ["name"=>"Aung Aung","age"=>"20"],
    ["name"=>"Maung Maung","age"=>"30"],
    ["name"=>"Mya Mya","age"=>"28"],
    ["name"=>"Shan Shan","age"=>"18"],
];//Multidimensional array
var_dump($val1);
echo "<hr/>";
var_dump($val2);
echo "<hr/>";
var_dump($val3);
echo "<hr/>";
echo $val1[3];//manual array
echo "<hr/>";
echo $val2["one"];//associative array
echo "<hr/>";
echo $val3[2]["name"];//multi array
echo "<hr/>";
foreach ($val1 as $data) { //manual array
    echo $data ."<br/>";
}
echo "<hr/>";
echo "Ass Array"."<br/>";
foreach ($val2 as $key=>$value) { //associative array
    echo $key ."<br/>";
    echo $value ."<br/>";
}
echo "<hr/>";
echo "Ass Multi"."<br/>";
foreach ($val3 as $multi) { //multi array
    foreach ($multi as $a => $b){
    echo $b ."<br/>";
}
}
?>