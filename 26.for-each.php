<?php
// untuk menampilkan data array satu persatu
// untuk mengakses seluruh data array secara otomatis
// mengakses data array menggunakan perulangan sangat bertele-tele maka dari itu gunakan for each


$names = ["Roid", "Robih", "Aak"];

// menggunakan forloop biasa
for ($i = 0; $i < count($names); $i++) {
    echo "Data ke $i = $names[$i]" . PHP_EOL;
}

// menggunakan for each
foreach ($names as $name) {
    echo "Data $name" . PHP_EOL;
}



?>