<?php

$input = '20200320Item-A  1200';

// 文字列の置換
$new_input = substr_replace($input, 'hoge', 1 , 2) ;

echo $new_input. PHP_EOL;
