<?php

$moreScores = [
  1, 2, 3
];

$scores = [
  90,
  40,
  ...$moreScores,
  100,
];

print_r($scores);
