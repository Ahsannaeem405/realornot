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




    </div>

<?php
use App\Models\Express;

$expres = Express::where('name', Auth::user()->brand_expert)->get();
?>



    <div class="container" style="margin-top: 10px" data-aos="fade" data-aos-delay="500">
        <h1 style="text-align: center">  Expert Related Job</h1>
        <br>
        <br>
        <div class="row" style="margin-left: 27px;margin-right: 27px;">
            @foreach ($expres as $express )

            @if($express->role != 'buyer' && $express->status_expert != '2' && $express->admin_expert != 'No Pass')
            @if(isset($express->Brand->id))
            @if($express->Brand->id ==  $express->name)




            <div class="col-lg-4">

                <div class="image-wrap-2" style=" border-radius: 22px;">
                    <div class="image-info">
                        {{-- <h2 class="mb-3">Nature</h2> --}}
                        <a href="{{ url('/Detail',[$express->id])}}" class="btn btn-outline-white py-2 px-4">More Detail</a>
                    </div>

                    <div>


                        <img src="{{asset('/uploads/'.$express->photos) }}" style="
                        max-height: 313px;
                        min-height: 313px;
                     width: fit-content;" alt="Image" class="img-fluid">
                        <div style="background:white; padding:15px;max-height: 156px; min-height: 156px;">
                            <div class="row">
                                <div class="col-8">


                                   {{$express->zip_No}}
                                    <br>

                                    <h2 style="color: black;">  {{$express->zip_No}}</h2>
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
            @endif

            @endif
            @endif
            @endforeach


            {{-- <div class="col-lg-4">

                <div class="image-wrap-2" style=" border-radius: 22px;">
                    <div class="image-info">

                        <a href="{{ url('/Detail') }}" class="btn btn-outline-white py-2 px-4">More Detail</a>
                    </div>

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

                        <a href="{{ url('/Detail') }}" class="btn btn-outline-white py-2 px-4">More Detail</a>
                    </div>

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

                        <a href="{{ url('/Detail') }}" class="btn btn-outline-white py-2 px-4">More Detail</a>
                    </div>

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

                        <a href="{{ url('/Detail') }}" class="btn btn-outline-white py-2 px-4">More Detail</a>
                    </div>

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

                        <a href="{{ url('/Detail') }}" class="btn btn-outline-white py-2 px-4">More Detail</a>
                    </div>

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

            </div> --}}


        </div>



    </div>

    <div class="footer py-4">

    </div>


    <!-- Button trigger modal -->







@endsection
