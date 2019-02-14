<?php

use Marussia\Router\Route as Route;


// Маршруты глфвной страницы
Route::get('Page', 'Home', '(^/)');


// Маршруты авторизации
Route::post('Auth', 'Login', '(^login$)');

Route::get('Auth', 'Logout', '(^logout$)');


// Маршруты для списка и просмотра записей
Route::get('Page', 'View', '(^[a-z0-9\-]+\.html$)', [], false, true);

Route::get('?', 'Index', '(^[a-z]+$)', ['page' => 1]);

Route::get('?', 'Index', '([a-z]+)/page-([0-9]+)', ['page' => '([0-9]+$)']);

Route::get('?', 'View', '([a-z]+)/([0-9]+)-([a-z0-9\-]+).html', ['id' => '([0-9]+)']);


// Маршруты для добавления, редактирования и удаления
Route::get('?', '?', '(^[a-z]+)/([a-z]+)/([0-9]+)/([0-9]+)($)', ['id-1' => '([0-9]+)', 'id-2' => '([0-9]+)']);

Route::get('?', 'AddCat', '(^[a-z]+)/addcat/([0-9]+)', ['id' => '([0-9]+)']);

Route::get('?', 'AddCat', '(^[a-z]+)/addcat($)');

Route::get('?', 'DeleteCat', '(^[a-z]+)/deletecat/([0-9]+)', ['id' => '([0-9]+)']);

Route::get('?', '?', '(^[a-z]+)/([a-z]+)/([0-9]+)', ['id' => '([0-9]+)']);

Route::get('?', 'Add', '(^[a-z]+/add$)');


// Маршруты для вложенных страниц (категорий)
Route::get('?', 'Index', '(^[a-z0-9]+)/(([a-z0-9\-]+/)+|([a-z0-9\-_]+)+$)', ['page' => 1], true);

Route::get('?', 'View', '(^[a-z0-9]+)/(([a-z0-9\-]+/)+)([0-9]+)-([a-z0-9\-]+).html', ['id' => '([0-9]+)'], true);
