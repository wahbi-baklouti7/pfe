@extends('layout.main_page')

@section('content')




<div class="container mt-5">
    <div class="row d-flex justify-content-center">
        <div class="col-md-20">
            <div class="card p-3 py-4">
                <div class="row d-flex justify-content-center">
                    

                </div>
                <div class="mt-3">
                    
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="input-group mb-4">
                                        <input type="text" class="form-control" placeholder="keywords...">
                                        
                                    </div>													
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3 col-md-20">
                                        <select class="me-sm-2 default-select form-control wide " id="inlineFormCustomSelect">
                                            <option selected disabled>service...</option>
                                            <option value="1">auxiliaire de vie</option>
                                            <option value="2">garde animaux</option>
                                            <option value="3">garde enfants</option>
                                        </select>
                                        </div>
                                </div>
                                <div class="col-md-2">
                                    <select class="form-control">
                                        <option value="">Region</option>
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
                                
                                <div class="col-md-2 position-relative">
                                    <button class="btn btn-primary" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                    <i class="fa fa-solid fa-sliders fa-2x custom-icon-position"></i>
                                </div>
                                
                                <style>
                                .custom-icon-position {
                                    
                                    position: absolute;
                                    top: 35%;
                                    left: 130px; /* Adjust this value for horizontal positioning */
                                    transform: translateY(-50%);
                                }
                                </style>
                                
                            </div>
                        
                    
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.advanced {
    text-decoration: none;
    font-size: 15px;
    font-weight: 500;
    cursor: pointer;
}

.advanced {
    color: #00838f !important;
}

.form-control:focus {
    box-shadow: none;
    border: 1px solid #00838f;
}
</style>



<div class="container-fluid">

<!--**********************************
product1
***********************************-->

<div class="row">
<div class="col-lg-12 col-xxl-4 col-xl-6">
<div class="card">
<div class="card-body">
<div class="row m-b-30">
<div class="col-md-5 col-xxl-12">
    <div class="new-arrival-product mb-4 mb-xxl-4 mb-md-0">
        <div class="new-arrivals-img-contnent">
            <img class="img-fluid rounded" src="public/images/product/2.jpg" alt="">
        </div>
    </div>
</div>
<div class="col-md-7 col-xxl-12">
    <div class="new-arrival-content position-relative">
        <h4><a href="{{ url('/detail.blade.php') }}">Solid Women's V-neck Dark T-Shirt</a></h4>
        <div class="comment-review star-rating">
            <ul>
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star-half-stroke"></i></li>
                <li><i class="fa fa-star-half-stroke"></i></li>
            </ul>
            <span class="review-text style-1">(34 reviews) / </span><a class="product-review style-1" href="#"  data-bs-toggle="modal" data-bs-target="#reviewModal">Write a review?</a>
            <p class="price">$320.00</p>
        </div>
        <p>Availability: <span class="item"> In stock <i class="fa fa-check-circle text-success"></i></span></p>
        <p>Product code: <span class="item">0405689</span> </p>
        <p>Brand: <span class="item">Lee</span></p>
        <p class="text-content">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words.</p>
    </div>
</div>
</div>
</div>
</div>
</div>

<!--**********************************
product 2
***********************************-->
<div class="col-lg-12 col-xxl-4 col-xl-6">
<div class="card">
<div class="card-body">
<div class="row m-b-30">
<div class="col-md-5 col-xxl-12">
    <div class="new-arrival-product mb-4 mb-xxl-4 mb-md-0">
        <div class="new-arrivals-img-contnent">
            <img class="img-fluid rounded" src="public/images/product/3.jpg" alt="">
        </div>
    </div>
</div>
<div class="col-md-7 col-xxl-12">
    <div class="new-arrival-content position-relative">
        <h4><a href="ecom-product-detail.html">Solid Women's V-neck Dark T-Shirt</a></h4>
        <div class="comment-review star-rating">
            <ul>
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star-half-stroke"></i></li>
                <li><i class="fa fa-star-half-stroke"></i></li>
            </ul>
            <span class="review-text style-1">(34 reviews) / </span><a class="product-review style-1" href="#"  data-bs-toggle="modal" data-bs-target="#reviewModal">Write a review?</a>
            <p class="price">$325.00</p>
        </div>
        <p>Availability: <span class="item"> In stock <i class="fa fa-check-circle text-success"></i></span></p>
        <p>Product code: <span class="item">0405689</span> </p>
        <p>Brand: <span class="item">Lee</span></p>
        <p class="text-content">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words.</p>
    </div>
