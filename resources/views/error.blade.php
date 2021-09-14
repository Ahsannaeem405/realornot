
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
                <h2 class="site-section-heading text-center" style="color: red">You have to wait for admin approval</h2>
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
