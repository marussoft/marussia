<?php

Config::register('Kernel', 'Kernel', 'Kernel');
Config::register('Kernel', 'Request', 'Kernel')->subscribe('Kernel.Kernel.Ready', 'run');
Config::register('Kernel', 'Router', 'Kernel')->subscribe('Kernel.Request.UriReady', 'run');
Config::register('Kernel', 'Controller', 'Kernel')->subscribe('Kernel.Router.RouteReady', 'runController', ['Kernel.Auth' => 'AuthReady']);
