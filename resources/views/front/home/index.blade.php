@extends('front.layout.app', ['hide_banner' => true])

@section('content')
    @include('front.home.components.hero')
    @include('front.home.components.features')
    @include('front.home.components.about')
    @include('front.home.components.faq')
    @include('front.home.components.contact')
@endsection
