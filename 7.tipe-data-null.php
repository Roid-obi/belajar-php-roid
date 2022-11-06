<?php
// DATA KOSONG

// kosong di representasikan dengan data null
//tipe data null menggambarkan variabel yang tanpa nilai
$name = "Jean";
$name = null;  //menghilangkan nilai tanpa menghilangkan variabel

$age ="17";



echo "Name :";
echo $name;
echo "<br>";

echo "Age :";
echo $age;
echo "<br>";
echo "<br>";

echo "Is name null?";
var_dump (is_null($name)); //untuk mengecek apakah variabelnya 0/null atau tudak. jika ada maka true, jika tidak ada variabel null maka false
echo "<br>";

echo "Is Age null?";
var_dump (is_null($age)); //false karna tidak ada variable null
echo "<br>";
echo "<br>";


$isnull = is_null($age);
var_dump($isnull); 


// menghapus variabel
$contoh = "roid ";
unset($contoh); // jika mau variabelnya di hilangkan  
echo"<br>";

$contoh = "roid robih";
$contoh= null;


//mengecek apakah variabelnya ada
var_dump(isset($contoh)); 

?>

