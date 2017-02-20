<?php
$_fp = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */
$t = fgets($_fp);
for($i=0;$i<$t;$i++) {
    fscanf($_fp,"%s",$s);
    $l = strlen($s);
    $even = "";
    $odd = "";
    for($j=0;$j<$l;$j++) {
        $j%2==0 ? $even.=$s[$j] : $odd.=$s[$j];
    } echo $even." ".$odd.PHP_EOL;
}
fclose($_fp);
?>