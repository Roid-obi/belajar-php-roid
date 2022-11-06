<?php
// menghentikan sebuah perulangan, tak peduli kondisinya true ato false
$counter = 1;

while (true){
    echo "Hello While Loop : " . $counter . PHP_EOL;
    $counter++;

    if($counter > 10){
        break; //gunakan ini
    }
}

?>