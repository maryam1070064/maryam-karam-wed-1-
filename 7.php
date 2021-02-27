<?php
$x = 3;
$y = $x++; //postfix y=x ,x=x+1 ======>y=3 ,x=4
$y += ++$x; // prefix x=x+1 ,y=y+x  =====>x=5 ,y=5+3=8

if ($y == 7) {
    $x++;
    echo $x . "<br>";
} else if ($y == 8) {  //sol is that $x= 5-1=4
    $x--;
    echo $x . "<br>";
} else if ($y == 9) {
    $x += 2;
    echo $x . "<br>";
} else {
    $x = 0;
    echo $x . "<br>";
}