</div>
</div>
</div>
</div>
</div>
<!--**********************************
product 3
***********************************-->
<div class="col-lg-12 col-xxl-4 col-xl-6">
<div class="card">
<div class="card-body">
<div class="row m-b-30">
<div class="col-md-5 col-xxl-12">
    <div class="new-arrival-product mb-4 mb-xxl-4 mb-md-0">
        <div class="new-arrivals-img-contnent">
            <img class="img-fluid rounded" src="public/images/product/4.jpg" alt="">
        </div>
    </div>
</div>
<div class="col-md-7 col-xxl-12">
    <div class="new-arrival-content position-relative">
        <h4><a href="ecom-product-detail.html">Solid Women's V-neck Dark T-Shirt</a></h4>
        <div class="comment-review star-rating">
            <ul>
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
            </ul>
            <span class="review-text style-1">(34 reviews) / </span><a class="product-review style-1" href="#"  data-bs-toggle="modal" data-bs-target="#reviewModal">Write a review?</a>
            <p class="price">$480.00</p>
        </div>
        <p>Availability: <span class="item"> In stock <i class="fa fa-check-circle text-success"></i></span></p>
        <p>Product code: <span class="item">0405689</span> </p>
        <p>Brand: <span class="item">Lee</span></p>
        <p class="text-content">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words.</p>
    </div>
</div>
</div>
</div>
</div>
</div>
<!--**********************************
product 4
***********************************-->
<div class="col-lg-12 col-xxl-4 col-xl-6">
<div class="card">
<div class="card-body">
<div class="row m-b-30">
<div class="col-md-5 col-xxl-12">
    <div class="new-arrival-product mb-4 mb-xxl-4 mb-md-0">
        <div class="new-arrivals-img-contnent">
            <img class="img-fluid rounded" src="public/images/product/5.jpg" alt="">
        </div>
    </div>
</div>
<div class="col-md-7 col-xxl-12">
    <div class="new-arrival-content position-relative">
        <h4><a href="ecom-product-detail.html">Solid Women's V-neck Dark T-Shirt</a></h4>
        <div class="comment-review star-rating">
            <ul>
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
            </ul>
            <span class="review-text style-1">(34 reviews) / </span><a class="product-review style-1" href="#"  data-bs-toggle="modal" data-bs-target="#reviewModal">Write a review?</a>
            <p class="price">$658.00</p>
        </div>
        <p>Availability: <span class="item"> In stock <i class="fa fa-check-circle text-success"></i></span></p>
        <p>Product code: <span class="item">0405689</span> </p>
        <p>Brand: <span class="item">Lee</span></p>
        <p class="text-content">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words.</p>
    </div>
</div>
</div>
</div>
</div>
</div>
<!--**********************************
product 5
***********************************-->
<div class="col-lg-12 col-xxl-4 col-xl-6">
<div class="card">
<div class="card-body">
<div class="row m-b-30">
<div class="col-md-5 col-xxl-12">
    <div class="new-arrival-product mb-4 mb-xxl-4 mb-md-0">
        <div class="new-arrivals-img-contnent">
            <img class="img-fluid rounded" src="public/images/product/6.jpg" alt="">
        </div>
    </div>
</div>
<div class="col-md-7 col-xxl-12">
    <div class="new-arrival-content position-relative">
        <h4><a href="ecom-product-detail.html">Solid Women's V-neck Dark T-Shirt</a></h4>
        <div class="comment-review star-rating">
            <ul>
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
            </ul>
            <span class="review-text style-1">(34 reviews) / </span><a class="product-review style-1" href="#"  data-bs-toggle="modal" data-bs-target="#reviewModal">Write a review?</a>
            <p class="price">$280.00</p>
        </div>
        <p>Availability: <span class="item"> In stock <i class="fa fa-check-circle text-success"></i></span></p>
        <p>Product code: <span class="item">0405689</span> </p>
        <p>Brand: <span class="item">Lee</span></p>
        <p class="text-content">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words.</p>
    </div>
