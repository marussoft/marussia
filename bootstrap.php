<?php

// Настройка отладки (0 - не показывать ошибки)
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Подключаем файлы системы
require_once('env.php');
require_once(ROOT . '/vendor/autoload.php');

// // Запускаем сессию
session_name('SID');

if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start(['cookie_httponly' => true]);
}
