@extends('layout.main_page')

@section('style')

@endsection

@section('head')
<base href="http://127.0.0.1:8000" >
<link href="assets/vendor/jquery-smartwizard/dist/css/smart_wizard.min.css" rel="stylesheet" type="text/css"/>
@endsection





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








    </div>


    <!--------------------------------------------------------------------------------->



    <div class="row">
        <div class="col-xl-12 col-xxl-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Form step</h4>
                </div>
                <div class="card-body">
                    <div id="smartwizard" class="form-wizard order-create">
                        <ul class="nav nav-wizard">
                            <li><a class="nav-link" href="#wizard_Service">
                                <span>1</span>
                            </a></li>
                            <li><a class="nav-link" href="#wizard_Time">
                                <span>2</span>
                            </a></li>
                            <li><a class="nav-link" href="#wizard_Details">
                                <span>3</span>
                            </a></li>
                            <li><a class="nav-link" href="#wizard_Payment">
                                <span>4</span>
                            </a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="wizard_Service" class="tab-pane" role="tabpanel">
            <div class="container">
    <div class="row">
        <div class="col-lg-6">
            <!-- Formulaire existant -->
            <form>
                <legend><strong>Mes enfants </strong></legend>
                <div class="row">
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <div class="text-center">
                    <img src="{{ asset('build/assets/images/Nournous.jpg')}}" class="img-fluid" style="max-width: 90px;" alt="Image">
                    <p class="mt-1 mb-0" style="font-size: 0.8rem;">Moins de 3 ans </p>
                </div>
            </div>
            <div class="card-footer p-0">
                <div class="col-md-12">
                    <div class="input-group m-0">
                        <div class="input-group-btn">
                            <button class="btn btn-sm">
                                <i class="fa fa-minus-square"></i>
                            </button>
                        </div>
                        <input type="text" id="input3-group2" name="input3-group2" placeholder="Search" class="form-control">
                        <div class="input-group-btn">
                            <button class="btn btn-sm">
                                <i class="fa fa-plus-square"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <div class="text-center">
                    <img src="{{ asset('build/assets/images/Nournous.jpg')}}" class="img-fluid" style="max-width: 90px;" alt="Image">
                    <p class="mt-1 mb-0" style="font-size: 0.8rem;">Entre 3 ans et 6ans  </p>
                </div>
            </div>
            <div class="card-footer p-0">
                <div class="col-md-12">
                    <div class="input-group m-0">
                        <div class="input-group-btn">
                            <button class="btn btn-sm">
                                <i class="fa fa-minus-square"></i>
                            </button>
                        </div>
                        <input type="text" id="input3-group2" name="input3-group2" placeholder="Search" class="form-control">
                        <div class="input-group-btn">
                            <button class="btn btn-sm">
                                <i class="fa fa-plus-square"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- Deuxième carte -->
    </div>
    <div class="col-md-4">
       <div class="card">
            <div class="card-body">
                <div class="text-center">
                    <img src="{{ asset('build/assets/images/Nournous.jpg')}}" class="img-fluid" style="max-width: 90px;" alt="Image">
                    <p class="mt-1 mb-0" style="font-size: 0.8rem;">plus de 6 ans </p>
                </div>
            </div>
            <div class="card-footer p-0">
                <div class="col-md-12">
                    <div class="input-group m-0">
                        <div class="input-group-btn">
                            <button class="btn btn-sm">
                                <i class="fa fa-minus-square"></i>
                            </button>
                        </div>
                        <input type="text" id="input3-group2" name="input3-group2" placeholder="Search" class="form-control">
                        <div class="input-group-btn">
                            <button class="btn btn-sm">
                                <i class="fa fa-plus-square"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- Troisième carte -->
    </div>
