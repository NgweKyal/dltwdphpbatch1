<?php

// $arr = ["red","green","yellow","black"];
// var_dump($arr);
// echo "<hr/>";
// print_r($arr);
// echo "<hr/>";
// echo "<pre>" . print_r($arr,true) . "</pre>";
// beautyprint($arr);


// $arr2 = ["maung maung","aung aung","zaw zaw","kyaw kyaw"];
// // echo "<pre>" . print_r($arr2,true) . "</pre>";
// beautyprint($arr2);

// $arr3 =[ 
//     ["maung maung","aung aung","zaw zaw","kyaw kyaw"],
//     ["red","green","yellow","black"],
//     ["su su","hla hla","chan chan","black"]
// ];
// beautyprint($arr3);

// $arr4 =[
//     [ "id"=>"1","name"=>"maung maung","age"=>27,"city"=>"mawamyint"],
//     [ "id"=>"2","name"=>"aung aung","age"=>27,"city"=>"mawamyint"],
//     [ "id"=>"3","name"=>"su su","age"=>27,"city"=>"mawamyint"],
//     [ "id"=>"4","name"=>"zaw zaw","age"=>27,"city"=>"mawamyint"],
// ];
     
// $arrjson = json_encode($arr4);
// beautyprint($arrjson);
 //Custom Reuseable function
function beautyprint($array){
    echo "<pre>" . print_r($array,true) . "</pre>";
}

$file = "myjson.json";
if(file_exists($file)){
    $handler = fopen($file,"r");
    $filesize = filesize($file);
    $fileread = fread($handler,$filesize);
    $jsontoarray = json_decode($fileread);//Json Object to Array
// beautyprint($jsontoarray);
foreach($jsontoarray as $array){
    foreach($array as $key=>$value){
        echo "key is ${key}"." value is ${value}"."<br/>";
    }
}


}

echo "<hr/>";

//Constants Value
define( "name","Aung Aung");
echo name;
echo "<br/>";
define("age",26);
echo age;
echo "<br/>";
define("colors",["black","white","red"]);
echo colors[2];



?>
