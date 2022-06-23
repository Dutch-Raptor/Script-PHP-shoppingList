<?php

require 'core/Bootstrap.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require Router::load('routes.php')
    ->direct(Request::uri(), Request::method());
