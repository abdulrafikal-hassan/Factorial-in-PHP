<?php
// This is a basic program to find the factorial of a number.

$num = 5;
$factorial = 1;
for($x = $num; $x>=1; $x--){
  $factorial *= $x;
}
echo "factorial of $num is $factorial";

?>
