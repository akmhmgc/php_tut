<?php

// データの型を調べる
echo var_dump(10);
echo var_dump('hello');

// データの型を変換する
echo (int) '10'. PHP_EOL;
echo (int) true. PHP_EOL; // 1
echo (int) false. PHP_EOL; // 0
echo ((string)999). PHP_EOL; // 999
