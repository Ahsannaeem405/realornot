
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
                <h2 class="site-section-heading text-center"> Product Detail</h2>
              </div>
            </div>
          </div>

        </div>

        <div class="row">
          <div class="col-lg-6 mb-5">
            <img src="{{ asset('/assets/images/img_6.jpg') }}" style=" border-radius: 25px;   width: 77%;" alt="">
          </div>
          <div class="col-lg-6 ml-auto">
            <div class="mb-3">
              <h3 class="mb-0 font-weight-bold text-white"> Product Name</h3>
              <p class="mb-4" style="font-size: 20px;" > <a href="#">Air jardan </a></p>

              <p class="mb-0 font-weight-bold text-white">SKU</p>
              <p class="mb-4"><a href="#">#1067PS

            </a></p>

              <p class="mb-0 font-weight-bold text-white">Job ID</p>
              <p class="mb-0"><a href="#">#1123

            </a></p>

            <p class="mb-0 font-weight-bold text-white">Brand</p>
            <p class="mb-0"><a href="#">Nike
                <p class="mb-0 font-weight-bold text-white">Description</p>
            <p class="mb-0"><a href="#">Based on the pictures submitted and our expert experience. We are confident that this bag is consistent with an authentic Chanel brand.

          </a></p>
          <br><br>



          <select name="" id="" class="form-control">

            <option value="" style="background: black">Approve</option>
            <option value="" style="background: black">Turn Down</option>
          </select>

        </a></p>



            <label for="">Comment</label>
            <textarea name="Comment" id="" class="form-control" cols="10" rows="3"></textarea>

          </select>
        </a></p>


        <a href="" type="" class="btn btn-primary" > Submit </a>

      </select>
    </a></p>

            </div>

          </div>
        </div>
      </div>
    </div>

    <div class="footer py-4">

    </div>





  </div>

  @endsection
