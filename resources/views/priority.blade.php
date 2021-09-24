
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

    <?php
    use App\Models\Brand;
    $brand = Brand::all();

    ?>


<?php
use App\Models\Points;

  $point = Points::where('type', 'Priority')->first();

  ?>


    <div class="site-section"  data-aos="fade">
      <div class="container">

        <div class="row justify-content-center">

          <div class="col-md-7">
            <div class="row mb-5">
              <div class="col-12 ">
                <h2 class="site-section-heading text-center">Priority</h2>
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


                <form method="POST"action="{{route('Store_express')}}" enctype="multipart/form-data" >
                    @csrf


              <div class="row form-group">

                <div class="col-md-12">
                  <label class="text-white" for="email">Brand name</label>
                  {{-- <input id="Brand" type="text" class="form-control "  name="Brand" value="{{ old('Brand') }}" required> --}}

                  <select name="Brand" id="" class="form-control">
                    @foreach ($brand as $brands )


                    <option id="brand_expert"  style="background:black" value="{{ $brands->id}}" required>{{ $brands->brand_name}}</option>
                    @endforeach
                </select>
                </div>
              </div>

              <div class="row form-group">

                <div class="col-md-12">
                  <label class="text-white" for="subject">Zip Number</label>
                  <input id="Zip" type="text" class="form-control" name="zip_No" >

                </div>
              </div>
              <input type="hidden" name="role" value="priority" id="">

              <input type="hidden" name="priority" value="{{  $point->points}}" id="">

{{--
              <div class="row form-group">

                <div class="col-md-12">
                  <label class="text-white" for="subject">Photos</label>
                  <input id="Photos" type="file" class="form-control" name="photos" required >

                </div>
              </div> --}}


              <div class="form-row">

                <div class="col-md-12 mb-3" id="AppImage">
                    <label for="password">Select Picture</label>
                    <input
                        type="file"
                        class="form-control"
                        name="photos[]"
                        required
                    />
                </div>

            </div>


            <div class="form-group">
                <button type="button" class="btn btn-primary" id="add-img">
                     Add Image
                </button>
                <br>
            </div>

              <div class="row form-group">

                <div class="col-md-12">
                  <label class="text-white" for="subject">Videos</label>
                  <input id="Videos" type="file" class="form-control" name="videos" required >

                </div>
              </div>

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
    $(document).ready(function () {

        var counter = 1;
        $("#add-img").on("click", function () {
            // alert('oo');
            $("#AppImage").append("<br>  <label for='password'>Select Picture</label> <input type='file' class='form-control' name='photos[]' required />");

        });

    });
</script>
  @endsection
