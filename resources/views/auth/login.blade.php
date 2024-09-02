
<!-- ---------------------------------------------------------------------------------------------------------------------------------- -->


@extends('layout.main_auth')

@section("title")
Maminou.io | Authentification
@endsection

@section('content')

<div class="authincation h-100">
    <div class="container h-100">
        <div class="row justify-content-center h-100 align-items-center">
            <div class="col-md-6">
                <div class="authincation-content">
                    <div class="row no-gutters">
                        <div class="col-xl-12">
                            <div class="auth-form">
                                <div class="text-center mb-3">
                                    <a href="index.html"><img src="public/images/logo-full.png" alt=""></a>
                                </div>
                                <h4 class="text-center mb-4">Sign in your account</h4>
                            <form action="{{ route('login') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                        <label class="mb-1" for='email'><strong>Email</strong></label>
                                        <input type="email" class="form-control" placeholder="hello@example.com" id="email" name="email" :value="old('email')" required autofocus autocomplete="username" >
                                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                    </div>
                                    <div class="mb-3 position-relative">
                                        <label class="mb-1" for="dz-password"><strong>Password</strong></label>
                                        <input type="password" id="dz-password" class="form-control" value="" name="password" required autocomplete="current-password">
                                        <span class="show-pass eye">
                                            <i class="fa fa-eye-slash"></i>
                                            <i class="fa fa-eye"></i>
                                        </span>
                                

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                    </div>
                                    <div class="form-row d-flex justify-content-between flex-wrap mt-4 mb-2">
                                        <div class="form-group">
                                            <div class="form-check custom-checkbox ms-1" >
                                                <input type="checkbox" class="form-check-input"name="remember" id="remember_me">
                                                <label class="form-check-label" for="basic_checkbox_1" for="remember_me"s>Remember me</label>
                                    </label>


                                            </div>
                                        </div>

                                        @if (Route::has('password.request'))
                                        <div class="form-group">
                                            <a href="{{ route('password.request') }}">Forgot Password?</a>

                                        </div>
                                        @endif

                                        
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary btn-block">Sign Me In</button>
                                    </div>
                                </form>
                                <div class="new-account mt-3">
                                    <p>Don't have an account? <a class="text-primary" href="{{ route('register') }}">Sign up</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
