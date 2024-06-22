<?php
namespace App\CQRS\Queries\User;

class GetUserByIdQuery {
    public function __construct(private int $user_id){}

    public function getUserId()
    {
        return $this->user_id;
    }
}