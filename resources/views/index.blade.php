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


        <div class="swiper-container" style=" margin-top: 13px;">
            <div class="swiper-wrapper">
                <div class="swiper-slide">

                    <div class="image image-overlay image-zoom"
                        style="background-image:url({{asset('assets/images/instagram-1.jpg') }})"></div>
                    <div class="container">
                        <div class="row align-items-center vh-100">
                            <div class="col-lg-7 col-md-7 col-sm-12 text-white" id="wetrustTop" data-swiper-parallax-x="-100%">
                                <h1 class=" mt-1 mb-3 font-weight-light" id="wetrust"  style="
                                font-size: 48px;"><b> In God we trust <br>
                                     Everything else we Authenticate</b></h1>
                                     @if(!Auth::check())
                                     <a href="{{'/login'}}" class="btn btn-sm btn-white btn-action" >Authentication Now</a>
                                        @else
                                        <a href="#" class="btn btn-sm btn-white btn-action" data-toggle="modal" data-target="#Authentication">Authentication Now</a>
                                        @endif
                                {{-- <a href="listing-full.html" class="btn btn-sm btn-white btn-action">Shop Now <span
                                        class="icon-arrow-right"></span></a> --}}
                            </div>

                            <div class="col-lg-5 col-md-5 col-sm-12 text-white" data-swiper-parallax-x="-100%">
<div>

        <div class="container" id="realor" style="    padding-left: 22px; background: white;padding-top: 22px;padding-bottom: 22px; box-shadow: rgb(0 0 0 / 25%) 0px 54px 55px, rgb(0 0 0 / 12%) 0px -12px 30px, rgb(0 0 0 / 12%) 0px 4px 6px, rgb(0 0 0 / 17%) 0px 12px 13px, rgb(0 0 0 / 9%) 0px -3px 5px;padding-right: 22px;">




                  <form method="POST" action="{{ route('login') }}">
                      @csrf
                      <h3 style="color:black;text-align: center;">
                          Real or Not
                          <br>
                          {{-- <span>
                              Sign In
                          </span> --}}
                      </h3>


                <div class="row form-group">

                  <div class="col-md-12">
                    <label class="text-black" for="email">Email</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

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
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                </div>

                {{-- <div class="row form-group">
                  <div class="col-md-12">

                    <label class="text-black" for="message">Remember</label>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                      <label class="form-check-label text-black" for="remember">
                          {{ __('Remember Me') }}
                      </label>
                  </div>

                  </div>
                </div> --}}


                <div class="row form-group">
                    <div class="col-md-12" style="    text-align: center;">

                        <p class="orr" style="color: black">or</p>

                    </div>
                  </div>

                  <div class="row form-group" style="text-align: center">
                    <div class="col-lg-12 col-md-12 col-sm-12" style="margin-bottom:10px">
                        <a href="{{url('/auth/facebook')}}"  type="button" style="background: #4267b2; border:none;
                        border-radius: 7px;" class="btn btn-danger">
                            <img style=" -webkit-filter: grayscale(0);
                            -webkit-transform: scale(1.01);     border-radius: 4px; width: 24px; height: 23px;" src="{{asset('/assets/images/facebook.png')}}" alt="">


                        </a>

                        <a href="{{url('/authGoogle')}}" id="google" type="button"  style="background:#4285f4;border:none;
                        border-radius: 7px;" class="btn btn-danger">
                            <img style="width: 24px;  height: 23px;  -webkit-filter: grayscale(0);
                            -webkit-transform: scale(1.01);     border-radius: 4px;" src="{{asset('/assets/images/google.jpg')}}" alt="">


                             </a>
                    </div>
               {{-- <div class="col-lg-3 col-md-3 col-sm-12"> --}}


