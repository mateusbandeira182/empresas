<?php

namespace App\Repositories\Comany;

use App\Http\Requests\CompanyRegisterRequest;
use App\Models\Company;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

interface CompanyRepositoryInterface
{
    public function add(CompanyRegisterRequest $request): Company;

    public function getAll(): Collection;

    public function update(Company $company, Request $request): int;

    public function delete(Company $company): int;

    public function deleteCompaniesByOwner(User $user): int;

    public function getCompany(Company $company);
}
