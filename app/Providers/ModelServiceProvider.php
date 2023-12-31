<?php

namespace App\Providers;

use App\Models\Faq;
use App\Models\MenuLink;
use App\Models\Post;
use App\Models\Scopes\IsActiveScope;
use App\Models\Scopes\IsPublishedScope;
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

        SectionLink::addGlobalScope(new PositionScope);
        MenuLink::addGlobalScope(new PositionScope);
        Faq::addGlobalScope(new PositionScope);
        if (request()->segment(1) !== 'admin') {
            MenuLink::addGlobalScope(new IsActiveScope);
            SectionLink::addGlobalScope(new IsActiveScope);
            Faq::addGlobalScope(new IsPublishedScope);
            Post::addGlobalScope(new IsPublishedScope);
        }
    }
}
