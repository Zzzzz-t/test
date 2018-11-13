<?php
namespace tls\Providers;

use Illuminate\Support\ServiceProvider;
use tls\Contracts\Test;
use tls\Services\TestName;

class TestProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(Test::class, function ($app) {
            return new TestName();
        });
    }
}

?>