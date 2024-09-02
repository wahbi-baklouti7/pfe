@extends('layout.main_page')

@section('style')

@endsection

@section('head')
<base href="http://127.0.0.1:8000">
<link href="assets/vendor/jquery-smartwizard/dist/css/smart_wizard.min.css" rel="stylesheet" type="text/css" />
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
                <div class="card-body">
                    <div id="smartwizard" class="form-wizard order-create">
                        <ul class="nav nav-wizard">
                            <li><a class="nav-link" href="#wizard_Title">
                                    <span>1</span>
                                </a></li>
                            <li><a class="nav-link" href="#wizard_Service">
                                    <span>2</span>
                                </a></li>
                            <li><a class="nav-link" href="#wizard_Time">
                                    <span>3</span>
                                </a></li>
                            <li><a class="nav-link" href="#wizard_Details">
                                    <span>4</span>
                                </a></li>
                            <li><a class="nav-link" href="#wizard_Payment">
                                    <span>5</span>
                                </a></li>
                        </ul>

                        <div class="tab-content">
                            <!------------------------------ BGIN STEP 1------------------------------------->
                            <div id="wizard_Title" class="tab-pane" role="tabpanel">
                                <div class="row">
                                    <hr>
                                    <h3>Titre de l'annonce</h3>

                                    <div class="container pb-5 text-center col-6">

                                        <input type="text" class="   form-control form-control-lg " placeholder="Titre de l'annonce">
                                    </div>
                                </div>
                            </div>



                            <!------------------------------ BGIN STEP 2------------------------------------->
                            <div id="wizard_Service" class="tab-pane" role="tabpanel">
                                <div class="row m-1">
                                    <hr>
                                    <h3>Service</h3>
                                    <div class="container col-12 row">
                                        <div class="col-xl-6 col-lg-6 col-sm-6">
                                            <div class="row">
                                                <h4 class="text-primary">Vos Parents</h4>
                                                <div class="col-lg-4 m-2">
                                                    <!--------- BEGIN COUNTER ---------------------->
                                                    <div class="card border shadow-sm">
                                                        <div class="card-body">
                                                            <div class="text-center">
                                                                <div class="profile-photo">
                                                                    <img src="assets/images/maminou/icons/mama.png" width="100%" class=" img-fluid " alt="">
                                                                </div>
                                                                <h6 class="mt-2">Grand Mère</h6>
                                                            </div>
                                                        </div>
                                                        <div class="card-footer col-md-12 p-0">
                                                            <div class="input-group m-0">
                                                                <div class="input-group-btn">
                                                                    <button class="btn btn-sm">
                                                                        <i class="fa fa-minus-square  mt-2" style="font-size: 15px"></i>
                                                                    </button>
                                                                </div>
                                                                <input style="border-top: 0; border-bottom: 0" type="text" id="input3-group2" name="input3-group2" placeholder="Search" class=" form-control">
                                                                <div class="input-group-btn border">
                                                                    <button class="btn btn-sm">
                                                                        <i class="fa fa-plus-square mt-2" style="font-size: 15px"></i>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--------- END COUNTER ---------------------->
                                                </div>

                                                <div class="col-lg-4 m-2">
                                                    <!--------- BEGIN COUNTER ---------------------->
                                                    <div class="card border shadow-sm">
                                                        <div class="card-body">
                                                            <div class="text-center">
                                                                <div class="profile-photo">
                                                                    <img src="assets/images/maminou/icons/papa.png" width="100%" class=" img-fluid " alt="">
                                                                </div>
                                                                <h6 class="mt-2">Grand père</h6>
                                                            </div>
                                                        </div>
                                                        <div class="card-footer col-md-12 p-0">
                                                            <div class="input-group m-0">
                                                                <div class="input-group-btn">
                                                                    <button class="btn btn-sm">
                                                                        <i class="fa fa-minus-square  mt-2" style="font-size: 15px"></i>
                                                                    </button>
                                                                </div>
                                                                <input style="border-top: 0; border-bottom: 0" type="text" id="input3-group2" name="input3-group2" placeholder="Search" class=" form-control">
                                                                <div class="input-group-btn border">
                                                                    <button class="btn btn-sm">
                                                                        <i class="fa fa-plus-square mt-2" style="font-size: 15px"></i>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--------- END COUNTER ---------------------->
                                                </div>

                                                <div class="profile-skills mb-5">
                                                    <h4 class="text-primary mb-2">Etàt de Santé</h4>
                                                    <a href="javascript:void(0);" class="btn btn-primary light btn-s mb-1">Handicapé</a>
                                                    <a href="javascript:void(0);" class="btn btn-primary light btn-s mb-1">Malade</a>
                                                    <a href="javascript:void(0);" class="btn btn-primary light btn-s mb-1">Alzheimer</a>
                                                    <a href="javascript:void(0);" class="btn btn-primary light btn-s mb-1">inconténance (urinaire / féçale)</a>
                                                </div>            
                                                                                             
                                            </div>
                                        </div>

                                        <!------------------ PARTIE  DROITE ---------------->

                                        <div class="col-xl-6 col-lg-6 col-sm-6">
                                            <div class="row">
                                                <h4 class="text-primary">Type de garde</h4>
                                                <div class="col-10 mt-1 ">
                                                    <!--------- BEGIN COUNTER ---------------------->

                                                    <div class="card border bg-info-light widget-stat shadow-sm border border-primary">
                                                        <input type="checkbox" id="chkData" name="chkData" aria-hidden="true" hidden="true"  />

                                                        <div class="card-body  p-2">
                                                            <div class="text-center ">
                                                                <i class="flaticon-381-menu text-primary h2"></i>
                                                            </div>
                                                        </div>
                                                        <div class="card-footer border-primary  p-2 text-center">
                                                            <span class="">Plein temps</span>
                                                        </div>
                                                    </div>

                                                    <!--------- END COUNTER ---------------------->
                                                </div>

                                                <div class="col-10 mt-1">
                                                    <!--------- BEGIN COUNTER ---------------------->
                                                    <div class="card border bg-success-light widget-stat shadow-sm border border-primary">
                                                        <input type="checkbox" id="chkData" name="chkData" aria-hidden="true" hidden="true"  />

                                                        <div class="card-body  p-2">
                                                            <div class="text-center ">
                                                                <i class="flaticon-381-menu text-primary h2"></i>
                                                            </div>
                                                        </div>
                                                        <div class="card-footer border-primary  p-2 text-center">
                                                            <span class="">Occassionnelle</span>
                                                        </div>
                                                    </div>

                                                    <!--------- END COUNTER ---------------------->
                                                </div>



                                                <div class="col-10 mt-1">
                                                    <!--------- BEGIN COUNTER ---------------------->

                                                    <!--------- END COUNTER ---------------------->
                                                </div>


                                                <div class="col-10 mt-1">
                                                    <!--------- BEGIN COUNTER ---------------------->
                                                    <div class="card border  t shadow-sm border border-primary">
                                                        <input type="checkbox" id="chkData" name="chkData" aria-hidden="true" hidden="true"  />

                                                        <div class="card-body p-2">
                                                            <div class="text-center m-0">
                                                                <i class="flaticon-381-menu text-primary h2"></i>
                                                            </div>
                                                        </div>
                                                        <div class="card-footer border-primary  p-2 text-center">
                                                            <span class="no-wrap">Aide-soignant de nuit</span>
                                                        </div>
                                                    </div>

                                                    <!--------- END COUNTER ---------------------->
                                                </div>
                                            </div>


                                        </div>

                                    </div>

                                </div>
                            </div>





                            <div id="wizard_Service2" class="tab-pane" role="tabpanel">
                                <hr>
                                <h3>Service</h3>
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
                                                                    <p class="mt-1 mb-0" style="font-size: 0.8rem;">Entre 3 ans et 6ans </p>
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
                                                        <button type="button" class="btn btn-outline-info w-75 btn-sm toggle-active button-toggle float-right"><i class="fa-solid fa-2xl fa-calendar-days"></i>
                                                            <hr />Plein temps
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 mb-2">
                                                    <div class="form-group">
                                                        <button type="button" class="btn btn-outline-info w-75 btn-sm toggle-active button-toggle float-right"><i class="fa-solid fa-2xl  fa-list-check"></i>
                                                            <hr />Occassionnelle
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 mb-2">
                                                    <div class="form-group">
                                                        <button type="button" class="btn btn-outline-info w-75 btn-sm toggle-active button-toggle float-right"><i class="fa-solid  fa-2xl fa-house"></i>
                                                            <hr />Sortie d'école
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 mb-2">
                                                    <div class="form-group">
                                                        <button type="button" class="btn btn-outline-info w-75 btn-sm toggle-active button-toggle float-right"><i class="fa-solid fa-2xl fa-baby"></i>
                                                            <hr />Assistante maternelle
                                                        </button>
                                                    </div>
                                                </div>
                                                <hr />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <!------------------------------ END STEP 2------------------------------------->






                             <!------------------------------ BGIN STEP 3------------------------------------->

                            <div id="wizard_Time" class="tab-pane" role="tabpanel">
                                <div class="row">
                                    <!-------------------- Premier bloc -------------------->
                                    <div class="col-lg-6">
                                        <fieldset>
                                            <h4 class="text-primary">Plages horaires</h4>
                                            <div class="row">
                                                <div class="col-lg-10 mb-2">
                                                    <div class="form-group">
                                                        <label class="text-label">À partir du:<span class="required"></span></label>
                                                        <input type="date" name="da" class="form-control">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-10 mb-2">
                                                    <div class="form-group">
                                                        <label class="text-label">Jours concernés<span class="required"></span></label>
                                                        <div class="btn-group" role="group" aria-label="Basic example">
                                                            <input type="checkbox" id="lun" class="btn-check btn-sm" autocomplete="off">
                                                            <label class="btn btn-outline-success btn-sm" for="lun">Lun</label>

                                                            <input type="checkbox" id="mar" class="btn-check btn-sm" autocomplete="off">
                                                            <label class="btn btn-outline-success btn-sm" for="mar">Mar</label>

                                                            <input type="checkbox" id="mer" class="btn-check btn-sm" autocomplete="off">
                                                            <label class="btn btn-outline-success btn-sm" for="mer">Mer</label>

                                                            <input type="checkbox" id="jeu" class="btn-check btn-sm" autocomplete="off">
                                                            <label class="btn btn-outline-success btn-sm" for="jeu">Jeu</label>

                                                            <input type="checkbox" id="ven" class="btn-check btn-sm" autocomplete="off">
                                                            <label class="btn btn-outline-success btn-sm" for="ven">Ven</label>

                                                            <input type="checkbox" id="sam" class="btn-check btn-sm" autocomplete="off">
                                                            <label class="btn btn-outline-success btn-sm" for="sam">Sam</label>

                                                            <input type="checkbox" id="dim" class="btn-check btn-sm" autocomplete="off">
                                                            <label class="btn btn-outline-success btn-sm" for="dim">Dim</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <h4 class="text-primary">Contact</h4>
                                            <br>
                                            <div class="row">
                                                <div class="col-lg-10 mb-2">
                                                    <div class="form-group">
                                                        <label class="text-label">Num telephone<span class="required"></span></label>
                                                        <div class="input-group">
                                                            <input type="number" class="form-control" placeholder="Entrer le numero du telephone">
                                                        </div>
                                                    </div>
                                                </div>                                                
                                                <div class="col-lg-5 mb-2">
                                                    <div class="form-group">
                                                        <label class="text-label">Region<span class="required"></span></label>
                                                        <div class="input-group">
                                                            <select class="form-control">
                                                                <option value="">Select Region</option>
                                                                <option value="">Ariana</option>
                                                                <option value="">Béja</option>
                                                                <option value="">Ben Arous</option>
                                                                <option value="">Bizerte</option>
                                                                <option value="">Gabès</option>
                                                                <option value="">Gafsa</option>
                                                                <option value="">Jendouba</option>
                                                                <option value="">Kairouan</option>
                                                                <option value="">Kasserine</option>
                                                                <option value="">Kebili</option>
                                                                <option value="">Kef</option>
                                                                <option value="">Mahdia</option>
                                                                <option value="">Manouba</option>
                                                                <option value="">Medenine</option>
                                                                <option value="">Monastir</option>
                                                                <option value="">Nabeul</option>
                                                                <option value="">Sfax</option>
                                                                <option value="">Sidi Bouzid</option>
                                                                <option value="">Siliana</option>
                                                                <option value="">Sousse</option>
                                                                <option value="">Tataouine</option>
                                                                <option value="">Tozeur</option>
                                                                <option value="">Tunis</option>
                                                                <option value="">Zaghouan</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>                                                                                         
                                                <div class="col-lg-5 mb-2">
                                                    <div class="form-group">
                                                        <label class="text-label">Code ZIP<span class="required"></span></label>
                                                        <div class="input-group">
                                                            <input type="number" class="form-control" placeholder="Entrer le code postal">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-10 mb-2">
                                                    <div class="form-group">
                                                        <label class="text-label">Adresse<span class="required"></span></label>
                                                        <div class="input-group">
                                                            <textarea name="textarea-input" id="textarea-input" rows="2" placeholder="Entrer l'Adresse" class="form-control"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </div>

                                    <!----------------- Deuxième bloc ------------------>
                                    <div class="col-lg-6">
                                        <fieldset>
                                            <h4 class="text-primary">Votre Besoin</h4>
                                            <div class="row">
                                                <div class="mb-3 row">
                                                    <div class="row form-group">
                                                        <div >
                                                            <label for="select" class="form-control-label"><span class="text-label">Je suis un ?</span></label>
                                                        </div>
                                                        <div>
                                                            <select name="select" id="select" class="form-control">
                                                                <option value="0"></option>
                                                                <option value="1">Particulier</option>
                                                                <option value="2">Professionnel</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="row form-group">
                                                    <div>
                                                        
                                                        <label class="text-label">Définissez votre besoin<span class="required"></span></label>
                                                        <label for="textarea-input" class=" form-control-label"></label>
                                                    </div>
                                                    <div>
                                                        
                                                        <textarea name="textarea-input" id="textarea-input" rows="8" placeholder="" class="form-control"></textarea>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div>
                                                        <br>
                                                        <label for="select" class="form-control-label"><span class="text-label">Situation familiale</span></label>
                                                    </div>
                                                    <div>
                                                        
                                                        <select name="select" id="select" class="form-control">
                                                            <option value="0"></option>
                                                            <option value="1">En Couple</option>
                                                            <option value="2">Parent isolé</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="mb-3 row">
                                                    <label>
                                                        <br>
                                                        <label class="text-label">Coût Estimé<span class="required"></span></label>
                                                        <span class="text-danger"></span>
                                                    </label>
                                                    <div>
                                                        
                                                        <input type="number" class="form-control" id="validationCustom06" placeholder="$21.60" required="">
                                                        <div class="invalid-feedback">
                                                            Please enter a Currency.
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </fieldset>
                                    </div>
                                    <!------------------------ end Deuxième bloc ------------------>
                                </div>
                            </div>

                         <!------------------------------ END STEP 3------------------------------------->

                            <div id="wizard_Details" class="tab-pane" role="tabpanel">
                                <div class="row align-items-center">
                                    <table class="table">
                                        <thead>
                                          <tr>
                                            <th scope="col">Jours</th>
                                            <th scope="col">8-9</th>
                                            <th scope="col">9-10</th>
                                            <th scope="col">10-11</th>
                                            <th scope="col">11-12</th>
                                            <th scope="col">13-14</th>
                                            <th scope="col">14-15</th>
                                            <th scope="col">15-16</th>
                                            <th scope="col">16-17</th>
                                            <th scope="col">17-18</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <th scope="row">Lundi</th>
                                            <td class="selectable-cell" data-day="monday" data-time="8-9"></td>
                                            <td class="selectable-cell" data-day="monday" data-time="9-10"></td>
                                            <td class="selectable-cell" data-day="monday" data-time="10-11"></td>
                                            <td class="selectable-cell" data-day="monday" data-time="11-12"></td>
                                            <td class="selectable-cell" data-day="monday" data-time="13-14"></td>
                                            <td class="selectable-cell" data-day="monday" data-time="14-15"></td>
                                            <td class="selectable-cell" data-day="monday" data-time="15-16"></td>
                                            <td class="selectable-cell" data-day="monday" data-time="16-17"></td>
                                            <td class="selectable-cell" data-day="monday" data-time="17-18"></td>
                                          </tr>
                                          <tr>
                                            <th scope="row">Mardi</th>
                                            <td class="selectable-cell" data-day="tuesday" data-time="8-9"></td>
                                            <td class="selectable-cell" data-day="tuesday" data-time="9-10"></td>
                                            <td class="selectable-cell" data-day="tuesday" data-time="10-11"></td>
                                            <td class="selectable-cell" data-day="tuesday" data-time="11-12"></td>
                                            <td class="selectable-cell" data-day="tuesday" data-time="13-14"></td>
                                            <td class="selectable-cell" data-day="tuesday" data-time="14-15"></td>
                                            <td class="selectable-cell" data-day="tuesday" data-time="15-16"></td>
                                            <td class="selectable-cell" data-day="tuesday" data-time="16-17"></td>
                                            <td class="selectable-cell" data-day="tuesday" data-time="17-18"></td>
                                          </tr>
                                            <tr>
                                                <th scope="row">Mercredi</th>
                                                <td><div class="form-check"><input type="checkbox" name="tuesday[]" value="8-9" class="form-check-input"></div></td>
                                                <td><div class="form-check"><input type="checkbox" name="tuesday[]" value="9-10" class="form-check-input"></div></td>
                                                <td><div class="form-check"><input type="checkbox" name="tuesday[]" value="10-11" class="form-check-input"></div></td>
                                                <td><div class="form-check"><input type="checkbox" name="tuesday[]" value="11-12" class="form-check-input"></div></td>
                                                <td><div class="form-check"><input type="checkbox" name="tuesday[]" value="13-14" class="form-check-input"></div></td>
                                                <td><div class="form-check"><input type="checkbox" name="tuesday[]" value="14-15" class="form-check-input"></div></td>
                                                <td><div class="form-check"><input type="checkbox" name="tuesday[]" value="15-16" class="form-check-input"></div></td>
                                                <td><div class="form-check"><input type="checkbox" name="tuesday[]" value="16-17" class="form-check-input"></div></td>
                                                <td><div class="form-check"><input type="checkbox" name="tuesday[]" value="17-18" class="form-check-input"></div></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Jeudi</th>
                                                <td><div class="form-check"><input type="checkbox" name="tuesday[]" value="8-9" class="form-check-input"></div></td>
                                                <td><div class="form-check"><input type="checkbox" name="tuesday[]" value="9-10" class="form-check-input"></div></td>
                                                <td><div class="form-check"><input type="checkbox" name="tuesday[]" value="10-11" class="form-check-input"></div></td>
                                                <td><div class="form-check"><input type="checkbox" name="tuesday[]" value="11-12" class="form-check-input"></div></td>
                                                <td><div class="form-check"><input type="checkbox" name="tuesday[]" value="13-14" class="form-check-input"></div></td>
                                                <td><div class="form-check"><input type="checkbox" name="tuesday[]" value="14-15" class="form-check-input"></div></td>
                                                <td><div class="form-check"><input type="checkbox" name="tuesday[]" value="15-16" class="form-check-input"></div></td>
                                                <td><div class="form-check"><input type="checkbox" name="tuesday[]" value="16-17" class="form-check-input"></div></td>
                                                <td><div class="form-check"><input type="checkbox" name="tuesday[]" value="17-18" class="form-check-input"></div></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Vendredi</th>
                                                <td><div class="form-check"><input type="checkbox" name="tuesday[]" value="8-9" class="form-check-input"></div></td>
                                                <td><div class="form-check"><input type="checkbox" name="tuesday[]" value="9-10" class="form-check-input"></div></td>
                                                <td><div class="form-check"><input type="checkbox" name="tuesday[]" value="10-11" class="form-check-input"></div></td>
                                                <td><div class="form-check"><input type="checkbox" name="tuesday[]" value="11-12" class="form-check-input"></div></td>
                                                <td><div class="form-check"><input type="checkbox" name="tuesday[]" value="13-14" class="form-check-input"></div></td>
                                                <td><div class="form-check"><input type="checkbox" name="tuesday[]" value="14-15" class="form-check-input"></div></td>
                                                <td><div class="form-check"><input type="checkbox" name="tuesday[]" value="15-16" class="form-check-input"></div></td>
                                                <td><div class="form-check"><input type="checkbox" name="tuesday[]" value="16-17" class="form-check-input"></div></td>
                                                <td><div class="form-check"><input type="checkbox" name="tuesday[]" value="17-18" class="form-check-input"></div></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Samedi</th>
                                                <td><div class="form-check"><input type="checkbox" name="tuesday[]" value="8-9" class="form-check-input"></div></td>
                                                <td><div class="form-check"><input type="checkbox" name="tuesday[]" value="9-10" class="form-check-input"></div></td>
                                                <td><div class="form-check"><input type="checkbox" name="tuesday[]" value="10-11" class="form-check-input"></div></td>
                                                <td><div class="form-check"><input type="checkbox" name="tuesday[]" value="11-12" class="form-check-input"></div></td>
                                                <td><div class="form-check"><input type="checkbox" name="tuesday[]" value="13-14" class="form-check-input"></div></td>
                                                <td><div class="form-check"><input type="checkbox" name="tuesday[]" value="14-15" class="form-check-input"></div></td>
                                                <td><div class="form-check"><input type="checkbox" name="tuesday[]" value="15-16" class="form-check-input"></div></td>
                                                <td><div class="form-check"><input type="checkbox" name="tuesday[]" value="16-17" class="form-check-input"></div></td>
                                                <td><div class="form-check"><input type="checkbox" name="tuesday[]" value="17-18" class="form-check-input"></div></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>


                                <style>
                                    .selectable-cell {
                                      cursor: pointer;
                                      border: 1px solid #ddd;
                                      height: 50px;
                                      text-align: center;
                                      vertical-align: middle;
                                    }
                                  
                                    .selectable-cell.selected {
                                      background-image: url('/assets/images/maminou/icons/tick.png');
                                      color: white;
                                    }
                                </style>

                                <script>
                                    document.querySelectorAll('.selectable-cell').forEach(cell => {
                                    cell.addEventListener('click', function() {
                                        this.classList.toggle('selected');
                                    });
                                    });
                                </script>
                                
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
                                                    <i class="far fa-question-circle" aria-hidden="true"></i>
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
