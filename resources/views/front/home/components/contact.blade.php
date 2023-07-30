<!-- ====== Contact Start ====== -->
<section id="contact" class="ud-contact">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-8 col-lg-7">
                <div class="ud-contact-content-wrapper">
                    <div class="ud-contact-title">
                        <span>{{ setting('contactus_section_label') }}</span>
                        <h2>
                            {{ setting('contactus_section_title') }}
                        </h2>
                    </div>
                    <div class="ud-contact-info-wrapper">
                        @if (setting('contactus_section_location_title'))
                            <div class="ud-single-info">
                                <div class="ud-info-icon">
                                    <i class="{{ setting('contactus_section_location_icon') }}"></i>
                                </div>
                                <div class="ud-info-meta">
                                    <h5>{{ setting('contactus_section_location_title') }}</h5>
                                    <p>{{ setting('contactus_section_location_text') }}</p>
                                </div>
                            </div>
                        @endif

                        @if (setting('contactus_section_email_title'))
                            <div class="ud-single-info">
                                <div class="ud-info-icon">
                                    <i class="{{ setting('contactus_section_email_icon') }}"></i>
                                </div>
                                <div class="ud-info-meta">
                                    <h5>{{ setting('contactus_section_email_title') }}</h5>
                                    <p>{{ setting('contactus_section_email_text') }}</p>
                                </div>
                            </div>
                        @endif

                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-5">
                <div class="ud-contact-form-wrapper wow fadeInUp" data-wow-delay=".2s">
                    <h3 class="ud-contact-form-title">{{__('Send us a Message')}}</h3>
                    <form class="ud-contact-form">
                        <div class="ud-form-group">
                            <label for="fullName">{{__('Full Name*')}}</label>
                            <input type="text" name="fullName" placeholder="Adam Gelius" />
                        </div>
                        <div class="ud-form-group">
                            <label for="email">{{__('Email*')}}</label>
                            <input type="email" name="email" placeholder="example@yourmail.com" />
                        </div>
                        <div class="ud-form-group">
                            <label for="phone">{{__('Phone*')}}</label>
                            <input type="text" name="phone" placeholder="+885 1254 5211 552" />
                        </div>
                        <div class="ud-form-group">
                            <label for="message">{{__('Message*')}}</label>
                            <textarea name="message" rows="1" placeholder="{{__('type your message here')}}"></textarea>
                        </div>
                        <div class="ud-form-group mb-0">
                            <button type="submit" class="ud-main-btn">
                                {{__('Send Message')}}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ====== Contact End ====== -->
