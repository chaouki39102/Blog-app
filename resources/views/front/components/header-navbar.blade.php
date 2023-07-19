<nav class="navbar navbar-expand-lg">
    <a class="navbar-brand" href="index.html">
        <img src="assets/images/logo/logo.svg" alt="Logo" />
    </a>
    <button class="navbar-toggler">
        <span class="toggler-icon"> </span>
        <span class="toggler-icon"> </span>
        <span class="toggler-icon"> </span>
    </button>

    <div class="navbar-collapse">

        <x-front.menu-link />
    </div>
    @if (auth()->check())
        <div class="navbar-btn d-none d-sm-inline-block">
            <ul id="nav" class="navbar-nav mx-auto">
                <li class="nav-item nav-item-has-children">
                    <a href="javascript:void(0)"> {{ auth()->user()->name }} </a>
                    <ul class="ud-submenu">
                        <li class="ud-submenu-item">
                            <a href="about.html" class="ud-submenu-link">
                                {{ __('Profile') }}
                            </a>
                        </li>
                        <li class="ud-submenu-item">
                            <a href="pricing.html" class="ud-submenu-link">
                                {{ __('Logout') }}
                            </a>
                        </li>

                    </ul>
                </li>
            </ul>
        </div>
    @else
        <div class="navbar-btn d-none d-sm-inline-block">
            <a href="{{ route('auth.login.index') }}" class="ud-main-btn ud-login-btn">
                {{ __('Login') }}
            </a>
            <a class="ud-main-btn ud-white-btn" href="{{ route('auth.register.index') }}">
                {{ __('Register') }}
            </a>
        </div>
    @endif
</nav>
