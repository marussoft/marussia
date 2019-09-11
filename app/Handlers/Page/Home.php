<?php

declare(strict_types=1);

namespace App\Handlers\Page;

use Marussia\ApplicationKernel\App;

class Home
{
    public function run()
    {
        App::view('page.home', ['hello' => 'Hello, World!']);
    }
}
