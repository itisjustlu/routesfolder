<?php

$routes_dir = app_path().'/Routes';
$classes = [];

if(file_exists($routes_dir)){

    $dir_files = scandir($routes_dir);

    foreach (new DirectoryIterator($routes_dir) as $fileInfo) {

        if(!$fileInfo->isDot() && $fileInfo->getExtension() == 'php'){

            $classes[] = 'App\\Routes\\'. $fileInfo->getBasename('.php');
        }
    }
}

foreach($classes AS $class){
    
    $class::load();
}