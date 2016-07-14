<?php

$routes_dir = app_path().'/Http/Routes';
$classes = [];

if(file_exists($routes_dir)){

    $dir_files = scandir($routes_dir);

    foreach (new DirectoryIterator($routes_dir) as $fileInfo) {

        if(!$fileInfo->isDot() && $fileInfo->getExtension() == 'php'){

            $classes[] = 'App\\Http\\Routes\\'. $fileInfo->getBasename('.php');
        }
    }
}

foreach($classes AS $class){

    $route = new $class();
    $route->routes();
}