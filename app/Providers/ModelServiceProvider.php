<?php

namespace App\Providers;

use App\Models\MenuLink;
use App\Models\Scopes\IsActiveScope;
use App\Models\Scopes\PositionScope;
use App\Models\SectionLink;
use Illuminate\Support\ServiceProvider;

class ModelServiceProvider extends ServiceProvider
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
        // dd(app('settings'));

        if (request()->segment(1) !== 'admin') {
            SectionLink::addGlobalScope(new PositionScope);
            MenuLink::addGlobalScope(new PositionScope);
            if (request()->segment(1) !== 'admin') {
                MenuLink::addGlobalScope(new IsActiveScope);
                SectionLink::addGlobalScope(new IsActiveScope);
            }
        }
    }
}
