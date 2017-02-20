<?php

$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$n);

fgets($handle);

for ($i = 1; $i < 11; $i++) {
    $result = $n * $i;
    echo $n . " x " . $i . " = " . $result . "\n";
}

?>