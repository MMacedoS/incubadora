<?php

if (!isset($_SESSION)) {
    session_start();
}

spl_autoload_register(function ($instancia) {
    $directories = [
        'Controller' => __DIR__ . '/../Controller/',
        'Admin' => __DIR__ . '/../Controller/Admin/',
        'Model' => __DIR__ . '/../Model/',
        'Rota' => __DIR__ . '/../Rota/'
    ];

    foreach ($directories as $directory) {
        $filePath = $directory . $instancia . '.php';
        if (file_exists($filePath)) {
            require $filePath;
            return;
        }
    }
});