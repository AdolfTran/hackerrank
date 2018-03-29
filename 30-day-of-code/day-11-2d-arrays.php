<?php
$handle = fopen ("php://stdin","r");
$arr = array();
for($arr_i = 0; $arr_i < 6; $arr_i++) {
    $arr_temp = fgets($handle);
    $arr[] = explode(" ",$arr_temp);
    array_walk($arr[$arr_i],'intval');
}
Sum($arr);

function Sum($array)
{
    for($i =0; $i < 4; $i++){
        for($x = 0; $x < 4; $x++){
            $top = $array[$i][$x] + $array[$i][$x+1] + $array[$i][$x+2];
            $middle = $array[$i+1][$x+1];
            $bottom = $array[$i+2][$x]+$array[$i+2][$x+1]+$array[$i+2][$x+2];
            $total = $top + $middle + $bottom;
            if(!isset($sum)){
                $sum = $total;
            } else {
                $sum = ($total > $sum) ? $total : $sum;
            }
        }
    }
    echo $sum;
}