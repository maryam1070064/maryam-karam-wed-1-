<?php
$num1 = 50;
$num2 = 50;
$num3 = -50;

$num = [$num1, $num2, $num3];

if (($num1>=$num2) &&( $num2>$num3) ) {
    echo "max num is $num1 and min num is $num3";
}
elseif(($num1>=$num3) && ($num3>$num2) ) {
    echo "max num is $num1 and min num is $num2";
}

elseif (($num2>=$num1) && ($num1>$num3))  {
    echo "max num is $num2 and min num is $num3";
} 
elseif (($num2>$num3) && ($num3>=$num1))  {
    echo "max num is $num2 and min num is $num1";}

elseif (($num3>$num2) && ($num2>=$num1)) {
    echo "max num is $num3 and min num is $num1";
}
elseif (($num3>$num1) && ($num1>=$num2)) {
    echo "max num is $num3 and min num is $num2";
}


else{
    echo"max is $num1";
}
