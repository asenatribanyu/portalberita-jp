@extends('layouts.main')

@push('style')
    <link rel="stylesheet" href="{{ asset('css/login-design.css') }}">
@endpush

@section('content')
    <!-- Login -->
    <div class="main-container">
        <div class="login">
            <div class="login-form-wrapper">
                <div class="login-form">
                    <h1>{{ __('messages.Welcome') }}</h1>
                    <small>{{ __('messages.Please sign into your account') }}</small>

                    <form action="/login" method="post">
                        @csrf
                        <label class="label" for="username">{{ __('messages.Username') }}</label>
                        <input class="box" type="username" id="username" name="username"
                            placeholder={{ __('messages.Username') }} required />

                        <label class="label" for="password">{{ __('messages.Password') }}</label>
                        <input class="box" type="password" id="password" name="password"
                            placeholder={{ __('messages.Enter your password') }} required />

                        <button class="login-button" type="submit">
                            {{ __('messages.Sign-In') }}
                        </button>
                    </form>
                </div>
            </div>
            <div class="login-image">
                <img src="img/login-image.jpg" alt="" />
            </div>
        </div>
    </div>
    <!-- End of Login -->
@endsection

@push('script')
    <script src="{{ asset('js/login-script.js') }}"></script>
@endpush
