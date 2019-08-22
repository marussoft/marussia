<?php

// Настройка отладки (0 - не показывать ошибки)
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Подключаем файлы системы
require_once('config.php');
require_once(ROOT . '/vendor/autoload.php');

$config = new Marussia\ApplicationKernel\Config(); // Передать пути в конструктор

$bus = new Marussia\EventBus\Bus();

$bus->setFiltersDir($config->getConfigDir());

$bus->setLayers($config->getAppLayers());
