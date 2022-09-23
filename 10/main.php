<?php

// 定数の定義の方法
const Name = 'takeshi';

// Name = 'taro'; syntax error

// 再代入はできない
const Name = 'jiro';
define(Name, 'jiro');

echo Name;
