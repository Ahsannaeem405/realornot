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
        <div class="swiper-container" style=" margin-top: 13px; ">
            {{-- <div class="swiper-wrapper"> --}}
                {{-- <div class="swiper-slide"> --}}

                    <div class="image image-overlay image-zoom"
                        style="background-image:url({{ asset('assets/header8.jpg') }});     height: 82%;" ></div>
                    <div class="container">
                        <div class="row align-items-center vh-100">
                            <div class="col-lg-7 col-md-7 col-sm-12 text-white" style="    text-align: center;"
                                id="wetrustTop" data-swiper-parallax-x="-100%">
                                <h1 class=" mt-1 mb-3 font-weight-light" id="wetrust" style="
                                    font-size: 48px;"><b> Authenticated Products <br>
                                     </b></h1>


                            </div>


                        </div>
                    </div>
                {{-- </div> --}}

            {{-- </div> --}}




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
                        <button class="mt-3 ml-3 btn btn-danger"
                            style="position: absolute;    border-radius: 8px;z-index: 100; ">
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
                                        <img src="{{ asset('/assets/images/logo-01.png') }}" style="    height: 84px;"
                                            alt="">
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
                        <button class="mt-3 ml-3 btn btn-danger"
                            style="position: absolute;    border-radius: 8px;z-index: 100; ">
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
                                        <img src="{{ asset('/assets/images/logo-01.png') }}" style="    height: 84px;"
                                            alt="">
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
                        <button class="mt-3 ml-3 btn btn-danger"
                            style="position: absolute;    border-radius: 8px;z-index: 100; ">
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
                                        <img src="{{ asset('/assets/images/logo-01.png') }}" style="    height: 84px;"
                                            alt="">
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
                        <button class="mt-3 ml-3 btn btn-danger"
                            style="position: absolute;    border-radius: 8px;z-index: 100; ">
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
                                        <img src="{{ asset('/assets/images/logo-01.png') }}" style="    height: 84px;"
                                            alt="">
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
                        <button class="mt-3 ml-3 btn btn-danger"
                            style="position: absolute;    border-radius: 8px;z-index: 100; ">
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
                                        <img src="{{ asset('/assets/images/logo-01.png') }}" style="    height: 84px;"
                                            alt="">
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
                        <button class="mt-3 ml-3 btn btn-danger"
                            style="position: absolute;    border-radius: 8px;z-index: 100; ">
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
                                        <img src="{{ asset('/assets/images/logo-01.png') }}" style="    height: 84px;"
                                            alt="">
                                    </div>



                                </div>
                            </div>
                        </div>

                    </div>

                </div>




            </div>



        </div>

        <div class="footer py-4">

        </div>





    </div>
@endsection
