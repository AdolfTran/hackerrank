<?php
$handle = fopen ("php://stdin", "r");
function factorial($n) {
    // Complete this function
    if($n > 1){
        return $n * factorial($n-1);
    } else {
        return $n;
    }
}

fscanf($handle, "%i",$n);
$result = factorial($n);
echo $result . "\n";