</div>
<!-- Contenu du formulaire ici -->
            </form>
        </div>
        <div class="col-lg-6">
            <!-- Boutons "Assistante maternelle" -->
            <div class="row">
                   <legend><strong>Type de services</strong></legend>
                <div class="col-lg-12 mb-2">
                    <div class="form-group">
                        <button type="button" class="btn btn-outline-info w-75 btn-sm toggle-active button-toggle float-right"><i class="fa-solid fa-2xl fa-calendar-days"></i><hr />Plein temps</button>
                    </div>
                </div>
                <div class="col-lg-12 mb-2">
                    <div class="form-group">
                        <button type="button" class="btn btn-outline-info w-75 btn-sm toggle-active button-toggle float-right"><i class="fa-solid fa-2xl  fa-list-check"></i><hr />Occassionnelle</button>
                    </div>
                </div>
                <div class="col-lg-12 mb-2">
                    <div class="form-group">
                        <button type="button" class="btn btn-outline-info w-75 btn-sm toggle-active button-toggle float-right"><i class="fa-solid  fa-2xl fa-house"></i><hr />Sortie d'école</button>
                    </div>
                </div>
                <div class="col-lg-12 mb-2">
                    <div class="form-group">
                        <button type="button" class="btn btn-outline-info w-75 btn-sm toggle-active button-toggle float-right"><i class="fa-solid fa-2xl fa-baby"></i><hr />Assistante maternelle</button>
                    </div>
                </div>
                <hr/>
            </div>
        </div>
    </div>
</div>
</div>

                            <div id="wizard_Time" class="tab-pane" role="tabpanel">
                                <div class="row">
                                    <div class="col-lg-6 mb-2">
                                        <div class="form-group">
                                           <label class="text-label">À partir du:<span class="required"></span></label>
                                       <input type="date" name="da" class="form-control form-control">
                                        </div>

                                    </div>
                                    <div class="col-lg-6 mb-2">
                                        <div class="form-group">
                                            <label class="text-label">Company Email Address<span class="required">*</span></label>
                                            <input type="email" class="form-control" id="emial1" placeholder="example@example.com.com" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-2">
                                        <div class="form-group">
    <label class="text-label">Jours concernés<span class="required"></span></label>
    <div class="btn-group" role="group" aria-label="Basic example">
        <button type="button" class="btn btn-success">Lun</button>
        <button type="button" class="btn btn-success">Mar</button>
        <button type="button" class="btn btn-success">Mer</button>
        <button type="button" class="btn btn-success">Jeu</button>
        <button type="button" class="btn btn-success">Ven</button>
        <button type="button" class="btn btn-success">Sam</button>
        <button type="button" class="btn btn-success">Dim</button>
    </div>
