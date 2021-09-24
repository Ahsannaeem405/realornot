
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




    <link rel="stylesheet" href="{{asset('/css/tiny-slider.css')}}"/>

    <link href="{{asset('/css/style.css')}}" rel="stylesheet" type="text/css" id="theme-opt" />



    <section class="section">
        <div class="container">
            <div class="row align-items-center">
                @foreach ($express as  $expresss)


                <div class="col-md-6">
                    <div class="tiny-single-item">





                        <?php
                        $str_arr = explode (",", $expresss->photos);

                                         ?>
                                          @foreach ( $str_arr as $myArra )
                                          @if ($myArra != "")
                        <div class="tiny-slide">

                            @if($expresss->admin_expert == 'No Pass')
                            <button class="mt-3 ml-3 btn btn-danger"
                            style="position: absolute;    border-radius: 8px;z-index: 100; ">
                               No pass
                            </button>
                            @elseif($expresss->status_expert == '2')
                            <button class="mt-3 ml-3 btn"
                            style="position: absolute; color:white;  background:#37b649; border-color:#37b649;  border-radius: 8px;z-index: 100; ">
                            pass
                        </button>
                            @else
                            <button class="mt-3 ml-3 btn btn-danger"
                            style="position: absolute;    border-radius: 8px;z-index: 100; ">
                            Pending
                        </button>

                        </button>

                            @endif


                            <img src="  {{ asset('/uploads/'.$myArra) }}" class="img-fluid rounded" alt="">



                        </div>
                        @endif
                        @endforeach
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="col-lg-6 " style="padding-left: 30px">



                        <div class="mb-3">
                            <h3 class="mb-0 font-weight-bold text-white"> Brand</h3>
                            <p class="mb-4" style="font-size: 20px;"> <a href="#"> {{ $expresss->Brand->brand_name }} </a></p>

                            <p class="mb-0 font-weight-bold text-white">SKU</p>
                            <p class="mb-4"><a href="#">{{ $expresss->zip_No }}

                                </a></p>

                            <p class="mb-0 font-weight-bold text-white">Job ID</p>
                            <p class="mb-0"><a href="#">{{ $expresss->id }}

                                </a></p>
                            {{-- @dd($product->Brand->brand_name) --}}

                            <p class="mb-0 font-weight-bold text-white">Brand</p>
                            <p class="mb-0"><a href="#">{{ $expresss->Brand->brand_name }}
                                    <p class="mb-0 font-weight-bold text-white">Comment</p>
                                    <p class="mb-0"><a href="#">{{ $expresss->comment }}

                                        </a></p>
                                    <br><br>






        </div>
                </div><!--end col-->
                @endforeach
            </div><!--end row-->
        </div><!--end container-->


    </section><!--end section-->
    <!-- Gallery End -->




    <script src="{{asset('/js/tiny-slider.js')}} "></script>


    <script src="{{asset('/js/plugins.init.js')}}"></script>


@endsection
