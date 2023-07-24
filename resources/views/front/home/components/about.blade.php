<!-- ====== About Start ====== -->
<section id="about" class="ud-about">
    <div class="container">
        <div class="ud-about-wrapper wow fadeInUp" data-wow-delay=".2s">
            <div class="ud-about-content-wrapper">
                <div class="ud-about-content">
                    <span class="tag">{{ setting('about_section_label') }}</span>
                    <h2>{{ setting('about_section_title') }}</h2>
                    <p>
                        {{ setting('about_section_text') }}
                    </p>

                    <a href="{{ setting('about_section_btn_url'),'!#' }}" class="ud-main-btn">
                        {{ setting('about_section_btn_title') }}</a>
                </div>
            </div>
            <div class="ud-about-image">
                <img src="{{ getFile(setting('about_section_image', 'assets/images/about/about-image.svg')) }} " alt="about-image" />
            </div>
        </div>
    </div>
</section>
<!-- ====== About End ====== -->
