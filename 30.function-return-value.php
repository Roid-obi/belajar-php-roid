<?php
// secara default, funtion itu tidak menghasilkan value, tapi jika ingin kita bisa membuat function mengembalikan nilai
// dan didalam block funtion, untuk menghasilkan nilai tersebut, kita harus menggunakan kata kunci return, lalu diikuti dengan data yang ingin dihasilkan
// hanya bisa menghasilkan satu data di sebuah function

function sum(int $first,int $second ): int
{
    $total = $first + $second;
    return $total; //mengembalikan nilai dari si function
}

$result = sum(10, 10); //maka ini yang akan dihasilkan oleh si funtion
var_dump($result); 

$result = sum(100, 10);
var_dump($result);



//return value dengan if_else
function getFinalValue(int $value): string
{
    if ($value >= 80) {
        return "A";
    } else if ($value >= 70) {
        return "B";
    } else if ($value >= 60) {
        return "C";
    } else if ($value >= 50) {
        return "D";
    } else {
        return "E";
    }

    echo "Ups" . PHP_EOL;
}

$score = getFinalValue(90);
var_dump($score);

$score = getFinalValue(30);
var_dump($score);


// : tipe_data adalah return type declaration


?>