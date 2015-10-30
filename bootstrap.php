<?php

// Define path to application directory
defined('APPLICATION_PATH')
    || define('APPLICATION_PATH', realpath(dirname(__FILE__) . '/../../application'));

// Define application environment
defined('APPLICATION_ENV')
    || define('APPLICATION_ENV', (getenv('APPLICATION_ENV') ? getenv('APPLICATION_ENV') : 'testing'));

/*
 * Composer makes this handy autoload.php file for us.
 * We include it in our project and we get autoloading of library classes
 *     similarly to how Zend autoloads our models and such.
 */
require_once realpath(APPLICATION_PATH . '/../vendor/autoload.php');
