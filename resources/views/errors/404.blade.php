@extends('frontend.layouts.master')

@section('content')

    <div class="page-banner-area">
        <div class="container">
            <div class="page-banner-content d-flex justify-content-between">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('home')}}"><i class="lni lni-home"></i> Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Error</li>
                </ol>
                <h6 class="banner-title">Error</h6>
            </div>
        </div>
    </div>


    <section class="error-page d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="error-content text-center">
                        <span class="error">404</span>
                        <h3 class="error-title">Oops, looks like a ghost!</h3>
                        <p class="text">The page you are looking for can't be found. Go home by <a style="color: blue" href="{{route('home')}}">Clicking
                                here.</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
