<?php
echo "Hi";
$username = "Hristianna";
echo "<br>";
echo $username;
$age = 22;
echo "<br>";
echo $age;
$istrue = true;
echo"<br>";
echo $istrue;

$array = ["Hristianna",22];
echo"<br>";
echo $array[0];
echo"<br>";
echo $array[1];

$assocarray = ["username" => "Hristianna", "age" => 22];
echo "<br>";
echo $assocarray["username"];

for($i=0;$i<2;$i++)
 {
    echo"<br>";
    echo $array[$i];
 
 }

 foreach($assocarray as $elements)
 {
    echo"<br>";
    echo $elements;
 } 