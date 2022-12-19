<?php
/*Operators */

/*
< less than
> grater than
<= less than or equal to
=> Greater than or equal to
== equal to
=== identical to
!= not equal to
!== not identical to
*/


// if statement

//$age = 10;
//if($age>10){
//    echo 'you are younger';
//}
//
//
//$t = date("H");
//
//if($t<12){
//    echo 'GOOD MORNING';
//}elseif ($t>12 && $t<17){
//    echo 'GOOD AFTERNOON';
//}
//else{
//    echo 'GOOD EVENING';
//}
//echo $t;



//$post = ['first post'];
//
//if(empty($post)){
//    echo 'post is  empty';
//}
//else{
//    echo $post[0];
//}
//
//echo !empty($post) ?   $post[0]: 'post is  empty';
//echo !empty($post) ?   $post[0]: null;


$favColor = 'blue';

switch ($favColor){
    case 'red':
        echo 'your fav color is red';
        break;

    case 'blue':
        echo 'your fav color is blue';
        break;
    case 'green':
        echo 'your fav color is green';
        break;
    default:
        echo 'your favourite color is not red blue or green';
}
