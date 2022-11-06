<?php
// mirip dengan while, bedanya hanya pada pengecekan kondisi
// pengecekan kondisi di while dilakukan di awal sebelum perulangan
// sedangkan do while dilakukan setelah perulangan di lakukan
$counter = 100; //yang salah

do {
    echo "ini adalah do while ke-$counter" . PHP_EOL;
    $counter++;
}while ($counter <= 10)

// pasti akan di eksekusi minimal 1 kali walaupun kondisinya salah
?>