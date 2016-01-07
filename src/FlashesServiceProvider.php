<?php
namespace Jasonstelzer\Flashes;

use Illuminate\Support\ServiceProvider;

class FlashesServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        /*$this->loadViewsFrom(__DIR__ . '/views', 'flashes');

        $this->publishes([
            __DIR__ . '/views' => base_path('resources/views/vendor/flashes')
        ]);*/
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        /*$this->app->bind(
            'Jasonstelzer\Flashes\SessionStore',
            'Jasonstelzer\Flashes\LaravelSessionStore'
        );*/

        $this->app->singleton('flashes', function () {
            return $this->app->make('Jasonstelzer\Flashes\FlashesNotifier');
        });
    }
}
