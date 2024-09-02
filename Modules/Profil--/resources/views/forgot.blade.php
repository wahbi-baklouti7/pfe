@extends('layout.main_auth')

@section("title")
Maminou.io | Mots de passe oublié
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
                                <h4 class="text-center mb-4">Forgot Password</h4>
                                <form action="" method="GET">
                                    <input type="hidden" name="_token" value="ln5KIGIbgx1Ppl1aV8XdIfmIoBojAJuDV9Wo5Kl4">                        <div class="form-group">
                                        <label><strong>Email</strong></label>
                                        <input type="email" class="form-control" value="hello@example.com">
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary btn-block">SUBMIT</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
