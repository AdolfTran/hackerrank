<?php
$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$n);
$arr_temp = fgets($handle);
$arr = explode(" ",$arr_temp);
array_walk($arr,'intval');
$i=0;
$counter = count($arr);
$output = "";
while($i <= $counter){
    $output .= $arr[$counter]." ";
    $counter -- ;
}
echo trim($output);