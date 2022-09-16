<?php

namespace TungTT\LaravelDevTool;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelDevToolServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package->name('laravel-dev-tool');
    }

    public function packageRegistered()
    {
        if ($this->app->environment('local') || $this->app->runningInConsole()) {
            $this->app->register(\Barryvdh\Debugbar\ServiceProvider::class);           

            $this->app->register(\Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider::class);
        }
    }

    public function packageBooted()
    {

    }
}
