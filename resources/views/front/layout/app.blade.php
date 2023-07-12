<!DOCTYPE html>
<html lang="en">

<head>
    @include('front.layout.head')
</head>

<body>
    @if (!isset($hide_banner) || !$hide_banner)
    @include('front.components.banner')
    @endif
    @include('front.components.header')
    @yield('content')
    @include('front.layout.footer')
</body>

</html>
