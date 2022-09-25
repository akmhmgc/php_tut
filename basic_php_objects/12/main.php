<?php

declare(strict_types=1);

class Post 
{
  private string $text;
  // クラス変数の定義
  private static $count = 0;

  public function __construct($text)
  {
    $this->text = $text;
    // クラス変数のアクセス方法
    self::$count ++;
  }

  public function show()
  {
    printf('%s' . PHP_EOL, $this->text);
  }

  public static function showInfo(){
    printf('Count: %d '.PHP_EOL, self::$count);
  }
}


class SponsoredPost extends Post{

}

$p = new SponsoredPost('hello');

$p->show();
SponsoredPost::showInfo();
