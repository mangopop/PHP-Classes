<?php
require 'vendor/autoload.php';

$loader = new Twig_Loader_Filesystem($_SERVER['DOCUMENT_ROOT'].'/libTest/templates');

$twig = new Twig_Environment($loader, array(
    'cache' => false
));