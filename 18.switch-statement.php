<?php
// switch adalah statement percabangan yang sama dengan if, namun lebih sederhana cara pembuatannya
// kondisi switch statement hanya untuk perbandingan
// agar lebih cepeat menyelesaikan percabangan
// hanya bisa mengunakan operator ==

$nilai = "E";

if($nilai == "A"){
    echo "Anda lulus dengan sangat baik".PHP_EOL;
}else if($nilai =="B" || $nilai == "C"){
    echo"anda lulus".PHP_EOL;
}else if($nilai =="B" || $nilai == "C"){
    echo"anda lulus".PHP_EOL;
}else if($nilai =="B" || $nilai == "C"){
    echo"anda lulus".PHP_EOL;
}else{
    echo"mungkin anda salah jurusan".PHP_EOL;
}

switch ($nilai){
    case "A":
        echo "Anda lulus dengan sangat baik" . PHP_EOL;
        break;
    case "B":
    case "C":
        echo "Anda lulus" . PHP_EOL;
        break;
    case "D":
        echo "Anda tidak lulus" . PHP_EOL;
        break;
    default:
        echo "Mungkin Anda salah jurusan" . PHP_EOL;
}

// swicth statement alternatif
switch ($nilai):
    case "A":
        echo "Anda lulus dengan sangat baik" . PHP_EOL;
        break;
    case "B":
    case "C":
        echo "Anda lulus" . PHP_EOL;
        break;
    case "D":
        echo "Anda tidak lulus" . PHP_EOL;
        break;
    default:
        echo "Mungkin Anda salah jurusan" . PHP_EOL;
endswitch;
?>