<?php

function __autoload($className) {
    //渡された引数(=インスタンス化しようとしているクラス名)をもとにクラスファイルのパスを定義
    $file = dirname(__FILE__) . '/' . $className . '.php';
    require $file;
}

$user_autoload = new User();

$user_autoload->hello('佐藤');