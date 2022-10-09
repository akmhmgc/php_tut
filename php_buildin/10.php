<?php

$scores = [30, 40, 50];

print_r($scores);

// 先頭への要素の追加
array_unshift($scores, 10);
print_r($scores);

// 後ろへの要素の追加
array_push($scores, 60);
print_r($scores);

// 先頭からの要素の取得
// 個数は指定できないっぽい
array_shift($scores);
print_r($scores);


