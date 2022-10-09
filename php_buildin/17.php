<?php

$prices = [100, 200, 300];

// 処理内容を第一引数に、第二引数に適用する配列
$ans = array_map(
  // function ($elm){ return $elm * 2; },
  fn ($elm) => $elm * 2, // アロー関数の利
   $prices
);

print_r($ans);
