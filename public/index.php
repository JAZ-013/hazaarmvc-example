<?php

// Define path to application directory
defined('APPLICATION_PATH') || define('APPLICATION_PATH', realpath(dirname(__FILE__) . '/../application'));

// Define application environment
defined('APPLICATION_ENV') || define('APPLICATION_ENV', (getenv('APPLICATION_ENV') ? getenv('APPLICATION_ENV') : 'development'));

// Ensure library/ is on include_path
set_include_path(implode(PATH_SEPARATOR, array(
    realpath(APPLICATION_PATH . '/../library'),
    get_include_path(),
)));

putenv('HOME=' . APPLICATION_PATH);

/** Hazaar_Application */
require_once 'Hazaar/Application.php';

// Create application, bootstrap, and run
$application = new Hazaar\Application(APPLICATION_ENV, APPLICATION_PATH . '/configs/application.ini');

$application->bootstrap()->run();
