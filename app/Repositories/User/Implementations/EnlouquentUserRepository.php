<?php

namespace App\Repositories\User\Implementations;

use App\Http\Requests\UserRegisterRequest;
use App\Models\User;
use App\Repositories\User\UserRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class EnlouquentUserRepository implements UserRepositoryInterface
{

    public function add(UserRegisterRequest $request): User
    {
        return DB::transaction(function() use ($request) {
            return User::create([
                'name' => $request->name,
                'cpf' => strval($request->cpf),
                'email' => $request->email,
                'password' => Hash::make($request->password)
            ]);
        });
    }

    public function getAll(): Collection
    {
        return DB::transaction(fn() => User::all());
    }


}
