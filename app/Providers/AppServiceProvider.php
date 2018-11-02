<?php

namespace App\Providers;

use App\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(){
      view()->composer('layout', function ($view){
        $view->with('categories', Category::all());
      });
      view()->composer('admin.layout', function ($view){
        $view->with('auth', Auth::user());
      });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
