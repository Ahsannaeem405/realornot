@extends('layouts.layouts')

@section('content')
    <div class="site-wrap">

        <div class="site-mobile-menu">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>


        @include('layouts.header')

        <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
      />

        <style>
            @media screen and (max-width: 800px) {
                #wetrust {
                    font-size: 40px !important;
                }

                #realor {
                    display: none;

                }


            }


            h1 {
                overflow: hidden;
                text-align: center;
            }

            .orr:before,
            .orr:after {
                background-color: #000;
                content: "";
                display: inline-block;
                height: 1px;
                position: relative;
                vertical-align: middle;
                width: 40%;
            }

            .orr:before {
                right: 0.5em;
                /* margin-left: -50%; */
            }

            .orr:after {
                left: 0.5em;
                /* margin-right: -50%; */
            }

        </style>

        <?php
     use App\Models\Express;
        $express = Express::get()->take(12);

        ?>



        <div class="swiper-container" style=" margin-top: 13px;">
            <div class="swiper-wrapper">
                <div class="swiper-slide">

                    <div class="image image-overlay image-zoom"
                        style="background-image:url({{ asset('assets/images/instagram-1.jpg') }})"></div>
                    <div class="container" >
                        <div class="row align-items-center vh-100">
                            <div class="col-lg-7 col-md-7 col-sm-12 text-white"  style="    text-align: center;" id="wetrustTop"
                                data-swiper-parallax-x="-100%">
                                <h1 class=" mt-1 mb-3 font-weight-light" id="wetrust" style="
                                    font-size: 48px;"><b> In God we trust <br>
                                        Everything else we Authenticate</b></h1>
                                @if (!Auth::check())
                                    <a href="{{ '/login' }}" class="btn btn-danger" style="border-radius: 14px; background:#37b649; border:none">Authentication
                                        Now</a>
                                @else
                                    <a href="#" class="btn btn-danger" data-toggle="modal"
                                        data-target="#Authentication" style="border-radius: 14px; background:#37b649; border:none">Authentication Now</a>
                                @endif
                                {{-- <a href="listing-full.html" class="btn btn-sm btn-white btn-action">Shop Now <span
                                        class="icon-arrow-right"></span></a> --}}
                            </div>

                            <div class="col-lg-5 col-md-5 col-sm-12 text-white" data-swiper-parallax-x="-100%">
                                <div>

                                    <div class="container " data-aos="fade-left" id="realor"
                                        style=" border:solid 2px #df141e;        border-radius: 27px;  padding-left: 22px; background: white;padding-top: 22px;padding-bottom: 22px; box-shadow: rgb(0 0 0 / 25%) 0px 54px 55px, rgb(0 0 0 / 12%) 0px -12px 30px, rgb(0 0 0 / 12%) 0px 4px 6px, rgb(0 0 0 / 17%) 0px 12px 13px, rgb(0 0 0 / 9%) 0px -3px 5px;padding-right: 22px;">



                                        <form method="POST" action="{{ route('login') }}">
                                            @csrf
                                            <h3 style="color:black;text-align: center;">
                                              <span style="color: #37b649">Real</span> <span  style="color: #aa8739">or</span> <span style="color: #df141e">Not</span>
                                                <br>
                                                {{-- <span>
                              Sign In
                          </span> --}}
                                            </h3>


                                            <div class="row form-group">

                                                <div class="col-md-12">
                                                    <label class="text-black" for="email">Email</label>
                                                    <input id="email" type="email"
                                                        class="form-control @error('email') is-invalid @enderror"
                                                        name="email" placeholder="Email" value="{{ old('email') }}" style="color: black !important;" required
                                                        autocomplete="email" autofocus>

                                                    @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="row form-group">

                                                <div class="col-md-12">
                                                    <label class="text-black" for="subject">Password</label>
                                                    <input id="password" type="password"
                                                        class="form-control @error('password') is-invalid @enderror"
                                                        name="password" placeholder="Password" style="color: black !important;" required autocomplete="current-password">

                                                    @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>




                                            <div class="row form-group">
                                                <div class="col-md-12" style="    text-align: center;">

                                                    <p class="orr" style="color: black">or</p>

                                                </div>
                                            </div>

                                            <div class="row form-group" style="text-align: center">
                                                <div class="col-lg-12 col-md-12 col-sm-12" style="margin-bottom:10px">
                                                    <a href="{{ url('/auth/facebook') }}" type="button"
                        >
                                                        <img style=" -webkit-filter: grayscale(0);
                                -webkit-transform: scale(1.01);     border-radius: 4px; width: 24px; height: 23px;"
                                                            src="{{ asset('/assets/images/facebook.png') }}" alt="">


                                                    </a>

                                                    <a href="{{ url('/authGoogle') }}" id="google" type="button"
                            >
                                                        <img style="width: 34px;  height: 33px;  -webkit-filter: grayscale(0);
                                -webkit-transform: scale(1.01);     border-radius: 4px;"
                                                            src="{{ asset('/assets/images/google.jpg') }}" alt="">


                                                    </a>
                                                </div>

                                            </div>




                                            <div class="row form-group">
                                                <div class="col-md-12">

                                                    <button type="submit" class="btn btn-danger">
                                                        {{ __('Login') }}
                                                    </button>
                                                    @if (Route::has('password.request'))
                                                        <a class="btn btn-link" style="color: black"
                                                            href="{{ route('password.request') }}">
                                                            {{ __('Forgot Your Password?') }}
                                                        </a>
                                                    @endif
                                                </div>
                                            </div>



                                        </form>
                                    </div>



                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="image image-overlay image-zoom"
                        style="background-image:url({{ asset('assets/images/news-1-1.jpg') }})"></div>
                    <div class="container">
                        <div class="row align-items-end align-items-center vh-100">
                            <div class="col-lg-7 col-md-7 col-sm-12 text-white" style="    text-align: center;" id="wetrustTop"
                                data-swiper-parallax-x="-100%">
                                <h1 class=" mt-1 mb-3 font-weight-light" id="wetrust" style="
                                    font-size: 48px;"><b> In God we trust <br>
                                        Everything else we Authenticate</b></h1>
                                        @if (!Auth::check())
                                        <a href="{{ '/login' }}" style="border-radius: 14px; background:#37b649; border:none" class="btn btn-danger">Authentication
                                            Now</a>
                                    @else
                                        <a href="#" class="btn btn-danger" style="border-radius: 14px; background:#37b649; border:none" data-toggle="modal"
                                            data-target="#Authentication">Authentication Now</a>
                                    @endif
                                {{-- <a href="listing-full.html" class="btn btn-sm btn-white btn-action">Shop Now <span
                                        class="icon-arrow-right"></span></a> --}}
                            </div>


                            <div class="col-lg-5 col-md-5 col-sm-12 text-white" data-swiper-parallax-x="-100%">
                                <div>

                                    <div class="container" id="realor"
                                        style=" border:solid 2px #df141e;   border-radius: 27px;   padding-left: 22px; background: white;padding-top: 22px;padding-bottom: 22px; box-shadow: rgb(0 0 0 / 25%) 0px 54px 55px, rgb(0 0 0 / 12%) 0px -12px 30px, rgb(0 0 0 / 12%) 0px 4px 6px, rgb(0 0 0 / 17%) 0px 12px 13px, rgb(0 0 0 / 9%) 0px -3px 5px;padding-right: 22px;">




                                        <form method="POST" action="{{ route('login') }}">
                                            @csrf
                                            <h3 style="color:black;text-align: center;">
                                                <span style="color: #37b649">Real</span> <span  style="color: #aa8739">or</span> <span style="color: #df141e">Not</span>
                                                <br>
                                                {{-- <span>
                                                              Sign In
                                                          </span> --}}
                                            </h3>


                                            <div class="row form-group">

                                                <div class="col-md-12">
                                                    <label class="text-black" for="email">Email</label>
                                                    <input id="email" placeholder="Email"  type="email"
                                                        class="form-control @error('email') is-invalid @enderror"
                                                        name="email" value="{{ old('email') }}" style="color: black !important;" required
                                                        autocomplete="email" autofocus>

                                                    @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="row form-group">

                                                <div class="col-md-12">
                                                    <label class="text-black" style="color: black !important;" for="subject">Password</label>
                                                    <input id="password" placeholder="Password" type="password"
                                                        class="form-control @error('password') is-invalid @enderror"
                                                        name="password" required autocomplete="current-password">

                                                    @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>



                                            <div class="row form-group">
                                                <div class="col-md-12" style="    text-align: center;">

                                                    <p class="orr" style="color: black">or</p>

                                                </div>
                                            </div>

                                            <div class="row form-group" style="text-align: center">
                                                <div class="col-lg-12 col-md-12 col-sm-12" style="margin-bottom:10px">
                                                    <a href="{{ url('/auth/facebook') }}" type="button"
                                                    >
                                                                                    <img style=" -webkit-filter: grayscale(0);
                                                            -webkit-transform: scale(1.01);     border-radius: 4px; width: 24px; height: 23px;"
                                                                                        src="{{ asset('/assets/images/facebook.png') }}" alt="">


                                                                                </a>

                                                                                <a href="{{ url('/authGoogle') }}" id="google" type="button"
                                                        >
                                                                                    <img style="width: 34px;  height: 33px;  -webkit-filter: grayscale(0);
                                                            -webkit-transform: scale(1.01);     border-radius: 4px;"
                                                                                        src="{{ asset('/assets/images/google.jpg') }}" alt="">


                                                                                </a>
                                                </div>

                                            </div>




                                            <div class="row form-group">
                                                <div class="col-md-12">

                                                    <button type="submit" class="btn btn-danger">
                                                        {{ __('Login') }}
                                                    </button>
                                                    @if (Route::has('password.request'))
                                                        <a class="btn btn-link" style="color: black"
                                                            href="{{ route('password.request') }}">
                                                            {{ __('Forgot Your Password?') }}
                                                        </a>
                                                    @endif
                                                </div>
                                            </div>



                                        </form>
                                    </div>



                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-footer">
                    <div class="container">
                        <div class="row align-items-center mb-5">
                            <div class="col-lg-6">
                                <div class="swiper-pagination"></div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>




        </div>

        <div class="container" style="margin-top: 30px" data-aos="fade" data-aos-delay="500">
            <h1 style="text-align: center;">How It Works</h1>
            <br>
            <div class="row" style="margin-left: 27px;margin-right: 27px; ">

                <div class="col-lg-4" style="     padding: 18px;   text-align: center;border:solid">
                    <div>
                        <span class="" style=" /* width: 81px !important; */ border: solid; padding-bottom: 7px;
                            padding-top: 7px;padding-left: 12px; border-radius: 50%;padding-right: 12px;"> 1</span>


                    </div>

                    <div class="" style="margin-top:17px">
                        <h3 style="color: white">Choose the Product</h3>
                        <p style="    font-weight: 700;">Before you buy anything online. Ask the seller to authenticate it
                            with us or you can.</p>

                        <div>


                        </div>

                    </div>

                </div>


                <div class="col-lg-8">


                        <div>
                            <img src="{{asset('/assets/How.jpg') }}" style="-webkit-filter: grayscale(0);
                            -webkit-transform: scale(1.01);
                            max-height: 313px;
                         width: fit-content;" alt="Image" class="img-fluid">

                        </div>


                </div>








            </div>



        </div>



        <div class="container" style="margin-top: 30px" data-aos="fade" data-aos-delay="500">

            <div class="row" style="margin-left: 27px;margin-right: 27px;">

                <div class="col-lg-8">

                    <div class="">

                        <div>
                            {{-- <img src="{{ asset('/assets/images/1st.png') }}" style="-webkit-filter: grayscale(0);
                            -webkit-transform: scale(1.01);
                            max-height: 313px;
                         width: fit-content;" alt="Image" class="img-fluid"> --}}
                         <img src="{{ asset('/assets/brand.jfif') }}" style="-webkit-filter: grayscale(0);
                            -webkit-transform: scale(1.01);
                            max-height: 313px;
                         width: fit-content;" alt="Image" class="img-fluid">

                        </div>

                    </div>

                </div>

                <div class="col-lg-4" style="     padding: 18px;   text-align: center;border:solid">
                    <div>
                        <span class="" style=" /* width: 81px !important; */ border: solid; padding-bottom: 7px;
                            padding-top: 7px;padding-left: 12px; border-radius: 50%;padding-right: 12px;"> 2</span>


                    </div>

                    <div class="" style="margin-top:17px">
                        <h3 style="color: white">Get the Product Authenticated</h3>
                        <p style="    font-weight: 700;">Our Experts on that specific brand will approve our AP Seal of approval for that specific item. </p>

                        <div>


                        </div>

                    </div>

                </div>











            </div>



        </div>




        <div class="container" style="margin-top: 30px" data-aos="fade" data-aos-delay="500">
            <h1 style="text-align: center;">Latest Authentication</h1>
            <br>
            <div class="row" style="margin-left: 27px;margin-right: 27px;">
                @foreach ( $express as  $expresss )
                @if($expresss->status_expert == '2')
                <div class="col-lg-4">

                    <div class="image-wrap-2" style=" border-radius: 22px;">
                        <div class="image-info">
                            {{-- <h2 class="mb-3">Nature</h2> --}}
                            <a href="{{ url('/products') }}" class="btn btn-outline-white py-2 px-4">More Photos</a>
                        </div>

                        <button class="mt-3 ml-3 btn btn-danger"
                            style="position: absolute;  background:#37b649; border-color:#37b649; border-radius: 8px;z-index: 100; ">
                            Pass
                        </button>



                        <div>


                            <img src="{{ asset('/uploads/'.$expresss->photos) }}" style="
                            max-height: 313px;
                            min-height: 313px;
                         width: fit-content;" alt="Image" class="img-fluid">
                            <div style="background:white; padding:15px;max-height: 156px;">
                                <div class="row">
                                    <div class="col-8">


                                     {{$expresss->zip_No}}
                                        <br>

                                        <h2 style="color: black;">  {{$expresss->Brand->brand_name}}</h2>
                                        <h2 style="color: black; margin-top: -7px;"> jardan 11</h2>
                                        <p style="font-size: 13px; margin-top: -10px;">Sep 10, 2021 11:32 AM</p>
                                    </div>
                                    <div class="col-4">
                                        <img src="{{ asset('/assets/images/logo-01.png') }}" style="    height: 84px;"
                                            alt="">
                                    </div>



                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                @endif
                @endforeach






            </div>

            <div class="image-info" style="text-align: center;margin-top: 24px;">
                {{-- <h2 class="mb-3">Nature</h2> --}}
                <a href="{{ url('/products') }}" class="btn btn-outline-white py-2 px-4">More Photos</a>
            </div>

        </div>

        <div class="footer py-4">
            <div class="container-fluid">
                <div class="row">



                  <div class="col-12" style="text-align:center;  " >
            <span style="color: white; font-size:24px">@copyright 2021</span>


                </div>
              </div>

        </div>


        <!-- Button trigger modal -->







    @endsection
