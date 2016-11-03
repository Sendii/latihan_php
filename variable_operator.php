<?php
/*
variable berisi string
*/
$a = 'Megalodon';
//echo $a;
//variable berisi angka
//atau desimal
$d = 1.2;
$e = 1;
//echo $d;
//echo $e;


//menggabungkan 2 variable
$x = "Hello";
$w = "world";
$z = $x.$w;
//echo $z; //Hello World

$m = "Test 1";
//echo $m. "<br>";//Test 1
$m .= "Test 2";
//echo $m. "<br>";//Test 1Test 2
$m .= "Test 3";
//echo $m;//Test 1Test 2Test 3

$q = 10;
$v = 3;
$ka = $q*$v;
$ba = $q/$v;
$ta = $q+$v;
$ku = $q-$v;
$mod = $q%$v;
// echo $ba."<br>";
// echo $ka."<br>";
// echo $ta."<br>";
// echo $ku."<br>";
// echo $mod."<br>";

//tipe data
$s = "Hello"; // <- teks
$i = 1;//intergar/angka
$d = 1.2;//double/desimal
$b = true;//boolean
$arr = array();//array

var_dump($s);
var_dump($i);
var_dump($d);
var_dump($b);
var_dump($arr);





?>