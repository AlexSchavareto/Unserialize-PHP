<?php

$a = '';

$a = file_get_contents('TOTAL_080220221515__8.txt');

$b = unserialize($a);

$j = json_encode($b['registros']);

echo $j;



