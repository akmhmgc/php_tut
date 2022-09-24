<?php

$score = 40;

if ($score > 70) {
  // ブロックという
  echo 'great!' .PHP_EOL;
} elseif($score > 50) {
  echo 'nice!' .PHP_EOL;
} else {
  echo 'bad' .PHP_EOL;
}
