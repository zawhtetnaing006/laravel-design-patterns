<?php
namespace App\CQRS\Handlers\User;

use App\CQRS\Commands\User\CreateUserCommand;

class CreateUserHandler {
    public function handle(CreateUserCommand $createUserCommand)
    {
        return "This action create user
                \nname: ".$createUserCommand->getName().
                "\nemail: ".$createUserCommand->getEmail();
    }
}