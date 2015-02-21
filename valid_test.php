<?php
require 'vendor/autoload.php';

use Respect\Validation\Validator as v;

$number = 123;
echo v::numeric()->validate($number); //true