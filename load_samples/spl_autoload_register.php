<?php

spl_autoload_register(function($className) {
    require $className . '.php';
});

$user_spl = new User();
$user_spl->hello('鈴木');