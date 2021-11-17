<?php

//    $connection = new mysqli('localhost', 'root', 'root', 'electro');
//
//    if (mysqli_connect_error()) {
//        echo "NO DB CONNECTION";
//        die();
//    }

    function render($template = '') {
        $path = __DIR__ . "/../views/" . $template;
        if (file_exists($path) && is_file($path)) {
            include $path;
        } else {
            echo "View not found";
        }
    }