<?php
// statement jika
// if adalah salah satu kata kunci yang digunakan untuk percabangan 
// percabangan artinya kita bisa mengeksekusi kode program tertentu ketika suatu kondisi terpenuhi
// digunakan untuk mentukan percabangan
$nilai = 70;
$absen = 90;

if ($nilai >= 75 && $absen >= 75){
echo "selamat anda lulus" . PHP_EOL; 
}
// apa
if ($nilai >= 80 && $absen >= 80){
    echo "Nilai anda A". PHP_EOL;
}
else if ($nilai >= 70 && $absen >= 70){
    echo "Nilai anda B". PHP_EOL;
}
else if ($nilai >= 60 && $absen >= 60){
    echo "Nilai anda C". PHP_EOL;
}
else if ($nilai >= 50 && $absen >= 50){
    echo "Nilai anda D". PHP_EOL;
}
else {
    echo "Nilai anda E". PHP_EOL;
}
// else statement 
// block if akan dieksekusi ketika kondisi if bernilai true
// kadang kita ingin melakukan eksekusi program tertentu jika kondisi if bernilai false maka gunakan else
if ($nilai >= 75 && $absen >= 75){
    echo "selamat anda lulus" . PHP_EOL; 
    }
else{
echo "gomen, anda tidak lulus" . PHP_EOL;
}


// sytax alternatif
if ($nilai >= 80 && $absen >= 80) :
    echo "Nilai Anda A" . PHP_EOL;
elseif ($nilai >= 70 && $absen >= 70):
    echo "Nilai Anda B" . PHP_EOL;
elseif ($nilai >= 60 && $absen >= 60):
    echo "Nilai Anda C" . PHP_EOL;
elseif ($nilai >= 50 && $absen >= 50):
    echo "Nilai Anda D" . PHP_EOL;
else :
    echo "Nilai Anda E" . PHP_EOL;
endif;
// ketika menggunakan alternatif maka harus di tutup dengan endif;


?>