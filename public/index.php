<?php

header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s")." GMT");
header("Cache-Control: no-cache, must-revalidate");
header("Cache-Control: post-check=0,pre-check=0", false);
header("Cache-Control: max-age=0", false);
header("Pragma: no-cache");

echo microtime() . '<br>';
// Предварительная загрузка системы
require_once dirname('__DIR__') . '/../bootstrap.php';

// require __DIR__.'/../vendor/autoload.php';

// $app = require_once __DIR__.'/../app/app.php';

// require 'a.php';
// require 'b.php';
// require 'c.php';
// require 'd.php';

// $container = new Marussia\DependencyInjection\Container;
// $container->setClassMap([
//     'interfaceMap' => [
//         'Marussia\Router\Contracts\StorageInterface' => 'Marussia\Router\Storage'
//     ]
// ]);
// 
// 
// $a = $container->instance(a::class);
// 
// // echo 'Container instanced';
// $test2 = $container->instance(Marussia\Router\Router::class, [], false);

// $request = $container->instance(Marussia\Request\Request::class);

// echo '<pre>';
// var_dump($a);
// echo '</pre>';

$router = Marussia\Router\Router::create($_SERVER['REQUEST_URI'], $_SERVER['REQUEST_METHOD'], $_SERVER['HTTP_HOST'], 'https');
// $router = $container->instance(Marussia\Router\Router::class);
$router->setRoutesDirPath(ROOT . '/routes/');
$result = $router->startRouting();
// 
echo '<pre>';
var_dump($result);
echo '</pre>';

echo '<br>';

echo Marussia\Router\Url::get('home.show');

echo '<br>';

echo Marussia\Router\Url::get('test.index', ['id' => 2, 'page' => 'about']);

echo '<br>';

echo Marussia\Router\Url::get('home.show');
echo '<br>';
// echo '<pre>';
// print_r($test1);
// echo '</pre>';
// 
// echo '<pre>';
// print_r($request);
// echo '</pre>';
echo '<br>';
$request = Marussia\Request\Request::create($_GET, $_POST, $_COOKIE, $_FILES, $_SERVER);

echo '<pre>';
print_r($request->getUri());
echo '</pre>';

echo microtime();
