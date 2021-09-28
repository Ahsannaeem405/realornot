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
<hr style="    background: white;">
              </div>
            </div>
          </div>

        </div>
        <?php
     use App\Models\Express;


        $express = Express::where('userId', Auth::user()->id)->get();
        $expr = Express::where('userId', Auth::user()->id)->count();

?>
{{-- @dd($expr ) --}}

        <div class="row" id="lightgallery">
            @if ($expr > 0)

            @foreach ( $express as  $expresss )

                <div class="col-lg-4">

                    <div class="image-wrap-2" style=" border-radius: 22px;">
                        <div class="image-info">
                            {{-- <h2 class="mb-3">Nature</h2> --}}
                            <a href="{{ url('/Detail_Product', $expresss->id) }}" class="btn btn-outline-white py-2 px-4">Detail</a>
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

                            <img src="{{ asset('/uploads/'.$str_arr[0]) }}" style=" max-height: 313px;min-height: 313px; width: fit-content;" alt="Image" class="img-fluid">
                            <div style="background:white; padding:15px;max-height: 156px;">
                                <div class="row">
                                    <div class="col-8">


                                     {{$expresss->zip_No}}
                                        <br>

                                        <h2 style="color: black;"> @if(isset($expresss->Brand->brand_name)) {{$expresss->Brand->brand_name}} @endif</h2>
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
    </div>




  </div>


  @endsection
