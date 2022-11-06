<?php
// tentukan perhitungan bangun datar di looping 10x 1. luas lingkaran 2.luas segitiga 3. keliling persegi 4. keliling lingkaran

// luas lingkaran dan keliling
function lingkaran(int $jari){
    $luasl = 3.14 * $jari **2 ;
    $kell = 2 * 3.14 * $jari ;
    for ($perulangan = 1; $perulangan <= 10 ; $perulangan++){
        echo "luas lingkaran jika jarinya $jari adalah $luasl ";
        echo "<br>" ;
    }
    for ($perulangan = 1; $perulangan <= 10 ; $perulangan++){
        echo "keliling lingkaran jika jarinya $jari adalah $kell ";
        echo "<br>" ;
    }
}
lingkaran(20);


// luas segitiga
function segitiga(int $alas, int $tinggi){
    $luass = 0.5 * $alas * $tinggi ;
    
    for ($perulangan = 1; $perulangan <= 10 ; $perulangan++){
        echo "luas segitiga jika alas $alas dan tinggi $tinggi adalah $luass ";
        echo "<br>" ;
    }
}
segitiga(30,20);


// keleling persegi
function persegi($sisi){
    $kelper = $sisi **4;
    
    for ($perulangan = 1; $perulangan <= 10 ; $perulangan++){
        echo "luas segitiga jika sisinya $sisi adalah $kelper ";
        echo "<br>" ;
    }
}
persegi(10);


