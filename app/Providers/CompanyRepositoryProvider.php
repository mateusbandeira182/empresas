<?php

namespace App\Providers;

use App\Repositories\Comany\CompanyRepositoryInterface;
use App\Repositories\Comany\Implementations\EnlouquentCompanyRepository;
use Illuminate\Support\ServiceProvider;

class CompanyRepositoryProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(CompanyRepositoryInterface::class, EnlouquentCompanyRepository::class);
    }
}
