<?php
$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$n);
$binary = decbin($n);
$lists = str_split($binary);
$count = 0;
$max = 0;
foreach ($lists as $list){
    if($list == 1){
        $count++;
    } else {
        if($count > $max){
            $max = $count;
        }
        $count = 0;
    }

    if($count > $max){
        $max = $count;
    }
}
echo $max;