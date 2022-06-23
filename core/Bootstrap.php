<?php

$app = [];

require 'core/database/Connection.php';
require 'core/database/QueryBuilder.php';
$app['config'] = require 'core/Config.php';

require 'core/Router.php';

require 'core/Request.php';

$app['database'] = new QueryBuilder(
    Connection::connect($app['config']['database'])
);
