<?php

// 型付けの強い指定
declare(strict_types=1);

function showInfo(string $name, int $score): void
{
  echo $name . ': ' . $score . PHP_EOL;
}

showInfo('taguchi', 40);

function sum(int $a, int $b): int
{
  return $a + $b;
}

echo sum(1,2);
