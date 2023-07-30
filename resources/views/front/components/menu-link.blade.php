<ul id="nav" class="navbar-nav mx-auto">
    @foreach ($menuLinks as $menu)
        @if (!blank($menu->subMenuLinks))
            <li class="nav-item nav-item-has-children">
                <a href="{{ $menu->url }}"> {{ $menu->title }} </a>
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
                <a class="ud-menu-scroll" href="{{ $menu->url }}">{{ $menu->title }}</a>
            </li>
        @endif
    @endforeach
</ul>
