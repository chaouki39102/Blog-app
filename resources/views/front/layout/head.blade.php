<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title> {{ isset($title) ? $title . ' | ' . setting('site_name') : setting('site_name') }} </title>

<!-- Primary Meta Tags -->
<meta name="title" content="{{ $meta['title'] ?? setting('site_name') }}">
<meta name="description" content="{{ $meta['description'] ?? setting('site_description') }}">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="{{ $meta['url'] ?? request()->fullUrl() }}">
<meta property="og:title" content="{{ $meta['title'] ?? setting('site_name') }}">
<meta property="og:description" content="{{ $meta['description'] ?? setting('site_description') }}">
<meta property="og:image" content="{{ $meta['logo'] ?? setting('site_logo') }}">

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="{{ $meta['url'] ?? request()->fullUrl() }}">
<meta property="twitter:title" content="{{ $meta['title'] ?? setting('site_name') }}">
<meta property="twitter:description" content="{{ $meta['description'] ?? setting('site_description') }}">
<meta property="twitter:image" content="{{ $meta['logo'] ?? setting('site_logo') }}">

<!--====== Favicon Icon ======-->
<link rel="shortcut icon" href="{{ asset('assets/images/favicon.svg') }}" type="image/svg" />

<!-- ===== All CSS files ===== -->
<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/css/animate.css') }} " />
<link rel="stylesheet" href="{{ asset('assets/css/lineicons.css') }} " />
<link rel="stylesheet" href="{{ asset('assets/css/ud-styles.css') }} " />
<link rel="stylesheet" href="{{ asset('assets/css/custom.css?v=1.0.0') }} " />
