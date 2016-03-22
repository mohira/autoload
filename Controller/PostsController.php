<?php

class PostsController {

    public function __construct() {
        $this->Post = new Post();
    }

    public function add() {
        echo '新規記事を投稿しました<br>';
    }
}