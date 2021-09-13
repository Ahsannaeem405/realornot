
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
                <h2 class="site-section-heading text-center">Express</h2>
              </div>
            </div>
          </div>

        </div>

        <div class="row">
          <div class="col-12 mb-5">
              <div class="container" style="width: 69%;">

                @if(session()->has('success'))
                <div style="    background: black;color: red;" class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
            @endif
            <?php

            // $paymentId = null;
            // if(isset('paymentId'))
            // {
            //     $paymentId =   $_GET['paymentId'];
            // }


            ?>
            {{-- <input type="text" name="paymentId" value="<?php echo $paymentID; ?>" id="paymentID"> --}}

            {{-- @if($paymentId)
            <div style="    background: black;color: red;" class="alert alert-success">
                {{'Payment is successful' }}
            </div>
                @endif --}}





                <form method="POST"action="{{route('Store_express')}}" enctype="multipart/form-data" >
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
                  <input id="Zip" type="text" class="form-control" name="zip_No" >

                </div>
              </div>


              <div class="row form-group">

                <div class="col-md-12">
                  <label class="text-white" for="subject">Photos</label>
                  <input id="Photos" type="file" class="form-control" name="photos" required >

                </div>
              </div>



              <div class="row form-group">

                <div class="col-md-12">
                  <label class="text-white" for="subject">Videos</label>
                  <input id="Videos" type="file" class="form-control" name="videos" required >

                </div>
              </div>
              <input type="hidden" name="role" value="express" id="">


              <input type="radio" class="" checked id="Stripe" name="Paymentype" value="Stripe">  Pay with Stripe <br>

              <input type="radio" id="paypal" name="Paymentype" value="paypal">    Pay with paypal

              <div class="row form-group" style="    margin-top: 14px;">
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

  <script>
   $( document ).ready(function() {
       alert('ii');
    $("#Stripe").click(function(){
        $( "#Stripe" ).html( $( "input:checked" ).val() + " is checked!" );
    });
});
</script>

  @endsection
