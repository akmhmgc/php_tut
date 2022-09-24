## PHPとRubyの違い
- 四則演算
  - 少数以下も含んだ値を返す
  - 数値っぽい文字列を自動的に数値に変換して計算する

```ruby
'1' + 3
#=> TypeError: no implicit conversion of Integer into String
```

```php
echo ('20' / 4). PHP_EOL; // 5
```

- 定数
  - 定義方法は二種類ある
  - 再代入するとエラーになる（WARNINGではない）

-　false以外の真偽値
  - null
  - 0
  - ''
  - []

- 論理演算子
  - `==`と`===`が存在
     - 型が一致しているかどうか（JSと同じ）

- 関数
  - 返り値を表現する時に`return`は必須
  - Rubyと同様関数の外で定義された変数は利用することができない
  - 型指定が可能
    ```php
    function sum(int $a, int $b): int
    {
      return $a + $b;
    }
    ```

