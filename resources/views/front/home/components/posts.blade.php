<!-- ====== posts Start ====== -->
<section id="posts" class="ud-posts">

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ud-section-title text-center mx-auto">
                    <span>{{ setting('posts_section_label') }}</span>
                    <h2>{{ setting('posts_section_title') }}</h2>
                    <p>{{ setting('posts_section_text') }}</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="owl-carousel owl-theme owl-loaded owl-drag">
                @foreach ($posts as $post)
                    <div class="col-lg- col-md-">
                        @include('front.posts.components.post-item')
                    </div>
                @endforeach
            </div>
        </div>
</section>
<!-- ====== posts End ====== -->
@push('js-script')
    <script>
        $(document).ready(function() {
            $(".owl-carousel").owlCarousel({
                margin: 10,
                loop: true,
                items: 4,
                center:true,
                URLhashListener: true,
                autoplayHoverPause: true,
                startPosition: 'URLHash',
                autoplay: true,
                autoplayTimeout: 5000,
                autoplayHoverPause: false,
            });
        });
    </script>
@endpush