</div>
</div>
</div>
</div>
</div>
<!--**********************************
product 6
***********************************-->
<div class="col-lg-12 col-xxl-4 col-xl-6">
<div class="card">
<div class="card-body">
<div class="row m-b-30">
<div class="col-md-5 col-xxl-12">
    <div class="new-arrival-product mb-4 mb-xxl-4 mb-md-0">
        <div class="new-arrivals-img-contnent">
            <img class="img-fluid rounded" src="public/images/product/7.jpg" alt="">
        </div>
    </div>
</div>
<div class="col-md-7 col-xxl-12">
    <div class="new-arrival-content position-relative">
        <h4><a href="ecom-product-detail.html">Solid Women's V-neck Dark T-Shirt</a></h4>
        <div class="comment-review star-rating">
            <ul>
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
            </ul>
            <span class="review-text style-1">(34 reviews) / </span><a class="product-review style-1" href="#"  data-bs-toggle="modal" data-bs-target="#reviewModal">Write a review?</a>
            <p class="price">$600.00</p>
        </div>
        <p>Availability: <span class="item"> In stock <i class="fa fa-check-circle text-success"></i></span></p>
        <p>Product code: <span class="item">0405689</span> </p>
        <p>Brand: <span class="item">Lee</span></p>
        <p class="text-content">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words.</p>
    </div>
</div>
</div>
</div>
</div>
</div>
<!-- review -->
<div class="modal fade" id="reviewModal">
<div class="modal-dialog modal-dialog-centered" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title">Review</h5>
<button type="button" class="btn-close" data-bs-dismiss="modal">
</button>
</div>
<div class="modal-body">
<form>
    <div class="text-center mb-4">
        <img class="img-fluid rounded" width="78" src="public/images/avatar/1.jpg" alt="DexignZone">
    </div>
    <div class="mb-3">
        <div class="rating-widget mb-4 text-center">
            <!-- Rating Stars Box -->
            <div class="rating-stars">
                <ul id="stars">
                    <li class="star" title="Poor" data-value="1">
                        <i class="fa fa-star fa-fw"></i>
                    </li>
                    <li class="star" title="Fair" data-value="2">
                        <i class="fa fa-star fa-fw"></i>
                    </li>
                    <li class="star" title="Good" data-value="3">
                        <i class="fa fa-star fa-fw"></i>
                    </li>
                    <li class="star" title="Excellent" data-value="4">
                        <i class="fa fa-star fa-fw"></i>
                    </li>
                    <li class="star" title="WOW!!!" data-value="5">
                        <i class="fa fa-star fa-fw"></i>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="mb-3">
        <textarea class="form-control" placeholder="Comment" rows="5"></textarea>
    </div>
    <button class="btn btn-success btn-block">RATE</button>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="d-flex justify-content-center">
<nav>
<ul class="pagination pagination-circle">
<li class="page-item page-indicator">
<a class="page-link" href="javascript:void(0)">
<i class="la la-angle-left"></i></a>
</li>
<li class="page-item active"><a class="page-link" href="javascript:void(0)">1</a></li>
<li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
<li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
<li class="page-item"><a class="page-link" href="javascript:void(0)">4</a></li>
<li class="page-item page-indicator">
<a class="page-link" href="javascript:void(0)">
<i class="la la-angle-right"></i></a>
</li>
</ul>
</nav>
</div>






<!--**********************************
Content body end
***********************************-->
<!--**********************************
Footer start
***********************************-->
<div class="footer">

<div class="copyright">
<p>Copyright © Designed &amp; Developed by <a href="https://dexignzone.com/" target="_blank">DexignZone</a> 2023</p>
</div>
</div>        <!--**********************************
Footer end
***********************************-->

<!--**********************************
Support ticket button start
***********************************-->

<!--**********************************
Support ticket button end
***********************************-->





@endsection
