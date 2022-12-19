<?php

//simple arrays

$numbers = [1,44,55];

$colors = array('green','orange', 'blue');

print_r($numbers);



//Associative array
//keys and values
$friuts = [
    1 =>'orange',
    5 =>'red',
    8 =>'blue'
];

echo $friuts[5];


$people = [

    [
        'name'=>'rutvik',
        'surname'=>'mori',
    ],
    [
        'name'=>'john',
        'surname'=>'doe',
    ],
    [
        'name'=>'jane',
        'surname'=>'doe',
    ],
];

echo $people[2]['name'];

var_dump(json_encode($people));