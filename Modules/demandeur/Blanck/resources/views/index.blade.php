@extends('layout.main_page')

@section('style')


    .button-info {
    padding-right: 18px;
    text-align: right;
    padding-left: 18px;
}

@endsection

@section('content')





<h1>Hello World</h1>

    <p>Module: {!! config('blanck.name') !!}</p>




    <ul class="header-right">
        <li class="header-profile w-25">
            <a class="nav-link" href="javascript:;" role="button" data-bs-toggle="dropdown">
                <img src="assets/images/profile/12.png" width="20" alt="">
                <div class="button-info">
                    <span>Hello,<strong> Roberto</strong></span>
                </div>
            </a>
        </li>
    </ul>



@endsection
