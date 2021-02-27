<?php
$array=[
    "name" => "maryam",
    "age" =>23,
    "length" =>160,
    "job" =>"student",
    "length" =>160
    
];

print_r($array);
echo"<br>";

//another solution
foreach($array as $key=>$value){
 echo "$key: $value <br>";
};