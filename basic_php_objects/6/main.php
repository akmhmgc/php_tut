<?php

class Post
{
  // publicにすることで外部からアクセス可能になるっぽい（JS的？）
  public $text;
  public $likes;

  // コンストラクタ
  public function __construct($text,$likes)
  {
    $this->text = $text;
    $this->likes = $likes;
  }

  public function show()
  {
    printf('%s (%d)' . PHP_EOL, $this->text, $this->likes);
  }
}

$posts = [];
$posts[0] = new Post('hello', 100);
$posts[0]->show();
