<?php 
//$x=30;
//$y=15;
//$x += 50;
//$y -=5;
//$x /= 3;
//$y %= 2;
// echo $x + $y .'<br>';// aritmatika addition
// echo $x - $y.'<br>';//aritmatika substraction
// echo $x * $y.'<br>';//aritmatika multiplication
// echo $x / $y .'<br>';//aritmatika division
// echo $x % $y .'<br>';//aritmatika modulus
// echo $x ** $y .'<br>';// aritmatika exponentation

// echo $x = $y .'<br>';//assignment sama dengan
//echo $x .'<br>';//assignment addition x += y
//echo $y .'<br>'; // assignment substraction x -= y
//echo $x * $y .'<br>';// assignment multiplication x *= y
//echo $x .'<br>';//assignment division x /= y
//echo $y .'<br>';// assignment modulus x%= y


$x= 40;
//$y="40";
$y=10;
//$y=40;

var_dump($x == $y);//comparison <aqual> sama dengan saja
var_dump($x === $y) ;//tidak sama karena samadengan sama dengan <identical>
var_dump($x != $y) ;//kenapa ini salah karena x dan y nya sama,jika nilai nya benar maka x dan y nya harus berbeda <not equal>
var_dump($x <> $y);//sama dengan <not equal> penjelasannya hanya berbeda lambang dengan x dan y
var_dump($x !== $y);// sama pengertiannya dengan <not identical> hanya lambangnya saja berbeda
var_dump($x > $y);//karena jika bernilai benar maka nilai x lebih besar dari pada nilai y
var_dump($x < $y);//less than
var_dump($x <= $y);// lebih besar dari atau sama dengan x=y
var_dump($x >= $y);// lebih kecil dari atau sama dengan
var_dump($x <=> $y) .'<br>';// x= 40,y=10

 ?>