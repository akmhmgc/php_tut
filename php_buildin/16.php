<?php

$a = [3, 4, 8];
$b = [4, 8, 12];


$merged = [...$a, ...$b];

$uniq = array_unique($merged);
print_r($uniq);
