<?php

$numbers = range(1, 10);

// true,falseを返す関数を渡してフィルタリングすることができる
// array_mapと引数の順番が逆なのが謎すぎる
$odds = array_filter(
  $numbers,
  fn($n) => $n % 2 === 1
);

print_r($odds);
