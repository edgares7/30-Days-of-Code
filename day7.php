<?php

$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$n);
$arr_temp = fgets($handle);
$arr = explode(" ",$arr_temp);
array_walk($arr,'intval');

$array = array_reverse($arr, true);

foreach($array as $key=>$value) {
    echo $value . " ";
}

?>