<?php

/*
 * Application Bootstrap
 *
 * This file will be executed once the application is initialized
 * and ready to go, but before and controllers are executed.
 *
 * It is executed inside the application so $this can be used to reference the application
 *
 */

if(!$this instanceof Hazaar\Application) {

    die("Something has gone terribly wrong!");

}
