<?php

namespace App\Http\Controllers;

use App\Services\Interfaces\UserServiceInterface;
use Illuminate\Http\JsonResponse;

class UserController extends Controller
{

    protected $users;

    public function __construct(UserServiceInterface $usersServices)
    {
        $this->users = $usersServices;
    }

    public function index(): JsonResponse
    {
        return response()->json(true);
    }
}
