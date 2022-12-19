<?php
/* php data types*/


/*
- String ----series of char
-Integer ---whole numbers
-Float ---Decimal numbers
-Boolean ---true or false
-array ---Special variable ,which can hold more than on e value of same data type
-Object ---A class
-NULL ---Empty variable
-Resource ---Special variable that holds a resource

*/


/* variable rules*/

/*
 -variable starts with "$"
-variable starts with letter or underscore char
-variable can not start with numbers
-variable are case - sensitive ($name and $NAME are two different variables)
*/



$name = 'Rutvik';
$age = 22;
$hasKnowPhp = false;
$cashOnHands = 233.2;
//echo "hello , my name is" .$name. " and i am " .$age." years old...";

echo "Hello , my name is ${name} and i am ${age} years old...";



$x = "5" + "5";
echo $x;

//once define will never change
define("HOST","Locat host");
echo HOST;