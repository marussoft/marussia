<?php

use Marussia\Router\Route;

Route::get('/')->handler('Page')->action('Home')->name('home.show')->match();
