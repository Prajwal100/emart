@extends('frontend.layouts.master')

@section('content')


    <div class="page-banner-area">
        <div class="container">
            <div class="page-banner-content d-flex justify-content-between">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{route('home')}}"><i class="lni lni-home"></i> Home</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Register</li>
                </ol>
                <h6 class="banner-title">Register</h6>
            </div>
        </div>
    </div>

    <section class="login-area pt-80 pb-80">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-7 col-md-9 col-sm-11">
                    <div class="row">
                        <div class="col-md-12">
                            @if($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach($errors->all() as $error)
                                            <li>{{$error}}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="login-wrapper">
                        <div class="section-title text-center">
                            <h3 class="title">Register</h3>
                            <p class="text pt-10">
                                Please Register using account detail bellow.
                            </p>
                        </div>
                        <div class="login-form">
                            <form action="{{route('user.register.submit')}}" method="post">
                                @csrf
                                <div class="single-form clearfix">
                                    <label>Full name <span class="text-danger">*</span></label>
                                    <input
                                        type="text"
                                        placeholder="eg. Prajwal Rai" name="full_name" value="{{old('full_name')}}"
                                    />
                                </div>
                                <div class="single-form clearfix">
                                    <label>Username</label>
                                    <input
                                        type="text"
                                        placeholder="eg. Raidai" name="username" value="{{old('username')}}"
                                    />
                                </div>
                                <div class="single-form clearfix">
                                    <label>Email <span class="text-danger">*</span></label>
                                    <input
                                        type="email"
                                        placeholder="eg. prajwal.iar@gmail.com" name="email" value="{{old('email')}}"
                                    />
                                </div>
                                <div class="single-form clearfix">
                                    <label>Password <span class="text-danger">*</span></label>

                                    <input
                                        type="password"
                                        placeholder="At least 6 digits" name="password"
                                    />
                                </div>
                                <div class="single-form clearfix">
                                    <label>Confirm Password <span class="text-danger">*</span></label>

                                    <input
                                        type="password"
                                        placeholder="At least 6 digits" name="password_confirmation"
                                    />
                                </div>
                                <div class="single-form clearfix">
                                    <button class="main-btn">Register</button>
                                    <a href="{{route('user.login.form')}}" class="main-btn">Login</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
