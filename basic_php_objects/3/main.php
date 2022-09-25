<?php

class Post
{
  public $text;
  public $likes;

  public function show()
  {
    printf('%s (%d)' . PHP_EOL, $this->post, $this->likes);
  }
}
