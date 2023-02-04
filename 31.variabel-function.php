<?php
//memanggil sebuah funtion dari value yang terdapat di sebuah function tersebut
// cara pakai, bisa secara langsung memanggil $namaVariabel(), 
// jika pakai argument bisa gunakan $namaVariabel(argument)

function foo()
{
    echo "FOO".PHP_EOL;
}

function bar()
{
    echo "BAR".PHP_EOL;
}

$functionyangf = "foo";  //maka output nya adalah FOO
$functionyangf();

$functionyangb = "bar";  //maka output nya adalah BAR
$functionyangb();

// penggunaan variable function
function sayHello(string $name,$filter){
    $finalName = $filter($name); //harapannya ada function ($filter) yang ada parameter string ($name) 
    echo "Hello $finalName" .PHP_EOL; // hasilnya "Hello Sample Roid"
}
function sampleFunction(string $name): string {
    return "Sample $name";
}
//seakan akan mengirim function ke dalam argument
sayHello("Roid", "sampleFunction");
sayHello("Roid", "strtoupper");
sayHello("Roid", "strtolower");





?>