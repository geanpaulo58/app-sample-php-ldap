<?php

spl_autoload_register(function ($class){
    $appDir = dirname(dirname(__DIR__));
    
    $arquivo = $appDir . DIRECTORY_SEPARATOR . str_replace('\\', '/', $class) . '.php';
    
    if(file_exists($arquivo)){
        require "{$arquivo}";
    }
});