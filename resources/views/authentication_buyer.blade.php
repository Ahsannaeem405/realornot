

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
                <h2 class="site-section-heading text-center">Buyer</h2>
              </div>
            </div>
          </div>

        </div>

        <div class="row">
          <div class="col-md-5" style="    border: solid;     margin-left: 13px;     margin-bottom: 13px;    margin-right: 13px;
          border-color: white;
          padding: 80px">

                <div class="image-wrap-2" style=" border-radius: 22px;">
                    <div class="image-info">
                        {{-- <h2 class="mb-3">Nature</h2> --}}
                        <a href="#"  data-toggle="modal" data-target="#Authentication" class="btn btn-outline-white py-2 px-4">Authenticate</a>
                    </div>

                    <div>


                    </div>

                </div>


          </div>
          <div class="col-md-1">

          </div>
          <div class="col-md-5" style="    border: solid;     margin-left: 13px;   margin-bottom: 13px;   margin-right: 13px;
          border-color: white;
          padding: 80px">
            <div class="image-wrap-2" style=" border-radius: 22px;">
            <div class="image-info">
                {{-- <h2 class="mb-3">Nature</h2> --}}
                <a href="{{ url('/StoreExpress') }}" class="btn btn-outline-white py-2 px-4">Seller/Store in paying</a>
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

