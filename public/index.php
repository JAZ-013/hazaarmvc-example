<?php

// Check if the requested file is not this index.php file and the file actually exists
if(php_sapi_name() === 'cli-server'
    && $_SERVER['SCRIPT_FILENAME'] !== __FILE__
    && is_file(realpath(__DIR__ . parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH))))
    return false;

// Composer autoloading
include __DIR__ . '/../vendor/autoload.php';

// Create a new application
$application = new Hazaar\Application(APPLICATION_ENV);

//Bootstrap, and run it
$application->bootstrap()->run();
