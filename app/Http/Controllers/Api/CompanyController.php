<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Repositories\Comany\CompanyRepositoryInterface;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function __construct(
        private CompanyRepositoryInterface $companyRepository
    )
    {}

    public function show(Company $company)
    {
        $result = $this->companyRepository->getCompany($company);
        return response()->json($result);
    }
}
