
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
                <h2 class="site-section-heading text-center">Edit Expert Profile</h2>
              </div>
            </div>
          </div>

        </div>
        

        <div class="row">
          <div class="col-12 mb-5">
              <div class="container" style="width: 69%;">


                <form method="POST" action="{{url('/expert_profile_update')}}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" value="expert" name="role">
                      <input type="hidden" name="idd"value="{{$users->id}}" >
        

              <div class="row form-group">

                <div class="col-md-12">
                  <label class="text-white" for="email">Name</label>
                  <input id="Name" type="text " placeholder="Name" class="form-control "  name="name" value="{{ $users->name}}" required>


                </div>
              </div>

              <div class="row form-group">

                <div class="col-md-12">
                  <label class="text-white" for="subject">Email</label>
                  <input id="Email" type="Email" placeholder="Email"  class="form-control" name="email" value="{{ $users->email}}" required>

                </div>
              </div>


              <div class="row form-group">

                <div class="col-md-12">
                  <label class="text-white" for="subject">Password</label>
                  <input type="hidden" name="role"  value="expert" id="expert">
                  <input id="password" type="password" placeholder="Password" class="form-control" name="password" required>

                </div>
              </div>
              <div class="row form-group">

                <div class="col-md-12">
                  <label class="text-white" for="subject">Stripe Public Key</label>
                  <input type="hidden" name="role"  value="expert" id="expert">
                  <input id="stripepublickey" type="text" placeholder="Stripe Public Key" class="form-control" name="stripepublickey" required>

                </div>
              </div>
              <div class="row form-group">

                <div class="col-md-12">
                  <label class="text-white" for="subject">Stripe Secret Key</label>
                  <input type="hidden" name="role"  value="expert" id="expert">
                  <input id="stripesecertkey" type="text" placeholder="Stripe Secrete Key" class="form-control" name="stripesecretekey" required>

                </div>
              </div>
              <div class="row form-group">

                <div class="col-md-12">
                  <label class="text-white" for="subject">PayPal Email</label>
                  <input type="hidden" name="role"  value="expert" id="expert">
                  <input id="paypalemail" type="email" placeholder="PayPal Eamil " class="form-control" name="paypalemail" required>

                </div>
              </div>



              <div class="row form-group">
                <div class="col-md-12">
                    <input type="submit" value="UPDATE" class="btn btn-primary">




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


