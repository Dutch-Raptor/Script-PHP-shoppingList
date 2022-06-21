<?php

require 'core/database/Connection.php';
require 'core/database/QueryBuilder.php';
$config = require 'core/Config.php';

require 'core/Router.php';

require 'core/Request.php';

return new QueryBuilder(
    Connection::connect($config['database'])
);
