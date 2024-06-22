<?php
namespace App\CQRS\Http\Controllers;

use App\CQRS\Commands\User\CreateUserCommand;
use App\CQRS\Handlers\CoreHandler;
use App\CQRS\Queries\User\GetUserByIdQuery;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller{

    public function __construct(private CoreHandler $coreHandler)
    {
        
    }

    public function create(Request $request)
    {
        // TODO: validate request
        $command = new CreateUserCommand($request->get('name'),$request->get('email'));
        return $this->coreHandler->handle($command);
    }

    public function getUserById(int $user_id) 
    {
        // TODO: validate user_id
        $query = new GetUserByIdQuery($user_id);
        return $this->coreHandler->handle($query);
    }
}