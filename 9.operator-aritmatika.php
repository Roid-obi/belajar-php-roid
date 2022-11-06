<?php

// +$var : positif
// -$var : negatif
// $var+$var : penambahan
// $var-$var : pengurangan
// $var*$var : perkalian
// $var/$var : pembagian
// $var%$var : sisa bagi
// $var**$var : pangkat
$a = 10;
$b = 10;

$result = $a + $b;
var_dump($result);

$resultNegative = -$result;
var_dump($resultNegative);

$resultPositive = +$result;
var_dump($resultPositive);

$resultModulo = 100 % 3;
var_dump($resultModulo);
?>