<?php
$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$n);
if($n%2 == 1 || ($n >= 6 && $n <= 20)){
    echo "Weird";
} else {
    echo "Not Weird";
}