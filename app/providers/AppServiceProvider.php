<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Reponsitory\User\Impl\UserReponsitory;
use App\Reponsitory\User\IUserReponsitory;
use App\Model\User;
use Illuminate\Database\DatabaseManager;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(IUserReponsitory::class, UserReponsitory::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
