<?php

$rate = 1.1;

function sum($a, $b)
{
  // return ($a + $b) * $rate; メソッドの外側で定義された変数は利用できない
  return ($a + $b);
}

echo sum(1, 3);
