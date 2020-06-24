<?php

namespace SoluzioneSoftware\SEO;

use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class ServiceProvider extends BaseServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        $this->bootConfig();
        $this->bootMigrations();
        $this->bootViews();
    }

    private function bootConfig()
    {
        $this->publishes([
            __DIR__.'/../config/seo.php' => App::configPath('seo.php'),
        ], ['config', 'seo', 'seo-config']);

        $this->mergeConfigFrom(__DIR__.'/../config/seo.php', 'seo');
    }

    private function bootMigrations()
    {
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations/2020_01_01_000000_create_seo_data_table.php');
    }

    private function bootViews()
    {
        $this->publishes([
            __DIR__.'/../resources/views' => App::resourcePath('views/vendor/seo'),
        ], ['views', 'seo', 'seo-views']);

        $this->loadViewsFrom(__DIR__.'/../resources/views', 'seo');
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        $this->app->singleton('seo.manager', function () {
            return new SEOManager(new MetaManager(), new OpenGraphManager(), new TwitterManager());
        });
    }
}
