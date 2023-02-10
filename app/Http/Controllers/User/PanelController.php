<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Repositories\Comany\CompanyRepositoryInterface;
use App\Repositories\User\UserRepositoryInterface;
use Illuminate\Http\Request;

class PanelController extends Controller
{
    public function __construct(
        private CompanyRepositoryInterface $companyRepository,
        private UserRepositoryInterface $userRepository
    )
    {}

    public function index()
    {
        $message = session('message');
        $type = session('type');
        $companies = $this->companyRepository->getAll();
        $users = $this->userRepository->getAll();
        return view('user.panel')->with('companies', $companies)->with('users', $users)->with('message', $message)->with('type', $type);
    }
}
