<?php

namespace App\Repositories\Interfaces;

use App\Models\User;
use \Illuminate\Database\Eloquent\Collection;

interface UserRepositoryInterface
{
    public function all(): Collection;

    public function create(array $data): ?User;

    public function update(int $id, array $data): ?User;

    public function delete(int $id): bool;

    public function find(int $id): ?User;
}
