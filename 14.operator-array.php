<?php

// operasi union : menggabungkan array $a dan $b
$first = [
    "first_name" => "roid"
];

$last =[
    "last_name" => "robih"
];

$full = $first + $last ;
var_dump($full);

// operator equaity : true jika $a dan $b memiliki key-value sama 
// operator identity : true jika $a dan $b memiliki key-value sama dan posisi sama
// operator inequality : true jika $a dan $b tidak sama 
// operator nonidentity : true jika $a dan $b tidak identik


//percobaan 
$a =[
    "first_name" => "roid",
    "last_name" => "robih" 
];
$b =[
    "last_name" => "robih",
    "first_name" => "roid"
];

var_dump($a == $b); //operator equaity
var_dump($a === $b); //operator identity
var_dump($a != $b); //operator  inequality
var_dump($a <> $b); //operator  inequality
var_dump($a !== $b); //operator nonidentity








?>