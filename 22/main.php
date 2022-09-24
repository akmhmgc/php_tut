<?php

// 関数はJSっぽい
function hoge($var = 'John Doe')
{
  echo $var. PHP_EOL;
}

hoge('tarou');
hoge('jiro');
hoge();
