<?php

// 無名関数
$sum = function ($a, $b) {
  // 合計が0より小さい場合0を返すようにする
  $sum = $a + $b;
  return max([$sum, 0]);
};

echo $sum(1, 3).PHP_EOL; 
echo $sum(1, -10).PHP_EOL; 
