<?php
// terkadang saya melakukan pengecekan kondisi menggunakan if statement, lalu jika benar saya ingin bemberi nilai terhadap variabel dengan nilai x dan jika salah dengan nilai y.
// penggunaan if statement pada kasus ini bisa di persingkat menggunakan tenary operator.
// kata kuncinya adalah ? dan :
$gender = "PRIA";

$hi = $gender == "PRIA" ? "Hi bro!" : "Hi nona!";
echo $hi . PHP_EOL;


// bentuk if nya
if($gender == "PRIA"){
    $hi = "Hi bro";
}
else{
    $hi = "Hi nona";
}
echo $hi . PHP_EOL;
?>
