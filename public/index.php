<?php

// Composer autoloading
include __DIR__ . '/../vendor/autoload.php';

// Create a new application
$application = new Hazaar\Application(APPLICATION_ENV, APPLICATION_PATH . '/configs/application.ini');

//Bootstrap, and run it
$application->bootstrap()->run();
