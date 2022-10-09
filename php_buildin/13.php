<?php

$scores = [40, 50, 20, 30];

$rand= array_rand($scores,2);


$rand[0] = 100;

print_r($rand);
print_r($scores);

