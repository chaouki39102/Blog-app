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
            @foreach ($posts as $post )
                @include('front.posts.components.post-item')
            @endforeach
        </div>
    </div>
</section>
<!-- ====== posts End ====== -->
