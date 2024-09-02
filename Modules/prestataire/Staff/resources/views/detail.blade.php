@extends('layout.main_page')

@section("title")
Maminou.io | Staff | Detail
@endsection

@section('content')

    {{-- <p>Module: {!! config('staff.name') !!}</p> --}}


    <!--**********************************
            Content body start
        ***********************************-->

			<div class="container-fluid">
    {{-- <div class="text-end mb-3">
        <a href="javascript:void();" class="btn btn-primary btn-rounded add-staff" data-bs-toggle="modal" data-bs-target="#exampleModal" >+ Add Staff</a>
    </div> --}}
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-xl-8">
                            <div class="profile">
                                <div class="staff">
                                    <img src="https://www.utopix.com/wp-content/uploads/2024/04/MDhlZTc4ZGEtZWJiNS00NTJjLThhNjQtZjBkMmMxYzhlOGRi_54a01d6e-6ad0-4c97-86cc-e89d53ae9c06_profilhomme-768x534.jpg" alt="">
                                </div>
                                <div class="staf-info">
                                    <div>
                                        <div class="d-flex align-items-center mb-2">
                                            <h4 class="mb-0">Name :</h4><p class="ms-2 mb-0">Kate Velasquez</p>
                                        </div>

                                        <div class="d-flex align-items-center mb-2">
                                            <h4 class="mb-0">Gender :</h4><p class="ms-2 mb-0">Female</p>
                                        </div>
                                        <div class="d-flex align-items-center mb-2">
                                            <h4 class="mb-0">Degrer :</h4><p class="ms-2 mb-0">BSN</p>
                                        </div>
                                        <div class="d-flex align-items-center mb-2">
                                            <h4 class="mb-0">Designation :</h4><p class="ms-2 mb-0">Nurse</p>
                                        </div>
                                    </div>
                                    <div class="location mt-4">
                                        <div class="mb-3">
                                            <span><i class="fa-solid fa-location-dot me-2 text-primary"></i>San Francisco, USA</span>
                                            <span><i class="fa fa-building text-secondary me-2"></i> ICU Department</span>
                                        </div>
                                        <div>
                                            <span><i class="fa fa-phone me-2 text-primary"></i> +1 1234598767</span>
                                            <span><i class="fa fa-envelope me-2 text-secondary"></i>hello@gmail.com</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">




                            <div class="d-flex justify-content-between border-bottom mb-3 pb-2 mt-xl-0 mt-3">
                                <span class="font-w600 text-black">Followers</span>
                                <span>500</span>
                            </div>
                            <div class="d-flex justify-content-between border-bottom mb-3 pb-2">
                                <span class="font-w600 text-black">Following</span>
                                <span>300</span>
                            </div>
                            <div class="d-flex justify-content-between mb-3 pb-2">
                                <span class="font-w600 text-black">Friends</span>
                                <span>300</span>
                            </div>


         <span onclick="gfg(1)"
              class="star">★
        </span>
        <span onclick="gfg(2)"
              class="star">★
        </span>
        <span onclick="gfg(3)"
              class="star">★
        </span>
        <span onclick="gfg(4)"
              class="star">★
        </span>
        <span onclick="gfg(5)"
              class="star">★
        </span>
        <h4 id="output">
              Rating is: 0/5
          </h4>
 

          <style>

/* style.css */

* {
margin: 0;
padding: 0;
box-sizing: border-box;
}

body {
min-height: 50vh;
display: flex;

font-family: "Poppins", sans-serif;
}

.card {
max-width: 100%;
background: #fff;
margin: 0 1rem;
padding: 1rem;
box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
width: 100%;
border-radius: 0.5rem;
}

.star {
font-size: 6vh;
cursor: pointer;
}

.one {
color: rgb(255, 0, 0);
}

.two {
color: rgb(255, 106, 0);
}

.three {
color: rgb(251, 255, 120);
}

.four {
color: rgb(255, 255, 0);
}

.five {
color: rgb(24, 159, 14);
}

    </style>

    <script>


        // script.js

// To access the stars
let stars = 
	document.getElementsByClassName("star");
let output = 
	document.getElementById("output");

// Funtion to update rating
function gfg(n) {
	remove();
	for (let i = 0; i < n; i++) {
		if (n == 1) cls = "one";
		else if (n == 2) cls = "two";
		else if (n == 3) cls = "three";
		else if (n == 4) cls = "four";
		else if (n == 5) cls = "five";
		stars[i].className = "star " + cls;
	}
	output.innerText = "Rating is: " + n + "/5";
}

// To remove the pre-applied styling
function remove() {
	let i = 0;
	while (i < 5) {
		stars[i].className = "star";
		i++;
	}
}

    </script>


                            <div class="mt-4">
                                <button id="follow-button" class="btn btn-primary">Follow</button>
                                <a href="javascript:void(0);" class="btn btn-secondary">Message</a>
                            </div>
                        </div>

<style>
.custom-btn {
    padding: 7px 10px; /* Adjust padding to make the button smaller */
    font-size: medium;
}</style>

                        <div class="mt-5">
                            <h4 class="fs-20 font-w600">About Me</h4>
                            <div class="staff-info">
                            @include('staff::detail.about')
                            </div>
                        </div>
            
                        <hr>
                    <div class="col-lg-12">
                        <h4 class="fs-20 font-w600">Garde d'Enfants</h4>
                        <div class="staff-info">
                        @include('staff::detail.nounou')
                        </div>
                        <br>
                        <hr>
                    </div>
                    <div class="col-lg-12">
                        <h4 class="fs-20 font-w600">Auxiliaire de Vie</h4>
                        <div class="staff-info">
                        @include('staff::detail.auxiliaire')
                        </div>
                        <br>
                        <hr>
                    </div>
                    <div class="col-lg-12">
                        <h4 class="fs-20 font-w600">Garde animaux</h4>
                        <div class="staff-info">
                        @include('staff::detail.animal')
                        </div>
                        <br>
                        
                    </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

        <!--**********************************
            Content body end
        ***********************************-->

@endsection

