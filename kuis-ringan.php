<?php

function nilai_akhir(int $keterampilan, int $sikap, int $project){
    if ($keterampilan >= 90 && $sikap >= 90 && $project >= 90 ){
        for ($perulangan = 1; $perulangan <= 10 ; $perulangan++){
            echo '<p><mark style="background-color: green ;"> panda lulus dengan nilai A</mark> <p>';
        }
    }
    else if ($keterampilan >= 80 && $sikap >= 80 && $project >= 80 ){
        for ($perulangan = 1; $perulangan <= 10 ; $perulangan++){
            echo '<p><mark style="background-color: orange ;"> panda lulus dengan nilai B</mark> <p>';
        }
    }
    else if ($keterampilan >= 75 && $sikap >= 75 && $project >= 75 ){
        for ($perulangan = 1; $perulangan <= 10 ; $perulangan++){
            echo '<p><mark style="background-color: yellow ;"> panda lulus dengan nilai C</mark> <p>';
        }
    }
    else {
        for ($perulangan = 1; $perulangan <= 10 ; $perulangan++){
            echo '<p><mark style="background-color: red ;"> anda tidak lulus</mark> <p>';
        }
    }

}
nilai_akhir(90,90,90);
nilai_akhir(80,80,80);
nilai_akhir(75,75,75);
nilai_akhir(46,46,46);

// 1. IF Dimasukan kedalam FOR
// 2. FOR Dimasukan kedalam IF


?>