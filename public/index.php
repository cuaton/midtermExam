<?php

define('FCPATH', __DIR__ . DIRECTORY_SEPARATOR);

$pathsPath = FCPATH . '../app/Config/Paths.php';
require realpath($pathsPath) ?: $pathsPath;

$paths = new Config\Paths();

$bootstrap = rtrim($paths->systemDirectory, '\\/ ') . DIRECTORY_SEPARATOR . 'bootstrap.php';
$app = require realpath($bootstrap) ?: $bootstrap;

$app->run();
