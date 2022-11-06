<?php
// versi perulangan yang lebih sederhana dibandingkan dengan for loop
// while loop hanya berisi kondisi perulangan, tidak ada init statement dan post statement

$counter = 1;

while ($counter <= 10){
    echo "Hello While Loop : " . $counter . PHP_EOL;
    $counter++;
}



// syntax alternative
while ($counter <= 10) :
    echo "Hello While Loop : " . $counter . PHP_EOL;
    $counter++;
endwhile;


?>