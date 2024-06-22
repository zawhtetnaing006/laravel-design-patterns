<?php

namespace App\CQRS\Providers;

use App\CQRS\Commands\User\CreateUserCommand;
use App\CQRS\Handlers\CoreHandler;
use App\CQRS\Handlers\User\CreateUserHandler;
use Illuminate\Support\ServiceProvider;

class CQRSServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(CoreHandler::class,function($app){
            $handlerMap = config('handler_map') ? config('handler_map') : include __DIR__.'/../config/handler_map.php';
            return new CoreHandler($app,$handlerMap);
        });
    }

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/api.php');
        $this->publishes([
            __DIR__.'/../config/handler_map.php' => config_path('handler_map.php'),
        ]);
    }
}
