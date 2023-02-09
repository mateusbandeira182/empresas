<?php

namespace App\Repositories\User\Implementations;

use App\Http\Requests\UserRegisterRequest;
use App\Models\User;
use App\Repositories\User\UserRepositoryInterface;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class EnlouquentUserRepository implements UserRepositoryInterface
{

    public function add(UserRegisterRequest $request): User
    {
        return DB::transaction(function() use ($request) {
            return User::create([
                'name' => $request->name,
                'cpf' => $request->cpf,
                'email' => $request->email,
                'password' => Hash::make($request->password)
            ]);
        });
    }
}
