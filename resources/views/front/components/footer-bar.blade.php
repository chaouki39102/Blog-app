    <!-- ====== Footer Start ====== -->
    <footer class="ud-footer wow fadeInUp" data-wow-delay=".15s">
        <div class="shape shape-1">
            <img src="{{getFile('assets/images/footer/shape-1.svg') }}" alt="shape" />
        </div>
        <div class="shape shape-2">
            <img src="{{getFile('assets/images/footer/shape-2.svg') }}" alt="shape" />
        </div>
        <div class="shape shape-3">
            <img src="{{getFile('assets/images/footer/shape-3.svg') }}" alt="shape" />
        </div>
        <div class="ud-footer-widgets">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="ud-widget">
                            <a href="{{ route('home') }}" class="ud-footer-logo">
                                <img src="{{ getFile(setting('site_logo', 'assets/images/logo/logo.svg')) }}"
                                    alt="{{ setting('site_name') }}" />
                            </a>
                            <p class="ud-widget-desc">
                                {{ setting('site_description') }}
                            </p>
                            <ul class="ud-widget-socials">
                                <x-front.social-network-icon />
                            </ul>
                        </div>
                    </div>
                    <x-front.section-link-component />
                </div>
            </div>
        </div>

        <div class="ud-footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <ul class="ud-footer-bottom-left">
                            @foreach (setting('footer_pages') as $item)
                                <li>
                                    <a href="{{ data_get($item, 'url') }}">{{ data_get($item, 'title') }} </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <p class="ud-footer-bottom-right">
                            {{ setting('footer_copyright_text') }}
                            <a href="{{ setting('footer_copyright_link_url') }}"
                                rel="nofollow">{{ setting('footer_copyright_link_text') }}</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ====== Footer End ====== -->
    @livewireScripts
    </body>
