<?php

// Предварительная загрузка системы
require_once dirname('__DIR__') . '/../bootstrap.php';

// Запускаем систему
Marussia\HttpKernel\App::start();
