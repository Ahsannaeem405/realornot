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

<?php
use App\Models\Express;
$express = Express::get();

?>




        <div class="container" style="margin-top: 30px" data-aos="fade" data-aos-delay="500">
            <h1 style="text-align: center;"> Authentication</h1>
            <br>
            <div class="row" style="margin-left: 27px;margin-right: 27px;">
                @foreach ($express as $expresss )
                @if($expresss->status_expert == 2 && $expresss->role != 'buyer' )




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

                            <img src="{{ asset('/uploads/'.$expresss->photos) }}" style="
                            max-height: 313px;
                            min-height: 313px;
                         width: fit-content;" alt="Image" class="img-fluid">
                            <div style="background:white; padding:15px;max-height: 156px;">
                                <div class="row">
                                    <div class="col-8">
                                      {{  $expresss->zip_No}}
                                        <br>

                                        <h2 style="color: black;">{{$expresss->Brand->brand_name}}</h2>
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
