<?php
namespace App\CQRS\Handlers\User;

use App\CQRS\Queries\User\GetUserByIdQuery;

class GetUserByIdQueryHandler {
    public function handle(GetUserByIdQuery $query)
    {
        return 'This action returns the user with id: '. $query->getUserId();
    }
}