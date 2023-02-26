<?php

namespace App\Providers;

use App\Services\DateHelper;
use App\Services\NolinorAPI;
use App\Services\PdfCreation;
use App\Services\RequestHelper;
use App\Services\Serializer;
use App\Services\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
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
        $this->app->singleton(DateHelper::class, function ($app) {
            return new DateHelper();
        });
        $this->app->singleton(Validator::class, function ($app) {
            return new Validator();
        });
        $this->app->singleton(Serializer::class, function ($app) {
            return new Serializer();
        });
        $this->app->singleton(PdfCreation::class, function ($app) {
            return new PdfCreation();
        });

        $this->app->singleton(NolinorAPI::class, function ($app) {
            return new NolinorAPI($app->get(DateHelper::class));
        });
        $this->app->singleton(RequestHelper::class, function ($app) {
            return new RequestHelper($app->get(Request::class));
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
    }
}
