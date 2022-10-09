<?php

$d = [2020, 11, 15];

// 配列の間に何かをつける rubyのjoinみたいな感じ
print_r(implode('-', $d).PHP_EOL);

$input = '2020-11-15';

// rubyのsplitみたいな感じ
print_r(explode('-', $input));
