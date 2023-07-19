<?php

namespace App\View\Components\front;

use App\Models\MenuLink as ModelsMenuLink;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class menuLink extends Component
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
        $this->menuLinks = ModelsMenuLink::where('menu_type', 'header')
            ->whereNull('parent_id')
            ->with('subMenuLinks')
            ->where('is_active', true)
            ->OrderBy('position')
            ->get();
        return view('front.components.menu-link');
    }
}
