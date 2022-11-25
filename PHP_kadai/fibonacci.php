<?php

$a=0;
$i=1;

echo $a,"\n";
echo $i,"\n";

while(1){
    $s=($a+$i);

    echo $s,"\n";
    if($s>10000) break;

    $a=$i;
    $i=$s;
}