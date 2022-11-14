# bench-inarray

この記事は[【PHP】処理速度測定方法　ところでin_arrayってほんとに遅いの？ - Qiita](https://qiita.com/okasir4444/items/2aceed75b9ae6f488d99)にインスパイヤされました。

## 実行方法

```
./composer install
php -n ./vendor/bin/phpbench run --report=consumation_of_time tests/Bench/
```

## 結果

![bench](img/result-m1mac-2.png)
