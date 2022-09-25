<?php

$scores = [12,3,4,5];
 
echo $scores[0]; //=> 12

// マイナスのインデックス、範囲外のインデックスだとNULLを返す
echo $scores[-1]; //=> NULL
echo $scores[1000]; //=> NULL
