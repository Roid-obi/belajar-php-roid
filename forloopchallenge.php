<?php
for($i = 1; $i <= 100; $i++) {
    $pangkat = $i ** 2;
    if($i % 2 == 0) {
        echo "$i adalah Bilangan Genap | $i dipangkat 2 adalah $pangkat ";
        echo"<br>";
    }
    else{
        echo "$i adalah Bilangan Ganjil | $i dipangkat 2 adalah $pangkat "; 
        echo"<br>";

    }
}
?>