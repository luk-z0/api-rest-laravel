<?php

namespace App\Repositories;

use App\Models\User;
use \Illuminate\Database\Eloquent\Collection;

class UserRepository implements UserRepositoryInterface
{
    protected $model;

    public function __construct(User $model)
    {
        $this->model = $model;
    }

    public function all(): Collection
    {
        return $this->model->all();
    }

    public function find(string | int $id): ?User
    {
        return $this->model->find($id);
    }

    public function create(array $data): ?User
    {
        return $this->model->create($data);
    }

    public function update(int $id, array $data): int
    {
        $user = $this->find($id);
        if ($user) {
            return $user->update($data);
        }
        return false;
    }

    public function delete(int $id): bool
    {
        $user = $this->find($id);
        if ($user) {
            return $user->delete();
        }
        return false;
    }
}
