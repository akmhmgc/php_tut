<?php

declare(strict_types=1);

class Post
{
  private string $text;

  public function __construct($text)
  {
    $this->text = $text;
  }

  public function show()
  {
    printf('%s' . PHP_EOL, $this->text);
  }
}

$post = new Post(1);
$post->show();
