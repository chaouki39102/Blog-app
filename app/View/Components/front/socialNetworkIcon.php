<?php

namespace App\View\Components\Front;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class socialNetworkIcon extends Component
{
    public $socialNetwork = [
        'facebook',    
        'twitter',    
        'instagram',    
        'linkedin',    
    ];
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
        return view('front.components.social-network-icon');
    }
}
