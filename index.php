<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\Hello;

$instance = new Hello();

echo $instance->say("Hello ZiZi");