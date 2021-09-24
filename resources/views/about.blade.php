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

        <?php
     use App\Models\Express;
        $express = Express::get();
        $expr = Express::get()->count();


?>







        <div class="container" style="margin-top: 30px" data-aos="fade" data-aos-delay="500">
            <h1 style="text-align: center;">Latest Authentication</h1>
            <br>
            <div class="row" style="margin-left: 27px;margin-right: 27px;">
                @if ($expr > 0)

                @foreach ( $express as  $expresss )

                    <div class="col-lg-4">

                        <div class="image-wrap-2" style=" border-radius: 22px;">
                            <div class="image-info">
                                {{-- <h2 class="mb-3">Nature</h2> --}}
                                <a href="{{ url('/products') }}" class="btn btn-outline-white py-2 px-4">More Photos</a>
                            </div>

                            @if($expresss->admin_expert == 'No Pass')
                            <button class="mt-3 ml-3 btn btn-danger"
                            style="position: absolute;    border-radius: 8px;z-index: 100; ">
                               No pass
                            </button>
                            @elseif($expresss->status_expert == '2')
                            <button class="mt-3 ml-3 btn btn-danger"
                            style="position: absolute;  background:#37b649; border-color:#37b649;  border-radius: 8px;z-index: 100; ">
                            pass
                        </button>
                            @else
                            <button class="mt-3 ml-3 btn btn-danger"
                            style="position: absolute;    border-radius: 8px;z-index: 100; ">
                            Pending
                        </button>

                        </button>

                            @endif
                            <div>
                                <?php
                        $str_arr = explode (",", $expresss->photos);

                                    ?>
                                    {{-- @dd( $str_arr[0]) --}}

                                <img src="{{ asset('/uploads/'. $str_arr[0]) }}" style=" max-height: 313px;min-height: 313px; width: fit-content;" alt="Image" class="img-fluid">
                                <div style="background:white; padding:15px;max-height: 156px;">
                                    <div class="row">
                                        <div class="col-8">


                                         {{$expresss->zip_No}}
                                            <br>

                                            <h2 style="color: black;">  {{$expresss->Brand->brand_name}}</h2>
                                            {{-- <h2 style="color: black; margin-top: -7px;"> jardan 11</h2> --}}
                                            <p style="font-size: 13px; margin-top: -10px;">{{$expresss->created_at}}</p>
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
                    @endforeach

                    @else
                    <div class="col-12">
                        <h1 class=" text-center" style="    margin-top: 37px;"> No Products Yet</h1>

                    </div>


                @endif




            </div>



        </div>

        <div class="footer py-4">

        </div>





    </div>
@endsection
