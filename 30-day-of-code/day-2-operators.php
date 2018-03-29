<?php
$handle = fopen ("php://stdin", "r");
fscanf($handle, "%lf",$meal_cost);
fscanf($handle, "%i",$tip_percent);
fscanf($handle, "%i",$tax_percent);
$tip = $meal_cost * $tip_percent / 100;
$tax = $meal_cost * $tax_percent / 100;
$count = round($meal_cost + $tip + $tax);
echo "The total meal cost is ".$count." dollars.";
