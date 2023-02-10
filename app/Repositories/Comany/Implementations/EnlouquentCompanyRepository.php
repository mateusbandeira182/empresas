<?php

namespace App\Repositories\Comany\Implementations;

use App\Http\Requests\CompanyRegisterRequest;
use App\Models\Company;
use App\Models\User;
use App\Repositories\Comany\CompanyRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EnlouquentCompanyRepository implements CompanyRepositoryInterface
{

    public function add(CompanyRegisterRequest $request): Company
    {
        return DB::transaction(function() use ($request) {
            return Company::create([
                'name' => $request->name,
                'alias' => $request->alias,
                'cnpj' => strval($request->cnpj),
                'email' => $request->email,
                'phone' => strval($request->phone),
                'user_id' => $request->owner,
            ]);
        });
    }

    public function getAll(): Collection
    {
        return DB::transaction(fn() => Company::all());
    }

    public function update(Company $company, Request $request): int
    {
        return DB::transaction(function() use ($company, $request) {
            return Company::where('id', $company->id)->update([
                'name' => $request->name,
                'alias' => $request->alias,
                'cnpj' => strval($request->cnpj),
                'email' => $request->email,
                'phone' => strval($request->phone),
                'user_id' => $request->owner,
            ]);
        });
    }

    public function delete(Company $company): int
    {
        return DB::transaction(function() use ($company) {
            return Company::where('id', $company->id)->delete();
        });
    }

    public function deleteCompaniesByOwner(User $user): int
    {
        return DB::transaction(fn() => Company::where('user_id', $user->id)->delete());
    }

    public function getCompany(Company $company)
    {
        return DB::transaction(function() use ($company) {
            return Company::where('id', $company->id)->with('user')->get();
        });
    }
}
