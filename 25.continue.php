<?php
// menghentikan perulangan saat ini dan melanjutkan perulangan berikutnya
// seperti di skip
for($counter = 1; $counter <= 100; $counter++){
    if($counter % 2 == 0 ){
        continue;
    }
    echo "Counter : $counter".PHP_EOL;

}

?>