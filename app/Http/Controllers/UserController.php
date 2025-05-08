<?php

namespace App\Http\Controllers;

use App\Services\Interfaces\UserServiceInterface;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class UserController extends Controller
{

    protected $users;

    public function __construct(UserServiceInterface $usersServices)
    {
        $this->users = $usersServices;
    }

    public function index(): JsonResponse
    {
        return response()->json($this->users->all());
    }

    public function create(Request $request) {}

    public function read(Request $request, int $id) {}

    public function update(Request $request, int $id) {}

    public function destroy(Request $request, int $id) {}
}
