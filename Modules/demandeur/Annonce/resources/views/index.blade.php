@extends('layout.main_page')

@section('content')
<div class="container-fluid">
    <div class="page-titles">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Form</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Wizard</a></li>
        </ol>
    </div>
    <!-- row -->
    <div class="row">


        <div class="col-xl-4 col-lg-6 col-sm-6">
            <a href="annonce/babysitter" target="_blanck">
                <div class="card shadow">
                    <div class="card-body">
                        <div class="text-center">
                            <div class="profile-photo">
                                <img src="assets/images/maminou/baby-sitter-choise.png" width="80%"  class="shadow img-fluid rounded-circle" alt="">
                            </div>
                            <h3 class="mt-4 mb-1">Baby-sitter</h3>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-xl-4 col-lg-6 col-sm-6">
            <a href="annonce/AVS" target="_blanck">
                <div class="card shadow">
                    <div class="card-body">
                        <div class="text-center">
                            <div class="profile-photo">
                                <img src="assets/images/maminou/svt-choise.png" width="80%"  class="shadow img-fluid rounded-circle" alt="">
                            </div>
                            <h3 class="mt-4 mb-1">Auxiliaire de vie</h3>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-xl-4 col-lg-6 col-sm-6">
            <a href="annonce/animaux" target="_blanck">
                <div class="card shadow">
                    <div class="card-body">
                        <div class="text-center">
                            <div class="profile-photo">
                                <img src="assets/images/maminou/bet-sitter-choise.png" width="80%"  class="shadow img-fluid rounded-circle" alt="">
                            </div>
                            <h3 class="mt-4 mb-1">Garde d'animaux</h3>
                        </div>
                    </div>
                </div>
            </a>
        </div>





        {{-- <div class="col-xl-12 col-xxl-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Form step</h4>
                </div>
                <div class="card-body">

                    <img src="{{Module::asset('Annonce:ressources/assets/images/baby-sitter-choise.png')}}" />
                            <a class="form-wizard" href="https://www.google.com">
                                <div class="emial-setup">
                                    <div class="col-lg-3 col-sm-6 col-6">
                                        <div class="form-group">
                                            <label for="mailclient11" class="mailclinet mailclinet-gmail">

                                                <span class="mail-icon">
                                                    <i class="mdi mdi-google-plus" aria-hidden="true"></i>
                                                </span>
                                                <span class="mail-text">I'm using Gmail</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </a>


                </div>
            </div>
        </div> --}}
    </div>
</div>
@endsection
