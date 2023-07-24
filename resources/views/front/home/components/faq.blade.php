<!-- ====== FAQ Start ====== -->
<section id="faq" class="ud-faq">
    <div class="shape">
        <img src="{{ getFile(setting('about_section_image', 'assets/images/faq/shape.svg')) }}" alt="shape" />
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ud-section-title text-center mx-auto">
                    <span>{{ setting('faq_section_label') }}</span>
                    <h2>{{ setting('faq_section_title') }}</h2>
                    <p>
                        {{ setting('faq_section_text') }}
                    </p>
                </div>
            </div>
        </div>

        <div class="row">
            @foreach ($faq as $item)
                <div class="col-lg-6">
                    <div class="ud-single-faq wow fadeInUp" data-wow-delay=".1s">
                        <div class="accordion">
                            <button class="ud-faq-btn collapsed" data-bs-toggle="collapse"
                                data-bs-target="#collapse_faq_{{$item->id}}">
                                <span class="icon flex-shrink-0">
                                    <i class="lni lni-chevron-down"></i>
                                </span>
                                <span>{{$item->title}} </span>
                            </button>
                            <div id="collapse_faq_{{$item->id}}" class="accordion-collapse collapse">
                                <div class="ud-faq-body">
                                    {{!!$item->text!!}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
<!-- ====== FAQ End ====== -->
