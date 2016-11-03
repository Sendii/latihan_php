<?php

$a = array('hello','world');
var_dump($a);
//array(2) { [0]=> string(5) "hello"
//			 [1]=> string(5) "world" }

echo "<pre>".print_r($a,1)."</pre>";
//Array
//(
//	[0] => hello
//	[1] => world
//)

$b = [];
for ($i=0;$i<1000;$i++) { 
	$b[$i] = "mobil ".($i+1);
}
echo "<pre>".print_r($b,1)."</pre>";


?>