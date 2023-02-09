<?php

namespace App\Repositories\User;

use App\Http\Requests\UserRegisterRequest;
use App\Models\User;

interface UserRepositoryInterface
{
    public function add(UserRegisterRequest $request): User;
}
