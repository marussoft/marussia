<?php

declare(strict_types=1);

namespace App\Controllers\PageController\Actions;

use Marussia\HttpKernel\App as App;

class Home
{

    public function run()
    {
        App::event('Controller.Page', 'Ready');
    }

}
