<?php
namespace App\CQRS\Handlers;

use Illuminate\Container\Container;

class CoreHandler {
    public function __construct(
        private Container $container, 
        private array $handlerMap){}

    public function handle($command)
    {
        $handlerClass = $this->resolveHandler($command);
        $handler = $this->container->make($handlerClass);
        return $handler->handle($command);
    }

    protected function resolveHandler($command)
    {
        $commandClass = get_class($command);

        if (!isset($this->handlerMap[$commandClass])) {
            throw new \Exception("Handler for {$commandClass} not found");
        }

        return $this->handlerMap[$commandClass];
    }
}