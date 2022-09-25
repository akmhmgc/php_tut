<?php

// 可変長引数
function sum(...$numbers) 
{
  $total = 0;
  foreach ($numbers as $value) {
    $total += $value;
  }
  return $total;
}

echo sum(1,2,3,4).PHP_EOL; //=> 10
echo sum(1,2).PHP_EOL; //=> 3
