<?php
// dot(titik) operator adalah operator yang bisa kita gunakan untuk menambahkan string dengan data lain(bisa string dengan tipe data lainnya)
// lebih direkomendasikan (dot). dari pada (plus)+ 
echo "Name : " . $name . PHP_EOL;
echo "Value : " . 100 . PHP_EOL;


// konversi ke number dan sebaliknya
$valueString = (string)100; //integer jadi string
var_dump($valueString);

$valueInt = (int)"100"; //string jadi integer
var_dump($valueInt);

$valueFloat = (float)"1.01"; //string jadi float
var_dump($valueFloat);


// memngakses karakter
// string pada php seperti array karakter, dimana kita bisa mengakses data tiap karakternya menggunakan kurung siku[]
// index pertama dimulai dari 0
$name = "Roid";
echo $name[0] . PHP_EOL;
echo $name[1] . PHP_EOL;
echo $name[2] . PHP_EOL;
echo $name[3] . PHP_EOL;


// variabel parsing 
// khusus string menggunakan doble quote dan heredoc, kita bisa menggunakan karakter $ untuk mengakses variabel
// ini memudahkan kita ketika ingin menggabunkan string dengan variabel
echo "Hello " . $name . ", Selamat Belajar PHP" . PHP_EOL;
echo "Hello $name, Selamat Belajar PHP" . PHP_EOL;


// curly brace 
// menambah kurung kurawal sebelum menggunakan variabel parsing
$var = "roid";
echo "This is {$var}s" . PHP_EOL;


?>