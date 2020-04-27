<?php
//プロバイダとは回線とインターネットをつなげること
//プロバイダに関するプログラムが書かれている
//Laravelアプリケーションの全体の起動処理における、初めの心臓部分のこと
namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
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
