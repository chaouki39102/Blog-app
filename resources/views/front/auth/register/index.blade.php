@extends('front.layout.app')

@section('content')
    <!-- ====== Login Start ====== -->
    <section class="ud-login">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ud-login-wrapper">
                        <div class="ud-login-logo">
                            <img src="{{ asset('assets/images/logo/logo-2.svg') }}" alt="logo" />
                        </div>
                        <form class="ud-login-form">
                            <div class="row">
                                @include('front.components.field', [
                                    'class' => 'col-md-6',
                                    'type' => 'name',
                                    'name' => 'name',
                                    'placeholder' => __('Name'),
                                ])
                                @include('front.components.field', [
                                    'class' => 'col-md-6',
                                    'type' => 'email',
                                    'name' => 'email',
                                    'placeholder' => __('Email'),
                                ])
                                @include('front.components.field', [
                                    'class' => 'col-md-6',
                                    'type' => 'select',
                                    'name' => 'gender',
                                    'options' => ['male' => __('Male'),'female' => __('Female')],
                                    'placeholder' => __('Gender'),
                                ])
                                @include('front.components.field', [
                                    'class' => 'col-md-6',
                                    'type' => 'text',
                                    'name' => 'job_title',
                                    'placeholder' => __('Job Title'),
                                ])
                                @include('front.components.field', [
                                    'class' => 'col-md-6',
                                    'type' => 'textarea',
                                    'name' => 'bio',
                                    'placeholder' => __('Bio'),
                                ])
                                @include('front.components.field', [
                                    'class' => 'col-md-6',
                                    'type' => 'password',
                                    'name' => 'password',
                                    'placeholder' => __('Password'),
                                ])
                                @include('front.components.field', [
                                    'class' => 'col-md-6',
                                    'type' => 'password',
                                    'name' => 'password_confirmation',
                                    'placeholder' => __('Password_confirmation'),
                                ])
                            </div>
                            <div class="ud-form-group">
                                <button type="submit" class="ud-main-btn w-100">{{ __('Login') }}</button>
                            </div>
                        </form>

                        @include('front.auth.login.social-network-login')

                        <a class="forget-pass" href="{{ route('auth.forget') }}">
                            {{ __('Forget Password?') }}
                        </a>
                        <p class="signup-option">
                            {{ __('Not a member yet?') }} <a href="{{ route('auth.register') }}"> {{ __('Sign Up') }} </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== Login End ====== -->
@endsection
