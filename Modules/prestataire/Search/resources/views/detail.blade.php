@extends('layout.main_page')

@section('content')



			<div class="container-fluid">
    <div class="row page-titles mx-0">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">App</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Profile</a></li>
        </ol>
    </div>

    <!-- row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="profile card card-body px-3 pt-3 pb-0">
                <div class="profile-head">
                    <div class="photo-content">
                        <div class="cover-photo rounded"></div>
                    </div>
                    <div class="profile-info">
                        <div class="profile-photo">
                            <img src="assets/images/maminou/icons/3101.png" class="img-fluid rounded-circle" alt="">
                        </div>
                        <div class="profile-details">
                            <div class="profile-name px-3 pt-2">
                                <h4 class="text-primary mb-0">Mitchell C. Shay</h4>
                                <p>parent</p>
                            </div>
                            <div class="profile-email px-2 pt-2">
                                <h4 class="text-muted mb-0">1 enfant, âge du plus jeune : entre 3 et 6 ans</h4>
                                <p>annonce</p>
                            </div>
                            <div class="dropdown ms-auto">
                                <a href="javascript:void(0);" class="btn btn-primary light sharp" data-bs-toggle="dropdown" aria-expanded="true"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg></a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li class="dropdown-item"><a href="javascript:void(0);"><i class="fa fa-user-circle text-primary me-2"></i>View profile</a></li>
                                    <li class="dropdown-item"><a href="javascript:void(0);"><i class="fa fa-users text-primary me-2"></i>Add to close friends</a> </li>
                                    <li class="dropdown-item"><a href="javascript:void(0);"><i class="fa fa-plus text-primary me-2"></i>Add to group</a> </li>
                                    <li class="dropdown-item"><a href="javascript:void(0);"><i class="fa fa-ban text-primary me-2"></i> Block</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-4">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="profile-statistics">
                                <div class="text-center">
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
                                    <div class="row">
                                        <div class="col">
                                            <h3 class="m-b-0">150</h3><span>Follower</span>
                                        </div>
                                        <div class="col">
                                            <h3 class="m-b-0">140</h3><span>Place Stay</span>
                                        </div>
                                        <div class="col">
                                            <h3 class="m-b-0">45</h3><span>Reviews</span>
                                        </div>
                                    </div>
                                    <div class="mt-4">
                                        <a href="javascript:void(0);" class="btn btn-primary mb-1 me-1">Follow</a>
                                        <a href="javascript:void(0);" class="btn btn-primary mb-1" data-bs-toggle="modal" data-bs-target="#sendMessageModal">Send Message</a>
                                    </div>
                                </div>
                                <!-- Modal -->

                            </div>
                        </div>
                    </div>
                </div>
                
                
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="profile-news">
                                <h5 class="text-primary d-inline">annonces similaires</h5>
                                <div class="media pt-3 pb-3">
                                    <img src="public/images/profile/5.jpg" alt="image" class="me-3 rounded" width="75">
                                    <div class="media-body">
                                        <h5 class="m-b-5"><a href="post-details.html" class="text-black">Gene Therapy Triumph: Curing Incurable Diseases!</a></h5>
                                        <p class="mb-0">I shared this on my twitter wall a few months back, and I thought.</p>
                                    </div>
                                </div>
                                <div class="media pt-3 pb-3">
                                    <img src="public/images/profile/6.jpg" alt="image" class="me-3 rounded" width="75">
                                    <div class="media-body">
                                        <h5 class="m-b-5"><a href="post-details.html" class="text-black">Hospital Outreach Program Boosts Community Health</a></h5>
                                        <p class="mb-0">I shared this on my fb wall a few months back, and I thought.</p>
                                    </div>
                                </div>
                                <div class="media pt-3 pb-3">
                                    <img src="public/images/profile/7.jpg" alt="image" class="me-3 rounded" width="75">
                                    <div class="media-body">
                                        <h5 class="m-b-5"><a href="post-details.html" class="text-black">AI Diagnosis: A Game-Changer in Patient Care</a></h5>
                                        <p class="mb-0">I shared this on my insta wall a few week back, and I thought.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-8">
            <div class="card h-auto">
                <div class="card-body">
                    <style>
                        .custom-btn {
                            padding: 7px 10px; /* Adjust padding to make the button smaller */
                            font-size: medium;
                        }</style>
                     <div class="col-lg-12">
                        <h4 class="fs-20 font-w600">Bio</h4>
                        <div class="staff-info">
                        @include('search::detail.about')
                        </div>
                        <br>
                        <hr>
                    </div>
                        
                     <div class="col-lg-12">
                        <h4 class="fs-20 font-w600">Garde d'enfants</h4>
                        <div class="staff-info">
                        @include('search::detail.nounou')
                        </div>
                        <br>
                        <hr>
                    </div>

                    <div class="col-lg-12">
                        <h4 class="fs-20 font-w600">auxiliaire de vie</h4>
                        <div class="staff-info">
                        @include('search::detail.auxiliaire')
                        </div>
                        <br>
                        <hr>
                    </div>

                    <div class="col-lg-12">
                        <h4 class="fs-20 font-w600">Garde animaux</h4>
                        <div class="staff-info">
                        @include('search::detail.animal')
                        </div>
                        <br>
                        
                    </div>




                </div>
            </div>
        </div>
    </div>
</div>
        




@endsection
