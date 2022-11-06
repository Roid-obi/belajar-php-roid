<?php

// string adalah tipe data untuk mengelola teks

$waifu ="nino";

// petik satu
echo'Nama : ';
echo'Roid Robih';
echo'<br>';
echo'waifu :';
echo'$waifu'; //tidak bisa untuk variabel
echo'<br>';


//petik dua
echo"Kelas : ";
echo"\n";
echo"Jurusan : \t XI PPLG 1";
echo"<br>";
echo"waifu : $waifu";
echo"<br>";
echo"\n";

//heredoc
echo <<<Roid
Selamat belajar PHP
sekarang, kita belajar tipe data string
ini adalah cara ke-3 membuat string
bisa menggunakan heredoc

Roid;

//nowdoc
echo <<<'Roid'
Selamat belajar PHP
sekarang, kita belajar tipe data string
ini adalah cara ke-3 membuat string
bisa menggunakan heredoc
Roid;
?>