<!-- ====== Hero Start ====== -->
<section class="ud-hero" id="home">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ud-hero-content wow fadeInUp" data-wow-delay=".2s">
                    <h1 class="ud-hero-title">
                        {{ setting('hero_section_title') }}
                    </h1>
                    <p class="ud-hero-desc">
                        {{ setting('hero_section_text') }}
                    </p>
                    <ul class="ud-hero-buttons">
                        <li>
                            <a href="{{ setting('hero_section_btn1_url') }}" rel="nofollow noopener" target="_blank"
                                class="ud-main-btn ud-white-btn">
                                {{ setting('hero_section_btn1_title') }}
                            </a>
                        </li>
                        <li>
                            <a href="{{ setting('hero_section_btn2_url') }}" rel="nofollow noopener" target="_blank"
                                class="ud-main-btn ud-link-btn">
                                {{ setting('hero_section_btn2_title') }} <i class="lni lni-arrow-right"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="ud-hero-brands-wrapper wow fadeInUp" data-wow-delay=".3s">
                    <img src="{{ getFile(setting('hero_section_img', '/images/hero/brand.svg')) }} "
                        alt="brand" />
                </div>
                <div class="ud-hero-image wow fadeInUp" data-wow-delay=".25s">
                    <img src="assets/images/hero/hero-image.svg" alt="hero-image" />
                    <img src="assets/images/hero/dotted-shape.svg" alt="shape" class="shape shape-1" />
                    <img src="assets/images/hero/dotted-shape.svg" alt="shape" class="shape shape-2" />
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ====== Hero End ====== -->
