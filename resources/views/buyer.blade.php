
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
          <div class="col-12 mb-5">
              <div class="container" style="width: 69%;">


                <form method="POST">
                    @csrf


              <div class="row form-group">

                <div class="col-md-12">
                  <label class="text-white" for="email">Name</label>
                  <input id="Name" type="text" class="form-control "  name="Name" value="{{ old('Name') }}" required>

                </div>
              </div>

              <div class="row form-group">

                <div class="col-md-12">
                  <label class="text-white" for="subject">Email</label>
                  <input id="Zip" type="Email" class="form-control" name="Email" >

                </div>
              </div>


              <div class="row form-group">

                <div class="col-md-12">
                  <label class="text-white" for="subject">Phone</label>
                  <input id="Photos" type="text" class="form-control" name="Phone" required >

                </div>
              </div>



              <div class="row form-group">
                <div class="col-md-12">
                    <a href=""  data-toggle="modal" data-target="#submitAuth"  type="submit" class="btn btn-primary">
                        {{ __('Submit') }}
                    </a>


                </div>
              </div>


              <div class="row form-group">
                <div class="col-6">
                    <a href="{{url('/authenticate')}}" type="submit" class="btn btn-danger">
                        <img style="height:     width: 24px; height: 23px;" src="{{asset('/assets/images/facebook.png')}}" alt="">

                   Login With Facebbok
                    </a>
                </div>
           <div class="col-6">

                    <a href="{{url('/authenticate')}}" type="submit" class="btn btn-danger">
                        <img style="height:     width: 24px; height: 23px;" src="{{asset('/assets/images/google.jpg')}}" alt="">

                        Login With Google
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

    <div class="modal fade" id="submitAuth" tabindex="-1" role="dialog" aria-labelledby="signUpLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel" style="text-align: center;font-size: 24px;">Register</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body" style="text-align: center">
                <a href="#" type="button" style="    width: -webkit-fill-available;" class="btn btn-primary">Authentication</a><p></p>
                <a href="{{url('/authenticate')}}" type="button" style="    width: -webkit-fill-available;" class="btn btn-danger">Seller/Store in paying</a><p></p>

              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
              </div>
            </div>
          </div>
      </div>






  </div>

  @endsection
