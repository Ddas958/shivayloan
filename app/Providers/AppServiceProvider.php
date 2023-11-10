<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Bank;
use App\Models\Loan;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('*', function($view)
        {
            $global_banks = Bank::all();
            $view->with('global_banks', $global_banks);
        });
        View::composer('*', function($view)
        {
            $global_loans = Loan::all();
            $view->with('global_loans', $global_loans);
        });
    }
}
