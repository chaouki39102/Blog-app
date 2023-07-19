<ul id="nav" class="navbar-nav mx-auto">
    @foreach ($menuLinks as $menu)
        @if (!blank($menu->subMenuLinks))
            <li class="nav-item nav-item-has-children">
                <a href="javascript:void(0)"> {{ $menu->title }} </a>
                <ul class="ud-submenu">
                    @foreach ($menu->subMenuLinks as $subMenu)
                        <li class="ud-submenu-item">
                            <a href="{{ $subMenu->url }}" class="ud-submenu-link">
                                {{ $subMenu->title }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </li>
        @else 
            <li class="nav-item">
                <a class="{{ $menu->url }}" href="#home">{{ $menu->title }}</a>
            </li>
        @endif
    @endforeach
</ul>