{{--
                    </div> --}}
                  </div>




                <div class="row form-group">
                  <div class="col-md-12">

                      <button type="submit" class="btn btn-primary">
                          {{ __('Login') }}
                      </button>
                      @if (Route::has('password.request'))
                      <a class="btn btn-link" style="color: black" href="{{ route('password.request') }}">
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
                        style="background-image:url({{asset('assets/images/news-1-1.jpg') }})"></div>
                    <div class="container">
                        <div class="row align-items-end align-items-center vh-100">
                            <div class="col-lg-8 text-white" data-swiper-parallax-x="-100%">
                                <h1 class="display-1 mb-2 font-weight-light">Brand New <b>Sunglasses</b></h1>
                                <a href="listing-full.html" class="btn btn-sm btn-white btn-action">Shop Now <span
                                        class="icon-arrow-right"></span></a>
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
                        {{-- <div class="col-lg-6 text-right">
                <div class="swiper-navigation">
                  <div class="swiper-button-prev"></div>
                  <div class="swiper-button-next"></div>
                </div>
              </div> --}}
                    </div>
                </div>
            </div>
        </div>




    </div>

    <div class="container" style="margin-top: 30px" data-aos="fade" data-aos-delay="500">
        <h1 style="text-align: center;">Latest Authentication</h1>
        <br>
        <div class="row" style="margin-left: 27px;margin-right: 27px;">

            <div class="col-lg-4">

                <div class="image-wrap-2" style=" border-radius: 22px;">
                    <div class="image-info">
                        {{-- <h2 class="mb-3">Nature</h2> --}}
                        <a href="{{ url('/single') }}" class="btn btn-outline-white py-2 px-4">More Photos</a>
                    </div>
                    <button class="mt-3 ml-3 btn btn-danger" style="position: absolute;    border-radius: 8px;z-index: 100; ">
                        Pass
                    </button>
                    <div>


                        <img src="{{ asset('/assets/images/img_6.jpg') }}" style="
                        max-height: 313px;
                     width: fit-content;" alt="Image" class="img-fluid">

                    </div>

                </div>

            </div>


            <div class="col-lg-8">

                <div class="image-wrap-2" style=" border-radius: 22px;">
                    <div class="image-info">
                        {{-- <h2 class="mb-3">Nature</h2> --}}
                        <a href="{{ url('/single') }}" class="btn btn-outline-white py-2 px-4">More Photos</a>
                    </div>
                    <button class="mt-3 ml-3 btn btn-danger" style="position: absolute;    border-radius: 8px;z-index: 100; ">
                        NO Pass
                    </button>
                    <div>


                        <img src="{{ asset('/assets/images/demo/category-3.jpg') }}" style="
                        max-height: 313px;
                     width: fit-content;" alt="Image" class="img-fluid">
                        <div style="background:white; padding:15px;max-height: 156px;">

                        </div>
                    </div>

                </div>

            </div>








        </div>



    </div>




    <div class="container" style="margin-top: 30px" data-aos="fade" data-aos-delay="500">
        <h1 style="text-align: center;">Latest Authentication</h1>
        <br>
        <div class="row" style="margin-left: 27px;margin-right: 27px;">

            <div class="col-lg-4">

                <div class="image-wrap-2" style=" border-radius: 22px;">
                    <div class="image-info">
                        {{-- <h2 class="mb-3">Nature</h2> --}}
                        <a href="{{ url('/single') }}" class="btn btn-outline-white py-2 px-4">More Photos</a>
                    </div>
                    <button class="mt-3 ml-3 btn btn-danger" style="position: absolute;    border-radius: 8px;z-index: 100; ">
                        Pass
                    </button>
                    <div>


                        <img src="{{ asset('/assets/images/img_6.jpg') }}" style="
                        max-height: 313px;
                     width: fit-content;" alt="Image" class="img-fluid">
                        <div style="background:white; padding:15px;max-height: 156px;">
                            <div class="row">
                                <div class="col-8">


                                    #751163
                                    <br>

                                    <h2 style="color: black;">Air jardan</h2>
                                    <h2 style="color: black; margin-top: -7px;"> jardan 11</h2>
                                    <p style="font-size: 13px; margin-top: -10px;">Sep 10, 2021 11:32 AM</p>
                                </div>
                                <div class="col-4">
                                    <img src="{{ asset('/assets/images/logo-01.png') }}" style="    height: 84px;" alt="">
                                </div>



                            </div>
                        </div>
                    </div>

                </div>

            </div>


            <div class="col-lg-4">

                <div class="image-wrap-2" style=" border-radius: 22px;">
                    <div class="image-info">
                        {{-- <h2 class="mb-3">Nature</h2> --}}
                        <a href="{{ url('/single') }}" class="btn btn-outline-white py-2 px-4">More Photos</a>
                    </div>
                    <button class="mt-3 ml-3 btn btn-danger" style="position: absolute;    border-radius: 8px;z-index: 100; ">
                        NO Pass
                    </button>
                    <div>


                        <img src="{{ asset('/assets/images/demo/category-3.jpg') }}" style="
                        max-height: 313px;
                     width: fit-content;" alt="Image" class="img-fluid">
                        <div style="background:white; padding:15px;max-height: 156px;">
                            <div class="row">
                                <div class="col-8">


                                    #751163
                                    <br>

                                    <h2 style="color: black;">Air jardan</h2>
                                    <h2 style="color: black; margin-top: -7px;"> jardan 11</h2>
                                    <p style="font-size: 13px; margin-top: -10px;">Sep 10, 2021 11:32 AM</p>
                                </div>
                                <div class="col-4">
                                    <img src="{{ asset('/assets/images/logo-01.png') }}" style="    height: 84px;" alt="">
                                </div>



                            </div>
                        </div>
                    </div>

                </div>

            </div>

            <div class="col-lg-4">

                <div class="image-wrap-2" style=" border-radius: 22px;">
                    <div class="image-info">
                        {{-- <h2 class="mb-3">Nature</h2> --}}
                        <a href="{{ url('/single') }}" class="btn btn-outline-white py-2 px-4">More Photos</a>
                    </div>
                    <button class="mt-3 ml-3 btn btn-danger" style="position: absolute;    border-radius: 8px;z-index: 100; ">
                        NO Pass
                    </button>
                    <div>


                        <img src="{{ asset('/assets/images/demo/category-3.jpg') }}" style="
                        max-height: 313px;
                     width: fit-content;" alt="Image" class="img-fluid">
                        <div style="background:white; padding:15px;max-height: 156px;">
                            <div class="row">
                                <div class="col-8">


                                    #751163
                                    <br>

                                    <h2 style="color: black;">Air jardan</h2>
                                    <h2 style="color: black; margin-top: -7px;"> jardan 11</h2>
                                    <p style="font-size: 13px; margin-top: -10px;">Sep 10, 2021 11:32 AM</p>
                                </div>
                                <div class="col-4">
                                    <img src="{{ asset('/assets/images/logo-01.png') }}" style="    height: 84px;" alt="">
                                </div>



                            </div>
                        </div>
                    </div>

                </div>

            </div>
            <div class="col-lg-4">

                <div class="image-wrap-2" style=" border-radius: 22px;">
                    <div class="image-info">
                        {{-- <h2 class="mb-3">Nature</h2> --}}
                        <a href="{{ url('/single') }}" class="btn btn-outline-white py-2 px-4">More Photos</a>
                    </div>
                    <button class="mt-3 ml-3 btn btn-danger" style="position: absolute;    border-radius: 8px;z-index: 100; ">
                        NO Pass
                    </button>
                    <div>


                        <img src="{{ asset('/assets/images/demo/category-3.jpg') }}" style="
                        max-height: 313px;
                     width: fit-content;" alt="Image" class="img-fluid">
                        <div style="background:white; padding:15px;max-height: 156px;">
                            <div class="row">
                                <div class="col-8">


                                    #751163
                                    <br>

                                    <h2 style="color: black;">Air jardan</h2>
                                    <h2 style="color: black; margin-top: -7px;"> jardan 11</h2>
                                    <p style="font-size: 13px; margin-top: -10px;">Sep 10, 2021 11:32 AM</p>
                                </div>
                                <div class="col-4">
                                    <img src="{{ asset('/assets/images/logo-01.png') }}" style="    height: 84px;" alt="">
                                </div>



                            </div>
                        </div>
                    </div>

                </div>

            </div>

            <div class="col-lg-4">

                <div class="image-wrap-2" style=" border-radius: 22px;">
                    <div class="image-info">
                        {{-- <h2 class="mb-3">Nature</h2> --}}
                        <a href="{{ url('/single') }}" class="btn btn-outline-white py-2 px-4">More Photos</a>
                    </div>
                    <button class="mt-3 ml-3 btn btn-danger" style="position: absolute;    border-radius: 8px;z-index: 100; ">
                        NO Pass
                    </button>
                    <div>


                        <img src="{{ asset('/assets/images/demo/category-3.jpg') }}" style="
                        max-height: 313px;
                     width: fit-content;" alt="Image" class="img-fluid">
                        <div style="background:white; padding:15px;max-height: 156px;">
                            <div class="row">
                                <div class="col-8">


                                    #751163
                                    <br>

                                    <h2 style="color: black;">Air jardan</h2>
                                    <h2 style="color: black; margin-top: -7px;"> jardan 11</h2>
                                    <p style="font-size: 13px; margin-top: -10px;">Sep 10, 2021 11:32 AM</p>
                                </div>
                                <div class="col-4">
                                    <img src="{{ asset('/assets/images/logo-01.png') }}" style="    height: 84px;" alt="">
                                </div>



                            </div>
                        </div>
                    </div>

                </div>

            </div>

            <div class="col-lg-4">

                <div class="image-wrap-2" style=" border-radius: 22px;">
                    <div class="image-info">
                        {{-- <h2 class="mb-3">Nature</h2> --}}
                        <a href="{{ url('/single') }}" class="btn btn-outline-white py-2 px-4">More Photos</a>
                    </div>
                    <button class="mt-3 ml-3 btn btn-danger" style="position: absolute;    border-radius: 8px;z-index: 100; ">
                        Pass
                    </button>
                    <div>


                        <img src="{{ asset('/assets/images/img_6.jpg') }}" style="
                        max-height: 313px;
                     width: fit-content;" alt="Image" class="img-fluid">
                        <div style="background:white; padding:15px;max-height: 156px;">
                            <div class="row">
                                <div class="col-8">


                                    #751163
                                    <br>

                                    <h2 style="color: black;">Air jardan</h2>
                                    <h2 style="color: black; margin-top: -7px;"> jardan 11</h2>
                                    <p style="font-size: 13px; margin-top: -10px;">Sep 10, 2021 11:32 AM</p>
                                </div>
                                <div class="col-4">
                                    <img src="{{ asset('/assets/images/logo-01.png') }}" style="    height: 84px;" alt="">
                                </div>



                            </div>
                        </div>
                    </div>

                </div>

            </div>


            {{-- <div class="col-lg-4">
          <div class="image-wrap-2">
            <div class="image-info">
              <h2 class="mb-3">Travel</h2>
              <a href="{{url('/single')}}" class="btn btn-outline-white py-2 px-4">More Photos</a>
            </div>
            <img src="{{asset('/assets/images/img_7.jpg')}}" alt="Image" class="img-fluid">
          </div>
        </div>

        <div class="col-lg-4">
          <div class="image-wrap-2">
            <div class="image-info">
              <h2 class="mb-3">People</h2>
              <a href="{{url('/single')}}" class="btn btn-outline-white py-2 px-4">More Photos</a>
            </div>
            <img src="{{asset('/assets/images/img_3.jpg')}}" alt="Image" class="img-fluid">
          </div>
        </div>

        <div class="col-lg-4">
          <div class="image-wrap-2">
            <div class="image-info">
              <h2 class="mb-3">Architecture</h2>
              <a href="{{url('/single')}}" class="btn btn-outline-white py-2 px-4">More Photos</a>
            </div>
            <img src="{{asset('/assets/images/img_4.jpg')}}" alt="Image" class="img-fluid">
          </div>
        </div> --}}

        </div>



    </div>

    <div class="footer py-4">

    </div>


    <!-- Button trigger modal -->







@endsection
