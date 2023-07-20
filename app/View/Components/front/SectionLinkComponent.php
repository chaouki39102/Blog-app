<?php

namespace App\View\Components\Front;

use App\Models\SectionLink;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SectionLinkComponent extends Component
{
    public $sectionLinks = [];
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
        $this->sectionLinks = SectionLink::with('menuLinks')->get();
        return view('front.components.section-link');
    }
}
