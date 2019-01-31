<?php

declare(strict_types=1);

namespace App\Controllers\PageController;

use Marussia\HttpKernel\App as App;
use Marussia\HttpKernel\Base\Controller as Controller;

class View extends Controller
{

    public function run($route)
    {
        App::command('Service.Content', 'show', $route);
    }

}
 
