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


        <div class="swiper-container" style=" margin-top: 13px;">
            <div class="swiper-wrapper">
                <div class="swiper-slide">

                    <div class="image image-overlay image-zoom"
                        style="background-image:url ('{{asset('assets/background-1.jpg') }}')"></div>
                    <div class="container">
                        <div class="row align-items-center vh-100">
                            <div class="col-lg-8 text-white" data-swiper-parallax-x="-100%">
                                <h1 class="display-1 mt-1 mb-3 font-weight-light">Fashion Week <b
                                        class="d-block">Lookbook '19</b></h1>
                                <a href="listing-full.html" class="btn btn-sm btn-white btn-action">Shop Now <span
                                        class="icon-arrow-right"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="image image-overlay image-zoom"
                        style="background-image:url ('{{ asset('assets/background-2.jpg') }}')"></div>
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
        <h1 style="text-align: center;">Latest Photos</h1>
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
