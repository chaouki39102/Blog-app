@extends('front.layout.app', ['hide_banner' => true])

@section('content')
    @includeWhen(setting('hero_section_enable'), 'front.home.components.hero')
    @includeWhen(setting('about_section_enable'), 'front.home.components.about')
    @includeWhen(setting('features_section_enable'), 'front.home.components.features')
    @includeWhen(setting('posts_section_enable'), 'front.home.components.posts')
    @includeWhen(setting('faq_section_enable'), 'front.home.components.faq')
    @includeWhen(setting('contactus_section_enable'), 'front.home.components.contact')
@endsection
