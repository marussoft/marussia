<?php

use Marussia\HttpKernel\Config as Config;

Config::register('App', 'Kernel', 'Kernel');

Config::register('App', 'Request', 'Kernel')->subscribe('App.Kernel.Ready', 'run');;

Config::register('App', 'Response', 'Kernel')->subscribe('App.Template.RenderReady', 'send');

Config::register('App', 'Router', 'Kernel')->subscribe('App.Request.RequestReady', 'run');

Config::register('App', 'Auth', 'Kernel')->subscribe('App.Kernel.Ready', 'init');

Config::register('App', 'Controller', 'Kernel')
    ->subscribe('App.Request.RequestReady', 'setRequest')
    ->subscribe('App.Router.RouterReady', 'runController', ['App.Auth' => 'Ready']);

Config::register('App', 'Template', 'Kernel')->subscribe('App.Controller.Ready', 'render');
