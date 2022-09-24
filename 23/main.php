<?php

// 関数はJSっぽい
function sum($a, $b){
  return $a + $b ;

  // return以降は実行されない
  echo 'hoge';
}

echo sum(1,3); // 
