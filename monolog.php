<?php

require 'vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\ChromePHPHandler;
use Monolog\Handler\StreamHandler;

ECHO $_SERVER['DOCUMENT_ROOT'];

// create a log channel
$log = new Logger('my channel');
$log->pushHandler(new StreamHandler('logs.log', Logger::DEBUG));
$log->pushHandler(new ChromePHPHandler());

// add records to the log
$log->addInfo('Adding a new user', array('username' => 'Seldaek'));
$log->addWarning('This is a warning');
$log->addError('This is an error');

echo "<h2>Monolog</h2>";