<?php
/***
そもそも読み込む方法
- include()
- require()







***/

require 'ClassLoader.php';

$loader = new ClassLoader();

$loader->registerDir(dirname(__FILE__) . '/Controller');
$loader->registerDir(dirname(__FILE__) . '/Model');
$loader->register();


// var_dump($loader->dirs); // 登録済みのディレクトリ確認

/*
コントローラだけ読み込んでオートロードを実感
そのあとコントローラにモデル読み込みを記述してみる
*/



$post_controller = new PostsController();

var_dump($post_controller);
var_dump($post_controller->Post);






