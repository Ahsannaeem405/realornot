
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


              <div class="row form-group">

                <div class="col-md-12">
                  <label class="text-white" for="email">Name</label>
                  <input id="Name" type="text" class="form-control "  name="name" value="{{ old('Name') }}" required>

                </div>
              </div>

              <div class="row form-group">

                <div class="col-md-12">
                  <label class="text-white" for="subject">Email</label>
                  <input id="Email" type="Email" class="form-control" name="email" >

                </div>
              </div>


              <div class="row form-group">

                <div class="col-md-12">
                  <label class="text-white" for="subject">Resume Upload</label>
                  <input id="Resume" type="file" class="form-control" name="Resume" required >

                </div>
              </div>



              <div class="row form-group">

                <div class="col-md-12">
                  <label class="text-white" for="subject">Best Time For Interview</label>
                  <input id="Interview_time" type="datetime-local" class="form-control" name="Interview_time" required >

                </div>
              </div>

              <div class="row form-group">

                <div class="col-md-12">
                  <label class="text-white" for="subject">Brand Expert In</label>
                  <input id="brand_expert" type="text" class="form-control" name="brand_expert" required >

                </div>
              </div>

              <div class="row form-group">

                <div class="col-md-12">
                  <label class="text-white" for="subject">Password</label>
                  <input type="hidden" name="role" value="expert" id="expert">
                  <input id="password" type="text" class="form-control" name="password" required >

                </div>
              </div>


              <div class="row form-group">
                <div class="col-md-12">
                    <input type="submit" value="Submit" class="btn btn-primary">




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

  @endsection
