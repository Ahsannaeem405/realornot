
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
                <h2 class="site-section-heading text-center">Seller</h2>
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
                  <label class="text-white" for="fname">Name</label>
                  <input id="name" type="text " placeholder="Name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

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
                  <input id="email" type="email" placeholder="Email"  class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                  @error('email')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </div>
              </div>



              <div class="row form-group">

                <div class="col-md-12">
                  <label class="text-white" for="email">Phone Number</label>
                  <input id="Phone" type="text" placeholder="Phone Number" class="form-control" name="Phone" value="{{ old('Phone') }}">


                </div>
              </div>



              <div class="row form-group">

                <div class="col-md-12">
                  <label class="text-white" for="email">Store Name</label>
                  <input id="store_name" type="text" placeholder="Store Name" class="form-control" name="store_name" value="{{ old('store_name') }}">

                </div>
              </div>


              <div class="row form-group">

                <div class="col-md-12">
                  <label class="text-white" for="email">Address</label>
                  <input id="address" type="text" placeholder="Address" class="form-control" name="address" value="{{ old('address') }}">

                </div>
              </div>



              <div class="row form-group">

                <div class="col-md-12">
                    <input type="hidden" name="role" value="seller" id="">
                  <label class="text-white" for="subject">Password</label>
                  <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                  @error('password')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </div>
              </div>
{{--
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-white" for="message">Confirm Password</label>
                  <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                </div>
              </div> --}}

              <div class="row form-group">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Register') }}
                    </button>
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
          Session::put('role' , 'seller');
          @endphp

  });
  });
  </script>

  @endsection
