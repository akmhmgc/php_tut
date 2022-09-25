<?php

class Post
{
  // publicにすることで外部からアクセス可能になるっぽい（JS的？）
  public $text;
  public $likes;

  public function show()
  {
    printf('%s (%d)' . PHP_EOL, $this->text, $this->likes);
  }
}

$posts = [];
$posts[0] = new Post();
$posts[0]->text = 'hello';
$posts[0]->likes = 100;
$posts[0]->show();
