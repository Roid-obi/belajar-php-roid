<?php
// namanya looping
// for adalah salah satu kundi yang bisa digunakan untuk melakukan perulangan 
// blok kode yang terdapat di dalam for akan selalu diulangi selama kondisi for terpenihi
// mirip dengan if-else, bedanya if hanya sekali tapi kalau for dilakukan terus menerus
//  for(init statement;kondisi;post statement){ //blok perulangan }


 for( $counter = 1 ; $counter <= 10 ; $counter++ ) {
    echo" ini adalah for loop ke-$counter".PHP_EOL;
 }

 for( $counter = 10 ; $counter >= 1 ; $counter-- ) {
   echo" ini adalah for loop ke-$counter".PHP_EOL;
}

echo"<br>";


//syntax alternatif
for( $counter = 1; $counter <= 10 ; $counter++ ) :
   echo" ini adalah for loop ke-$counter".PHP_EOL;
endfor;

for( $counter = 10 ; $counter <= 1 ; $counter++ ) :
   echo" ini adalah for loop ke-$counter".PHP_EOL;
endfor;



//  apabila kondisinya kosong maka nilainya akan true
?>