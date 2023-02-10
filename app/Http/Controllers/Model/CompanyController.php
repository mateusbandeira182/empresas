<?php

namespace App\Http\Controllers\Model;

use App\Http\Controllers\Controller;
use App\Http\Requests\CompanyRegisterRequest;
use App\Models\Company;
use App\Repositories\Comany\CompanyRepositoryInterface;
use App\Repositories\User\UserRepositoryInterface;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function __construct(
        private UserRepositoryInterface $userRepository,
        private CompanyRepositoryInterface $companyRepository
    )
    {}

    public function create()
    {
        $message = session('message');
        $type = session('type');
        $users = $this->userRepository->getAll();
        return view('company.create')->with('users', $users)->with('message', $message)->with('type', $type);
    }

    public function store(CompanyRegisterRequest $request)
    {
        $company = $this->companyRepository->add($request);
        $message = "A empresa '{$company->name}' foi cadastrada com sucesso";
        $type = 'success';
        return to_route('user.panel')->with('message', $message)->with('type', $type);
    }

    public function edit(Company $company)
    {
        $message = session('message');
        $type = session('type');
        $users = $this->userRepository->getAll();
        return view('company.edit')->with('company', $company)->with('message', $message)->with('type', $type)->with('users', $users);
    }

    public function update(Request $request, Company $company)
    {
        $numRows = $this->companyRepository->update($company, $request);
        if($numRows > 0) {
            return to_route('user.panel')
                ->with('message', "A empresa {$company->name} foi alterada com sucesso")
                ->with('type', 'success');
        }
        return back()->with('message', "Não foi possivel alterar a empresa")->with('type', 'danger');
    }

    public function destroy(Company $company)
    {
        $numRows = $this->companyRepository->delete($company);
        if($numRows > 0) {
            return to_route('user.panel')
                ->with('message', "Empersa {$company->name} removida com sucesso")
                ->with('type', 'success');
        }
        return back()
            ->with('message', 'Não foi possivel remover a empresa')
            ->with('type', 'danger');
    }
}
