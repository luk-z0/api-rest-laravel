<?php

namespace App\Services\Interfaces;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

/**
 * @template TModel of \Illuminate\Database\Eloquent\Model
 */
interface ServiceInterface
{
    /**
     * @param array $data
     * @return TModel
     */
    public function create(array $data): Model;

    /**
     * @param int $id
     * @return TModel|null
     */
    public function find(int $id): ?Model;

    /**
     * @param int $id
     * @param array $data
     * @return TModel|null
     */
    public function update(int $id, array $data): ?Model;

    public function delete(int $id): bool;

    /**
     * @return Collection<int,TModel>
     */
    public function all(): Collection;
}
