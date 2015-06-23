<?php

// Show errors
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);

// Should be using an autoloader
require 'libs/Bootstrap.php';
require 'libs/Controller.php';
require 'libs/Model.php';
require 'libs/View.php';

$app = new Bootstrap();

?>