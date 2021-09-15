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


    <div class="site-section"  data-aos="fade">
      <div class="container">

        <div class="row justify-content-center">

          <div class="col-md-7">
            <div class="row mb-5">
              <div class="col-12 ">
                <h2 class="site-section-heading text-center">My Products</h2>
              </div>
            </div>
          </div>

        </div>
        <?php
     use App\Models\Express;


        $express = Express::where('userId', Auth::user()->id)->get();

?>
{{-- @dd($express) --}}

        <div class="row" id="lightgallery">
            @foreach ( $express as  $expresss )

                <div class="col-lg-4">

                    <div class="image-wrap-2" style=" border-radius: 22px;">
                        <div class="image-info">
                            {{-- <h2 class="mb-3">Nature</h2> --}}
                            <a href="{{ url('/products') }}" class="btn btn-outline-white py-2 px-4">More Photos</a>
                        </div>
                        @if($expresss->status_expert == '2')
                        <button class="mt-3 ml-3 btn btn-danger"
                            style="position: absolute;  background:#37b649; border-color:#37b649;  border-radius: 8px;z-index: 100; ">
                            Pass
                        </button>
                        @else
                        <button class="mt-3 ml-3 btn btn-danger"
                        style="position: absolute;    border-radius: 8px;z-index: 100; ">
                        No pass
                    </button>

                        @endif
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
                @endforeach

        </div>
      </div>
    </div>




  </div>


  @endsection
