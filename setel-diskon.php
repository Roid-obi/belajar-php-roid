<?php
// input total
$total = 1000000;

echo"total belanja = $total";
echo"/n <br>";

if($total >= 10000 && $total < 50000){
    $dis10 = $total * 10/100;
    echo "di diskon 10% = $dis10";
    echo"<br>";
    $hasil1 = $total - $dis10;
    echo"total bayar anda  $hasil1";
}

else if($total >= 50000 && $total < 100000 ){
    $dis15 = $total * 15/100;
    echo "di diskon 15% = $dis15";
    echo"<br>";
    $hasil2 = $total - $dis15;
    echo"total bayar anda  $hasil2";
}
else if($total >= 100000 && $total < 200000 ){
    $dis20 = $total * 20/100;
    echo "di diskon 20% = $dis20";
    echo"<br>";
    $hasil3 = $total - $dis20;
    echo"total bayar anda  $hasil3";
}
else if($total >= 200000 ){
    $dis30 = $total * 30/100;
    echo "di diskon 30% = $dis30";
    echo"<br>";
    $hasil4 = $total - $dis30;
    echo"total bayar anda  $hasil4";
}
else{
    echo"diskon = luwh tidak dapat diskon awikwok";
    echo"total bayar anda  $total";  
}




?>