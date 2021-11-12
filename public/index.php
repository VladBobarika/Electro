<?php

    function debug($num) {
        echo "<pre>";
            var_dump($num);
        echo "</pre>";
    }

    include '../vendor/autoload.php';

    $routes = [
        '/' => 'App\\Controllers\\SiteController@index',
        '/store' => 'App\\Controllers\\CatalogController@store',
        '/store/product' => 'App\\Controllers\\CatalogController@showProduct'
    ];

    $runAction = 'App\\Controllers\\SiteController@notFound';

    foreach ($routes as $route => $action ) {
        if ($_SERVER['REQUEST_URI'] == $route ) {
            $runAction = $action;
            break;
        }
    }

    $runAction = explode('@', $runAction);

    $controller = new $runAction[0];
    $controller-> {$runAction[1]}();