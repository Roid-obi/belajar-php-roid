<?php
// hal repot yang di php adalah mengecek apakah sebuah data ada atau tidak, dan apakah data tersebut isinya null atau bukan.
// biasanya untuk mengecek menggunakan isset($var)
// null coalesting operator menggunakan tanda ??


$data = ["action" => "nyata" ]; //apabila nyata diganti null maka $action akan muncul nothing

//null coalescing
$action = $data["action"] ?? "nothing";


// versi if nya
if (isset($data["action"])) {
    $action = $data['action'];
}
else{
    $action ='nothing';
}


echo $action;

?>