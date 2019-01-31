<?php

declare(strict_types=1);

namespace App\Services\Content;

use Marussia\HttpKernel\App as App;

class Content
{
    public function show($data)
    {
        App::view('content', ['title' => 'Добро пожаловать в Marussia!', 'text' => 'Этот текст сгененирован сервисом Content']);
    }
}
