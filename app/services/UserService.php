<?php

namespace App\Services;

use App\Models\User;
use App\Repositories\Interfaces\UserRepositoryInterface;
use App\Services\Interfaces\UserServiceInterface;
use Illuminate\Support\Collection;


class UserService implements UserServiceInterface
{
    protected $repository;
    public function __construct(UserRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }
    public function create(array $data): User
    {
        return $this->repository->create($data);
    }

    public function find(int $id): ?User
    {
        return $this->repository->find($id);
    }

    public function update(int $id, array $data): ?User
    {
        return $this->repository->update($id, $data);
    }

    public function delete(int $id): bool
    {
        return $this->repository->delete($id);
    }

    public function all(): Collection
    {
        return $this->repository->all();
    }
}
