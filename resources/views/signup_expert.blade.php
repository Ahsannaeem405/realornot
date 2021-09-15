
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
<style>
    ::-webkit-calendar-picker-indicator {
    filter: invert(1);
}
</style>
<?php
use App\Models\Brand;
$brand = Brand::all();

?>

    <div class="site-section"  data-aos="fade">
      <div class="container">

        <div class="row justify-content-center">

          <div class="col-md-7">
            <div class="row mb-5">
              <div class="col-12 ">
                <h2 class="site-section-heading text-center">Signup Expert</h2>
              </div>
            </div>
          </div>

        </div>

        <div class="row">
          <div class="col-12 mb-5">
              <div class="container" style="width: 69%;">


                <form method="POST" action="{{url('/register_buyer')}}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" value="pending" name="expert_status">


              <div class="row form-group">

                <div class="col-md-12">
                  <label class="text-white" for="email">Name</label>
                  <input id="Name" type="text " placeholder="Name" class="form-control "  name="name" value="{{ old('Name') }}" required>

                </div>
              </div>

              <div class="row form-group">

                <div class="col-md-12">
                  <label class="text-white" for="subject">Email</label>
                  <input id="Email" type="Email" placeholder="Email"  class="form-control" name="email" >

                </div>
              </div>


              <div class="row form-group">

                <div class="col-md-12">
                  <label class="text-white" for="subject">Resume Upload</label>
                  <input id="Resume" type="file" placeholder="Resume Upload" class="form-control" name="Resume" required >

                </div>
              </div>



              <div class="row form-group">

                <div class="col-md-12">
                  <label class="text-white" for="subject">Best Time For Interview</label>
                  <input id="Interview_time" type="datetime-local" placeholder="Interview Time" class="form-control" name="Interview_time" required >

                </div>
              </div>

              <div class="row form-group">

                <div class="col-md-12">
                  <label class="text-white" for="subject">Brand Expert In</label>
                  <select name="brand_expert" id="" class="form-control">
                      @foreach ($brand as $brands )


                      <option id="brand_expert"  style="background:black" value="{{ $brands->id}}" required>{{ $brands->brand_name}}</option>
                      @endforeach
                  </select>
                  {{-- <input id="brand_expert" type="text" class="form-control" name="brand_expert" required > --}}

                </div>
              </div>

              <div class="row form-group">

                <div class="col-md-12">
                  <label class="text-white" for="subject">Password</label>
                  <input type="hidden" name="role"  value="expert" id="expert">
                  <input id="password" type="text" placeholder="Password" class="form-control" name="password" required >

                </div>
              </div>


              <div class="row form-group">
                <div class="col-md-12">
                    <input type="submit" value="Submit" class="btn btn-primary">




                </div>
              </div>


              <div class="row form-group">
                <div class="col-lg-6 col-md-6 col-sm-12" style="margin-bottom:10px">
                    <a href="{{url('/auth/facebook')}}"  type="button" style="background: #4267b2; border:none;" class="btn btn-danger">
                        <img style=" -webkit-filter: grayscale(0);
                        -webkit-transform: scale(1.01);     border-radius: 4px; width: 24px; height: 23px;" src="{{asset('/assets/images/facebook.png')}}" alt="">
            <span style="font-size: 12px;"> Login With Facebbok</span>

                    </a>
                </div>
           <div class="col-lg-6 col-md-6 col-sm-12">

                    <a href="{{url('/authGoogle')}}" id="google" type="button"  style="background:#4285f4;border:none" class="btn btn-danger">
                        <img style="width: 24px;  height: 23px;  -webkit-filter: grayscale(0);
                        -webkit-transform: scale(1.01);     border-radius: 4px;" src="{{asset('/assets/images/google.jpg')}}" alt="">

                        <span style="   font-size: 12px;">    Login With Google</span>
                         </a>

                </div>
              </div>


            </form>
        </div>
          </div>

        </div>
      </div>
    </div>

    <div class="footer py-4">

    </div>





  </div>



  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script>
  $(document).ready(function(){

      $("#google").click(function(){
          @php
          Session::put('role' , 'expert');
          @endphp

  });
  });
  </script>



  @endsection
