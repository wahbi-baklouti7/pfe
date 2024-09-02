
<!-- ---------------------------------------------------------------------------------------------------------------- -->
 

<!-- ***************************************************************************************************************************************-->



@extends('layout.main_auth')

@section("title")
Maminou.io | Register
@endsection

@section("head")
<link href="assets/vendor/select2/css/select2.min.css" rel="stylesheet" type="text/css"/>
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
                                <div class="text-center mb-2">
                                    <a href="index.html"><img src="public/images/logo-full.png" alt=""></a>
                                </div>
                                <h4 class="text-center mb-4">Sign up your account</h4>
                            <form action="{{ route('register') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label class="mb-1"><strong>Région</strong></label>
                                    <select name="id_region" id="single-select" class="form-control" required>
                                        <option selected disabled>Select Region</option>
                                        @foreach($elements as $element)
                                            <option value="{{ $element->id }}">{{ $element->label }}</option>
                                        @endforeach
                                    </select>
                                    <x-input-error :messages="$errors->get('id_region')" class="mt-2" />

                                </div>

                                <div class="form-group">
                                    <label class="mb-1"><strong>Prénom & Nom</strong></label>
                                    <input type="text" class="form-control" placeholder="Prénom & Nom" name="fullname" :value="old('fullname')" required autofocus autocomplete="fullname" >
                                    <x-input-error :messages="$errors->get('fullname')" class="mt-2" />

                                </div>

                                <div class="form-group">
                                    <label class="mb-1"><strong>Email</strong></label>
                                    <input type="email" class="form-control" placeholder="hello@example.com" name="email" :value="old('email')" required autocomplete="username" >
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />

                                </div>

                                <div class="form-group">
                                    <label class="mb-1"><strong>Password</strong></label>
                                    <input type="password" class="form-control" name="password" required autocomplete="new-password" >
                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />

                                </div>
                                <!-- Confirm Password -->
                                <div class="form-group">
                                     <label class="mb-1" for="password_confirmation" ><strong>Confirm Password</strong></label>
                                     <input type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" >
                                     <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                </div>



                                <div class="text-center mt-3">
                                    <button type="submit" class="btn btn-primary btn-block">Sign me up</button>
                                </div>
                            </form>

                                <div class="new-account mt-2">
                                    <p>Already have an account? <a class="text-primary" href="{{ route('login') }}">sign in</a>
                                    </p>
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

@section('scripts')


<script src="assets/vendor/select2/js/select2.full.min.js"  type="text/javascript"></script>
{{-- <script src="assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"  type="text/javascript"></script> --}}



                    <script src="assets/js/plugins-init/select2-init.js" type="text/javascript"></script>
@endsection

