<!-- ====== Features Start ====== -->
<section id="features" class="ud-features">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ud-section-title">
                    <span>{{ setting('features_section_label') }}</span>
                    <h2>{{ setting('features_section_title') }}</h2>
                    <p>
                        {{ setting('features_section_text') }}
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach (setting('features_section_cards') as $item)
                <div class="col-xl-3 col-lg-3 col-sm-6">
                    <div class="ud-single-feature wow fadeInUp" data-wow-delay=".1s">
                        <div class="ud-feature-icon">
                            <i class="lni lni-gift"></i>
                        </div>
                        <div class="ud-feature-content">
                            <h3 class="ud-feature-title"> {{ data_get($item, 'title') }} </h3>
                            <p class="ud-feature-desc"> {{ data_get($item, 'text') }}  </p>
                            <a href=" {{ data_get($item, 'btn_url') }}" class="ud-feature-link">
                                {{ data_get($item, 'btn_text') }}
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</section>
<!-- ====== Features End ====== -->
