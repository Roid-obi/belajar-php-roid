<?php
// merupakan blok kode program yang akan berjalan ketika function itu dipanggil,

// block kode program yg bs dipanggil
// function ()
// tanpa function
// lokasi function itu bebas tapi jika function beluum taubelum pernah dijalankan maka akan eror undefined function


// tanpa function
echo"saya dengan anime <br>";
echo"saya dengan anime <br>";
echo"saya dengan anime <br>";
echo"saya dengan anime <br>";

// menggunakan function 


function menu_makanan(){
    echo"menu makanan di mutuharjo enak <br>";
}

menu_makanan(); //function dapar berjalan ketika dipanggil
menu_makanan();
menu_makanan();
menu_makanan();

// function jika belum dubaca maka eror undifine
if(true){
    function kelas(){
        echo"saya belajar di kelas XI PPLG 1";
    }
}else{
    function siswa(){
        echo"nama saya miku";
    }
}
kelas(); //function kelas sudah dibaca, maka dari itu bisa dipanggoil



// di dalam function dapat di tambahkan looping atau percabangan

function keqing(){
    // fungsi looping

    for ($perulangan = 1; $perulangan <= 10 ; $perulangan++){
        echo "keqing wangy <br>";
    }
}

keqing(); //karna sudah terdapat looping kita tidak perlu mengulangmya lagi

function warna(){
    // fungsi percabangan 
    $warna = "ungu";

    if ($warna == "ungu" ){
        echo "pasti keqing";
        echo "<br>";
    }else{
        echo "dia bukan keqing";
        echo "<br>";
    }
}

warna();


// function dapat dipanggil ke dalam looping, if statement atau lainnya

// dipanggil di looping 
for ($perulangan = 1; $perulangan <= 10 ; $perulangan++){
    warna(); //function saya panggil ke dalam looping
}

echo "<br>";

// dipanggil di percabangan
if (true){
    warna(); //function dipanggil kedalam percabangan if
}else{
    keqing();
}


// function argument / parameter

/* function argument digunakan untuk mengirim sebuah nilai atau data kedalam function tersebut,
 untuk membuat function kita masukka ke dalam () di nama function */
 function nama_siswa($depan, $belakang, $keren){
    echo "nama depan = $depan, nama belakang = $belakang, nama keren = $keren";
 }

 nama_siswa("Roid","Robih","Obis"); //dapat dilihat didalam
echo "<br>";
 nama_siswa("Kujo","Sara","Wangy"); //kurung ada data atau nilai


 
// function type declaration
/* digunakan untuk menentukan tipe data yang dikirim ke dalam function */

// penjumlahan
function penjumlahan(int $bilangan1, $bilangan2){
    $penjumlahan = $bilangan1 + $bilangan2;

    echo "bilangan $bilangan1 ditambah $bilangan2 adalah $penjumlahan";
}

penjumlahan(100,600); //function dipanggil

?>