<?php

use Marussia\Router\Route;

Route::get('/')->handler('Test')->action('Home')->name('home.show')->match();