</div>

                                    </div>
                                    <div class="col-lg-6 mb-2">
                                        <div class="form-group">
                                            <label class="text-label">Your position in Company<span class="required">*</span></label>
                                            <input type="text" name="place" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="wizard_Details" class="tab-pane" role="tabpanel">
                                <div class="row align-items-center">
                                    <div class="col-sm-4 mb-2">
                                        <span>Monday<span class="required">*</span></span>
                                    </div>
                                    <div class="col-6 col-sm-4 mb-2">
                                        <div class="form-group">
                                            <input class="form-control" value="9.00" type="number" name="input1" id="input1">
                                        </div>
                                    </div>
                                    <div class="col-6 col-sm-4 mb-2">
                                        <div class="form-group">
                                            <input class="form-control" value="6.00" type="number" name="input2" id="input2">
                                        </div>
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-sm-4 mb-2">
                                        <span>Tuesday<span class="required">*</span></span>
                                    </div>
                                    <div class="col-6 col-sm-4 mb-2">
                                        <div class="form-group">
                                            <input class="form-control" value="9.00" type="number" name="input3" id="input3">
                                        </div>
                                    </div>
                                    <div class="col-6 col-sm-4 mb-2">
                                        <div class="form-group">
                                            <input class="form-control" value="6.00" type="number" name="input4" id="input4">
                                        </div>
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-sm-4 mb-2">
                                        <span>Wednesday<span class="required">*</span></span>
                                    </div>
                                    <div class="col-6 col-sm-4 mb-2">
                                        <div class="form-group">
                                            <input class="form-control" value="9.00" type="number" name="input5" id="input5">
                                        </div>
                                    </div>
                                    <div class="col-6 col-sm-4 mb-2">
                                        <div class="form-group">
                                            <input class="form-control" value="6.00" type="number" name="input6" id="input6">
                                        </div>
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-sm-4 mb-2">
                                        <span>Thrusday<span class="required">*</span></span>
                                    </div>
                                    <div class="col-6 col-sm-4 mb-2">
                                        <div class="form-group">
                                            <input class="form-control" value="9.00" type="number" name="input7" id="input7">
                                        </div>
                                    </div>
                                    <div class="col-6 col-sm-4 mb-2">
                                        <div class="form-group">
                                            <input class="form-control" value="6.00" type="number" name="input8" id="input8">
                                        </div>
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-sm-4 mb-2">
                                        <span>Friday<span class="required">*</span></span>
                                    </div>
                                    <div class="col-6 col-sm-4 mb-2">
                                        <div class="form-group">
                                            <input class="form-control" value="9.00" type="number" name="input9" id="input9">
                                        </div>
                                    </div>
                                    <div class="col-6 col-sm-4 mb-2">
                                        <div class="form-group">
                                            <input class="form-control" value="6.00" type="number" name="input10" id="input10">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="wizard_Payment" class="tab-pane" role="tabpanel">
                                <div class="row emial-setup">
                                    <div class="col-lg-3 col-sm-6 col-6">
                                        <div class="form-group">
                                            <label for="mailclient11" class="mailclinet mailclinet-gmail">
                                                <input type="radio" name="emailclient" id="mailclient11">
                                                <span class="mail-icon">
                                                    <i class="mdi mdi-google-plus" aria-hidden="true"></i>
                                                </span>
                                                <span class="mail-text">I'm using Gmail</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6 col-6">
                                        <div class="form-group">
                                            <label for="mailclient12" class="mailclinet mailclinet-office">
                                                <input type="radio" name="emailclient" id="mailclient12">
                                                <span class="mail-icon">
                                                    <i class="mdi mdi-office" aria-hidden="true"></i>
                                                </span>
                                                <span class="mail-text">I'm using Office</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6 col-6">
                                        <div class="form-group">
                                            <label for="mailclient13" class="mailclinet mailclinet-drive">
                                                <input type="radio" name="emailclient" id="mailclient13">
                                                <span class="mail-icon">
                                                    <i class="mdi mdi-google-drive" aria-hidden="true"></i>
                                                </span>
                                                <span class="mail-text">I'm using Drive</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6 col-6">
                                        <div class="form-group">
                                            <label for="mailclient14" class="mailclinet mailclinet-another">
                                                <input type="radio" name="emailclient" id="mailclient14">
                                                <span class="mail-icon">
                                                    <i class="far fa-question-circle"
                                                        aria-hidden="true"></i>
                                                </span>
                                                <span class="mail-text">Another Service</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12">
                                        <div class="skip-email text-center">
                                            <p>Or if want skip this step entirely and setup it later</p>
                                            <a href="javascript:void(0)">Skip step</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>





    <!---------------------------------------------------------------------------------->




</div>
@endsection

@section('scripts')
{{--
<script src="public/vendor/jquery-validation/jquery.validate.min.js" type="text/javascript"></script>
<script src="public/js/plugins-init/jquery.validate-init.js" type="text/javascript"></script>
<script src="assets/vendor/jquery-steps/build/jquery.steps.min.js" type="text/javascript"></script>--}}


<script src="assets/vendor/jquery-smartwizard/dist/js/jquery.smartWizard.js" type="text/javascript"></script>



@endsection
