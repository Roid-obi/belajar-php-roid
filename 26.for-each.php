<?php
// untuk menampilkan data array satu persatu
// untuk mengakses seluruh data array secara otomatis
// mengakses data array menggunakan perulangan sangat bertele-tele maka dari itu gunakan for each


$names = ["Roid", "Robih", "Awke"];

// menggunakan forloop biasa
for ($i = 0; $i < count($names); $i++) {
    echo "Data ke $i = $names[$i]" . PHP_EOL;
}

// menggunakan for each
foreach ($names as $name) {
    echo "Data $name" . PHP_EOL;
}

// jika butuh si index
foreach ($names as $index => $name) {
    echo "Data ke $index = $name" . PHP_EOL;
}


// menggunakan key
$person = [
    "first_name" => "Roid",
    "middle_name" => "Robih",
    "last_name" => "Aku"
];

foreach ($person as $key => $value) {
    echo "$key : $value" . PHP_EOL;
}




?>