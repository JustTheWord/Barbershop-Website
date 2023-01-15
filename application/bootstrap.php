<?php

// including database config file
require_once 'db/config.ini';
// including core files
require_once 'core/model.php';
require_once 'core/view.php';
require_once 'core/controller.php';


require_once 'core/route.php';
Route::start();