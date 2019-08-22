<?php

use Marussia\Router\Route;

Route::get('test/{$id}/{$page}')->handler('Test')->action('index')->name('test.index')->where(['page' => '([a-z]+)', 'id' => '([0-9]+)'])->eba()->match();
