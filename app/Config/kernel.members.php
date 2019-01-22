<?php

use Marussia\HttpKernel\Config as Config;

Config::register('Kernel', 'Kernel', 'Kernel');

Config::register('Kernel', 'Request', 'Kernel')->subscribe('Kernel.Kernel.Ready', 'run');

Config::register('Kernel', 'Router', 'Kernel')->subscribe('Kernel.Request.RequestReady', 'run');

Config::register('Kernel', 'Auth', 'Kernel')->subscribe('Kernel.Kernel.Ready', 'init');

Config::register('Kernel', 'Controller', 'Kernel')
    ->subscribe('Kernel.Request.RequestReady', 'setRequest')
    ->subscribe('Kernel.Router.RouterReady', 'runController', ['Kernel.Auth' => 'Ready']);
