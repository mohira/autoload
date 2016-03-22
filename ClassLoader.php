<?php

class ClassLoader {
    public $dirs;

    public function register() {
        spl_autoload_register(array($this, 'loadClass'));
    }

    public function registerDir($dir) {
        $this->dirs[] = $dir;
    }

    public function loadClass($class) {
        // $class = ucfirst($class);
        echo $class . '<hr>';
        foreach ($this->dirs as $dir) {
            echo $dir .'<hr>';
            $file = $dir . '/' . $class . '.php';
            echo '<hr>';
            var_dump($file);
            echo '<hr>';
            if (is_readable($file)) {
                require $file;

                return;
            }
        }
    }
}