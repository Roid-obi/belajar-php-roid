<?php
//mekanisme sebuah function untuk memanggil function lainnya dengan diberikan argument
// sebenarnya sudah dilakukan di di materi variable function & anonymous function
// namun ada cara lain untuk implementasi callback, yaitu yaitu dengan mengunakan tipe data callable
//untuk memanggilnuya gunakan function call_user_func(callable,argument)




function sayHello(string $name, callable $filter){
    $finalName = call_user_func($filter, $name); //sebenarnya seperti variabel function $var($var);
    echo "Hello $finalName". PHP_EOL;
}

sayHello("texas", "strtoupper");
sayHello("Roid", function ($name){ return strtoupper($name);}); //pakai anonymous function


?>