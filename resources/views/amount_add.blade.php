
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
          @if (Session::has('success'))
<div class="alert alert-success" role="alert" >
  <button type="button" class="close" data-dismiss="alert">×</button> 
        <strong>{{Session::get('success')}}</strong>
</div>
@endif


@if (Session::has('error'))
<div class="alert alert-danger" role="alert" >  <button type="button" class="close" data-dismiss="alert">×</button> 
        <strong>{{ Session::get('error') }}</strong>
</div>
@endif
        <div class="row justify-content-center">

          <div class="col-md-7">
            <div class="row mb-5">
              <div class="col-12 ">
                <h2 class="site-section-heading text-center">Add Withdraw</h2>
              </div>
            </div>
          </div>

        </div>

        <div class="row">
          <div class="col-12 mb-5">
              <div class="container" style="width: 69%;">


                <form method="POST" action="{{url('withdraw_data')}}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" value="pending" name="expert_status">


    


              

              <div class="row form-group">

                <div class="col-md-12">
                  <label class="text-white" for="subject">Select Payment Method</label>
                  <select name="paymentmethod" id="" class="form-control">
                      <option id="paymentmethod"  style="background:black" required>Stirpe</option>
                      <option id="paymentmethod"  style="background:black" required>Paypal</option>
                    
                  </select>
                  {{-- <input id="brand_expert" type="text" class="form-control" name="brand_expert" required > --}}

                </div>
              </div>

              <div class="row form-group">

                <div class="col-md-12">
                  <label class="text-white" for="email">Amount</label>
                  <input id="Name" type="text " placeholder="Amount" class="form-control "  name="amount" required>

                </div>
              </div>


              <div class="row form-group">
                <div class="col-md-12">
                    <input type="submit" value="Add Amount" class="btn btn-primary">




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
                                                                                    