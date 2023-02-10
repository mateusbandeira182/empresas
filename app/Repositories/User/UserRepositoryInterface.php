<?php

namespace App\Repositories\User;

use App\Http\Requests\UserRegisterRequest;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;

interface UserRepositoryInterface
{
    public function add(UserRegisterRequest $request): User;

    public function getAll(): Collection;
}
