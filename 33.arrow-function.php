<?php
// pembuatannya lebih sederhana dari anonymous function, sama anonymous tapi beda
//perbuatanya tidak menggunakan kata kunci function, melainkan fn
//arrow f. ini kusus untuk pembuatan function sederhana

$firstName = "Roid";
$lastName = "Robih";

$sayHelloRoid = fn() => "Hello $firstName $lastName". PHP_EOL;

echo $sayHelloRoid();


?>