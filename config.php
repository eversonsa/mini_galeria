<?php

require 'enviroment.php';
define("BASE_URL", "http://galeria.dev");
global $config;
$config = array();
if(ENVIROMENT == "development"){
    $config['dbname'] = 'galeria';
    $config['host'] = 'localhost';
    $config['dbuser'] = 'root';
    $config['dbpass'] = '';
}else {
    $config['dbname'] = 'galeria';
    $config['host'] = 'localhost';
    $config['dbuser'] = 'root';
    $config['dbpass'] = '';
}

