<?php

$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$n);

$count = 0; 
$max  = 0;
$t = str_split(decbin($n));
for($i = 0; $i < count($t); $i++){
    if($t[$i] == 1){
        $count++;
    } else if ($t[$i] == 0){
        $count = 0;
        next;
    }
    if($count > $max) $max = $count;
}
echo $max;
?>