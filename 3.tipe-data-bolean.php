<?php 

echo "benar : ";
var_dump(true);
echo "<br>";
echo "<br>";

echo "salah : ";
var_dump(false);
echo "<br>";
echo "<br>";
echo "<br>";


// contoh menentukan 2 nilai 
$bilangan1 = 1000;
$bilangan2 = 500;

if($bilangan1 > $bilangan2){
    echo"nilai $bilangan1 lebih besar dari bilangan $bilangan2";
    echo"<br>";
    var_dump($bilangan1 > $bilangan2);
}
else if($bilangan1 < $bilangan2){
    echo "nilai $bilangan1 lebih kecil dari bilangan $bilangan2";
    echo"<br>";
    var_dump($bilangan1 < $bilangan2);
}
else
echo "nilai $bilangan1 sama besarnya dengan $bilangan2";
echo "<br>";
echo"<br>";
echo"<br>";


//menentukan waifu nyata atau tidak

$sukses = "waifuku nyata";
if ($sukses=="waifuku nyata")
{
    echo "allamduillah waifuku nyata, saya sudah sukses!!";
    echo "<br>";
    var_dump($sukses=="waifuku nyata");
    echo"<br>";
}
else
echo"waifu saya belum nyata, saya harus lebih berusaha lagi SEMANGAT!! ";
echo"</br>";
var_dump($sukses=="waifuku nyata");

//menentukan waifu gwehj


?>
