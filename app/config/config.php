<?php
/**
 * main
 * configuration
 * file
 *
 */
require_once __DIR__ . '/../../vendor/autoload.php';

$conf = [
    'debug' => false
];
// load env specific confs
$path = realpath(__DIR__ .'/current_env/config.php');
if (empty($path)) {
    throw new \Exception('Please set your environment by symlinking your local environment under config to config/current_env');
}
if (file_exists($path)) {
    $conf = Assoc::merge($conf, require_once $path);
}
