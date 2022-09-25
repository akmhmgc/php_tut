<?php

declare(strict_types=1);

abstract class People{
  protected $name;

  public function __construct($name)
  {
    $this->name = $name;
  }

  abstract public function greeting();
}

class Student extends People{
  public function greeting(){
    echo "私の名前は $this->name です";
  }
}


$st = new Student('太郎');
$st->greeting();


function test(People $people){
  $people->greeting();
}

test($st);
