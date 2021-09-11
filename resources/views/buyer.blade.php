
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



                <form method="POST" action="{{ route('register_buyer') }}">
                    @csrf


                    <div class="row form-group">
                        <div class="col-md-12">
                          <label class="text-white" for="fname"> Name</label>
                          <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                          @error('name')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                        </div>

                      </div>

              <div class="row form-group">

                <div class="col-md-12">
                  <label class="text-white" for="email">Email</label>
                  <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                  @error('email')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </div>
              </div>


              <div class="row form-group">

                <div class="col-md-12">
                  <label class="text-white" for="subject">Phone</label>
                  <input id="Phone" type="text" class="form-control" name="Phone" required >

                </div>
              </div>


              <div class="row form-group">

                <div class="col-md-12">
                  <label class="text-white" for="subject">Password</label>
                  <input type="hidden" name="role" value="buyer" id="">
                  <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                  @error('password')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </div>
              </div>




              <div class="row form-group">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Register') }}
                    </button>
                </div>
              </div>




{{--
              <div class="row form-group">
                <div class="col-md-12">
                    <a href=""  data-toggle="modal" data-target="#submitAuth"  type="submit" class="btn btn-primary">
                        {{ __('Submit') }}
                    </a>


                </div>
              </div> --}}


              <div class="row form-group">
                <div class="col-lg-6 col-md-6 col-sm-12" style="margin-bottom:10px">
                    <a href="{{url('/auth/facebook')}}"  type="button" style="background: #4267b2; border:none;" class="btn btn-danger">
                        <img style=" -webkit-filter: grayscale(0);
                        -webkit-transform: scale(1.01);     border-radius: 4px; width: 24px; height: 23px;" src="{{asset('/assets/images/facebook.png')}}" alt="">
<span style="font-size: 12px;"> Login With Facebbok</span>

                    </a>
                </div>
           <div class="col-lg-6 col-md-6 col-sm-12">

                    <a href="{{url('/authGoogle')}}" type="button"  style="background:#4285f4;border:none" class="btn btn-danger">
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
