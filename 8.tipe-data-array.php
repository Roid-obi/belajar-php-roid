<?php
// kumpulan data yang saling berurutan

//array untuk menghemat banyak variabel
$values = array(10, 9, 8, 7.5);
var_dump($values);

echo "<br";
$names = ["roid", "robih", "koma"];
var_dump($names);

var_dump($names[0]);

echo "<br";

//operasi array
$names[0] = "kujo"; //mengubah data array
var_dump($names);

unset($names[1]); //menghapus data array 
var_dump($names);

$names[] = "yor"; //menambah data pada array
var_dump($names);

var_dump(count($names)); //menghitung data


//membuat map / penanda

//defaultnya angka 
$roid = [//devauldnya angka 0 dan seterusnya
    "id" => "roid",
    "nama" => "roid robih",
    "age"=> 80,
    "address" => array(
        "city" => "sukoharjo",
        "country" => "Indonesia"
    )
];
var_dump($roid);

var_dump($roid["nama"]); //mengakses array dalam variabel

var_dump($roid["address"]["city"]); //mengakses array di dalam array


?>