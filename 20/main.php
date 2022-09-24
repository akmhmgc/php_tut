<?php

for ($i = 1; $i <= 10; $i++) {
  // (予想通りワンライナーでいけた)
  if($i === 4) continue;

  echo $i . PHP_EOL;
}
