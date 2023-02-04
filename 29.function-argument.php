<?php
// function argument / parameter

/* function argument digunakan untuk mengirim sebuah nilai atau data kedalam function tersebut,
 untuk membuat function kita masukka ke dalam () di nama function */
 function nama_siswa($depan, $belakang, $keren){
    echo "nama depan = $depan, nama belakang = $belakang, nama keren = $keren";
 }

 nama_siswa("Roid","Robih","roidrrrr"); //dapat dilihat didalam
    echo "<br>";
 nama_siswa("Baal","Sara","Wangy"); //kurung ada data atau nilai
 echo "<br>";



//  Default Argument Value
// memungkinkan ketika memanggil funtion tanpa memasukkan parameternya, bisa tentukan data default nya

function sayHello($baal = "archon electro"){
    echo "<br>";
    echo "Hello $baal" . PHP_EOL;
    echo "<br>";

}

sayHello(); //jika dikosong akan muncul defaultnya
sayHello("raiden shogun"); //kalau di kirimkan maka muncul data ini 




// function type declaration
 /* digunakan untuk menentukan tipe data yang dikirim ke dalam function */

// penjumlahan
function penjumlahan(int $bilangan1, $bilangan2) //jika int maka datanya harus integer, jika tidak maka error
{ 
    $penjumlahan = $bilangan1 + $bilangan2;
    
    echo "<br>";

    echo "bilangan $bilangan1 ditambah $bilangan2 adalah $penjumlahan";
}

penjumlahan(100,200); //function dipanggil
penjumlahan(10,40); //function dipanggil





// Variable-Length Argument List
 // kemampuan dimana bisa membuat parameter yang menerima banyak value
 // secara otomatis membuat argument tersebut menjadi array, namun tidak perlu manual mengirim array ke funtion
 // hanya bisa di lakukan di argument posisi terakhr 
 // menggunakan tanda titik 3 kali sebelum nama argument
 
 function sumAll(...$values){ //jika pakai argument list tidak perlu pakai array
    $total = 0;
    foreach ( $values as $value){ 
        $total += $value;
    }
    echo "<br>";
    echo "<br>";
    echo "total " . implode("+", $values) . " = $total ";
    echo "<br>";
    echo "jumlah karakternya $value";
 }

//  $values = [1, 2, 3, 4, 5];

 sumAll(1, 2, 3, 4, 5);
 sumAll(2, 2, 3, 4, 5, 6);



 // argument ada di dalam kurung nama funtion


?>
