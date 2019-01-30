<?php

declare(strict_types=1);

namespace App\Controllers\PageController;

use Marussia\HttpKernel\App as App;
use Marussia\HttpKernel\Base\Controller as Controller;

class Home extends Controller
{

    public function run($route)
    {
//         echo 'Task';
        App::command('Service.Content', 'show', 'Page');
    }

}
