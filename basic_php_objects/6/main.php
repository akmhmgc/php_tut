<?php

class Post
{
  public $text;
  // privateにするとインスタンスから呼び出すことができない
  private $likes = 0;

  public function __construct($text)
  {
    $this->text = $text;
  }

  public function show()
  {
    printf('%s (%d)' . PHP_EOL, $this->text, $this->likes);
  }
}
