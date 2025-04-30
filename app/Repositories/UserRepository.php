<?php

namespace App\Repositories;

use App\Models\User;
use Illuminate\Support\Collection;

class UserRepository
{
    public function all(): Collection
    {
        return User::all();
    }

    public function find(string | int $id): ?User
    {
        return User::find($id);
    }

    public function create(array $data): bool
    {
        return User::create($data);
    }
}
