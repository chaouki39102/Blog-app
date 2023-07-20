<?php

namespace App\View\Components\Front;

use App\Models\MenuLink as ModelsMenuLink;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class MenuLink extends Component
{
    public $menuLinks = [];
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $this->menuLinks = ModelsMenuLink::whereNull('parent_id')
            ->MenuType('header')
            ->with('subMenuLinks')
            ->get();
        return view('front.components.menu-link');
    }
}
