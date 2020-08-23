<?php

echo "My first PHP script!<br>";

$str="TY";

echo "String=".$str;


$a=10;
$b=20;

echo "<br>Addition=".($a+$b);

echo "<br>a=".$a."  b=".$b;


print "<h2>PHP is Fun!</h2>";
print "Hello world!<br>";



echo strlen("Hello world!");


echo("<br>".pi());

echo("<br>".sqrt(64));


echo("<br>".rand());


echo("<br>".rand(10, 100));


function writeMsg() {
  echo "<br>Hello world!";
}

writeMsg(); // call the function

function addNumbers($a,$b)  {
  return $a + $b;
}

echo "<br>Addition=";
echo addNumbers(1.2, 5.2);




$a = array("TY","SY","FY"); 
echo "Class " . $a[0] . ", " . $a[1] . " and " . $a[2] . ".";


$array = array( 1, 2, 3, 4, 5); 
foreach( $array as $value ) 

{ echo "Value is $value <br />"; }


?>
