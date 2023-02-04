<?php
//adalah funtion tanpa nama, di PHP disebut juga dengan Closure
//biasa digunakan sebagai argument atau value di variable
//membuat kita bisa mengirim function sebagai argument di function lainnya

// dari pada capek2 bikin function terlebih dahulu, misal sederhana bisa pakai ini aja

// function yang tidak ada nama tapi disimpan di variable
$sayHello = function (string $name) { 
    echo "Hello $name" . PHP_EOL;
};

$sayHello("Roid");
$sayHello("Komi");


// penggunaan variable function
function saygubbay(string $name,$filter){
    $finalName = $filter($name); //harapannya ada function ($filter) yang ada parameter string ($name) 
    echo "Gubbay $finalName" .PHP_EOL; // hasilnya "Hello Sample Roid"
}
saygubbay("Roid", function($name): string{
    return strtoupper($name);
});


//bisa juga
$filterFuntion = function (string $name): string {
    return strtoupper($name);
};
saygubbay("RoidB", $filterFuntion); //ROIDB



// MENGAKSES VARIABLE DI LUAR CLOSURE
// defaultnya function ini tidak bisa mengakses variable yang terdapat di luar function
// jika ingin, maka perlu secara explicit menyebutkan kata kunci use lalu diikuti variable yang ingin digunakan

$firstName = "Roid";
$lastName = "Robih";

$sayHelloRoid = function () use ($firstName, $lastName) { //agar bisa maka tambahkan use()
    echo "Hello $firstName $lastName" . PHP_EOL;
};
$sayHelloRoid();
?>