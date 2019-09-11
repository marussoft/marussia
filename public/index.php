<?php

// Предварительная загрузка системы
require_once dirname('__DIR__') . '/../bootstrap.php';

$config = new Marussia\ApplicationKernel\Config(ROOT, 'config');

$request = Marussia\ApplicationKernel\Request::createFromGlobals();

$kernel = Marussia\ApplicationKernel\App::initKernel($config);

$response = $kernel->handle($request);

$response->send();

$kernel->terminate();
