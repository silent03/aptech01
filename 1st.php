<?php
$a = 20; //Int
$b = 10.10; //Float
$c = true; //Boolean
$d = "Ali,Faraz,Kamran"; //String
$color = ["black","blue","orange"]; //Array

echo $a."<br>".$b."<br>".$c."<br>".$d."<br>";
 print_r($color);


//data type check
var_dump($color);

//character check
echo strlen($d);

//word count
echo str_word_count($d);


//reverse
echo  strrev($d);



?>