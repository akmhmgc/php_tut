<?php

$name = 'Apple';
$score = 32.246;

$info = "[$name][$score]";
echo $info . PHP_EOL;

// 指定したフォーマットで表示する
// %012d: 12桁で表示して、0埋めを行う
printf("[%s][%012d]", $name, $score);
