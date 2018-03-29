<?php
$handle = fopen ("php://stdin","r");
$i = 4;
$d = 4.0;
$s = "HackerRank ";

$int = intval(readline());
$dou = floatval(readline());
$str = readline();
echo $i + $int . "\n";
printf("%.1f", floatval($d + $dou));
echo "\n";
print($s . $str);
