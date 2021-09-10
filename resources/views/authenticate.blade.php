
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
                <h2 class="site-section-heading text-center">Authenticate</h2>
              </div>
            </div>
          </div>

        </div>

        <div class="row">
          <div class="col-12 mb-5">
              <div class="container" style="width: 69%;">


                <form method="POST">
                    @csrf


              <div class="row form-group">

                <div class="col-md-12">
                  <label class="text-white" for="email">Brand name</label>
                  <input id="Brand" type="text" class="form-control "  name="Brand" value="{{ old('Brand') }}" required>

                </div>
              </div>

              <div class="row form-group">

                <div class="col-md-12">
                  <label class="text-white" for="subject">Zip Number</label>
                  <input id="Zip" type="text" class="form-control" name="password" >

                </div>
              </div>


              <div class="row form-group">

                <div class="col-md-12">
                  <label class="text-white" for="subject">Photos</label>
                  <input id="Photos" type="file" class="form-control" name="Photos" required >

                </div>
              </div>



              <div class="row form-group">

                <div class="col-md-12">
                  <label class="text-white" for="subject">Videos</label>
                  <input id="Videos" type="file" class="form-control" name="Videos" required >

                </div>
              </div>


              <div class="row form-group">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Submit') }}
                    </button>


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
