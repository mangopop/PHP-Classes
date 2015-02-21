<?php

require 'vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

// create a log channel
$log = new Logger('name');
$log->pushHandler(new StreamHandler('logs.log', Logger::WARNING));

// add records to the log
$log->addWarning('Foo');
$log->addError('Bar');

echo "<h2>Monolog</h2>";

$maxlen = max(array_map('strlen', $ary));