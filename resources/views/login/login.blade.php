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
                    <h1>WELCOME</h1>
                    <small>Please Sign In to your Account</small>

                    <form>
                        <label class="label" for="username">Username</label>
                        <input class="box" type="username" id="username" name="username" placeholder="Enter your username"
                            required />

                        <label class="label" for="password">Password</label>
                        <input class="box" type="password" id="password" name="password"
                            placeholder="Enter your password" required />

                        <button class="login-button" type="submit">
                            SIGN IN
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
