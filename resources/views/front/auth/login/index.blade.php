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
                        <form class="ud-login-form" action="{{ route('auth.login.store')}}" method="POST">
                            @csrf
                            @include('front.components.field', [
                                'class' => 'col-md-12',
                                'type' => 'email',
                                'name' => 'email',
                                'placeholder' => 'Email/username',
                            ])
                            @include('front.components.field', [
                                'class' => 'col-md-12',
                                'type' => 'password',
                                'name' => 'password',
                                'placeholder' => 'Password',
                            ])
                            @include('front.components.field', [
                                'class' => 'col-md-12',
                                'type' => 'checkbox',
                                'name' => 'remember',
                                'placeholder' => 'Remember',
                            ])
                            <div class="ud-form-group">
                                <button type="submit" class="ud-main-btn w-100">{{ __('Login') }}</button>
                            </div>
                        </form>
                        @include('front.auth.login.social-network-login')

                        <a class="forget-pass" href="{{ route('auth.forget.index') }}">
                            {{ __('Forget Password?') }}
                        </a>
                        <p class="signup-option">
                            {{ __('Not a member yet?') }} <a href="{{ route('auth.register.index') }}"> {{ __('Register') }}
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== Login End ====== -->
@endsection
