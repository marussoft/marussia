<?php

Config::register('Kernel', 'Request', 'Kernel')->subscribe('Kernel.Kernel.Ready', 'run');
Config::register('Kernel', 'Router', 'Kernel')->subscribe('Kernel.Request.UriReady', 'run');
