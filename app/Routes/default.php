<?php

use Marussia\Router\Route as Route;


// Маршруты глфвной страницы
Route::add('Page', 'Home', '(^/)');


// Маршруты авторизации
Route::add('Auth', 'Login', '(^login$)');

Route::add('Auth', 'Logout', '(^logout$)');


// Маршруты для списка и просмотра записей
Route::add('Page', 'View', '(^[a-z0-9\-]+\.html$)', [], false, true);

Route::add('?', 'Index', '(^[a-z]+$)', ['page' => 1]);

Route::add('?', 'Index', '([a-z]+)/page-([0-9]+)', ['page' => '([0-9]+$)']);

Route::add('?', 'View', '([a-z]+)/([0-9]+)-([a-z0-9\-]+).html', ['id' => '([0-9]+)']);


// Маршруты для добавления, редактирования и удаления
Route::add('?', '?', '(^[a-z]+)/([a-z]+)/([0-9]+)/([0-9]+)($)', ['id-1' => '([0-9]+)', 'id-2' => '([0-9]+)']);

Route::add('?', 'AddCat', '(^[a-z]+)/addcat/([0-9]+)', ['id' => '([0-9]+)']);

Route::add('?', 'AddCat', '(^[a-z]+)/addcat($)');

Route::add('?', 'DeleteCat', '(^[a-z]+)/deletecat/([0-9]+)', ['id' => '([0-9]+)']);

Route::add('?', '?', '(^[a-z]+)/([a-z]+)/([0-9]+)', ['id' => '([0-9]+)']);

Route::add('?', 'Add', '(^[a-z]+/add$)');


// Маршруты для вложенных страниц (категорий)
Route::add('?', 'Index', '(^[a-z0-9]+)/(([a-z0-9\-]+/)+|([a-z0-9\-_]+)+$)', ['page' => 1], true);

Route::add('?', 'View', '(^[a-z0-9]+)/(([a-z0-9\-]+/)+)([0-9]+)-([a-z0-9\-]+).html', ['id' => '([0-9]+)'], true);
