<?php
function penjumlahan(int $bilangan1, int $bilangan2){
    $penjumlahan = $bilangan1 + $bilangan2;

    echo "bilangan $bilangan1 ditambah $bilangan2 adalah $penjumlahan";
}



function pengurangan(int $bilangan1, int $bilangan2){
    $pengurangan = $bilangan1 - $bilangan2;

    echo "bilangan $bilangan1 dikurangi $bilangan2 adalah $pengurangan";
}

function perkalian(int $bilangan1, int $bilangan2){
    $perkalian = $bilangan1 * $bilangan2;

    echo "bilangan $bilangan1 dikurangi $bilangan2 adalah $perkalian";
}



penjumlahan(100,600); //function dipanggil
pengurangan(100,600); //function dipanggil
perkalian(100,600); //function dipanggil
?>