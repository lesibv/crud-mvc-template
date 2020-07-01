<?php

define('BASE_PATH', realpath(__DIR__));

require BASE_PATH . '/core/Router.php';

Router::route();
