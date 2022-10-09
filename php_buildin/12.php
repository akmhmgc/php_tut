<?php

$scores = [30, 40, 50, 60, 70, 80];

// 1番目から2つの配列を削除して[1,2]に置き換える
array_splice($scores, 1 , 2, [1,2]);

print_r($scores);
