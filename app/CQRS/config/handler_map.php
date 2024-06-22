<?php
return [
    \App\CQRS\Commands\User\CreateUserCommand::class => \App\CQRS\Handlers\User\CreateUserHandler::class,
    \App\CQRS\Queries\User\GetUserByIdQuery::class => \App\CQRS\Handlers\User\GetUserByIdHandler::class,
];
