<?php
$_fp = fopen("php://stdin", "r");
$n = intval(readline());
for($i = 1; $i <= $n; $i++){
    $s = readline();
    $l = str_split($s);
    $newStr1 = "";
    $newStr2 = "";
    foreach($l as $k => $_l){
        if($k %2 == 0){
            $newStr1 .= $_l;
        } else {
            $newStr2 .= $_l;
        }
    }
    print($newStr1 . " " . $newStr2);
    echo "\n";
}