<?php

declare(strict_type = 1);

require_once __DIR__ .'/vendor/autoload.php';


$config = \App\Helpers\Config::get('app', 'app_name');

var_dump($config);
?>