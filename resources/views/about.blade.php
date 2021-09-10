

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
                <h2 class="site-section-heading text-center">My Services</h2>
              </div>
            </div>
          </div>

        </div>

        <div class="row">
          <div class="col-md-7" style="">
            <img src="{{asset('/assets/images/demo/product-34.jpg')}}" style="    height: 56%;
            width: -webkit-fill-available;" alt="Images" class="img-fluid">
          </div>
          <div class="col-md-4 ml-auto">
            <h3 class="text-white">My Mission</h3>
            <p>Our patent pending process brings buyers, sellers and experts together when making a brand name purchase. Authenticate Pro's system helps minimize the chance of buying or selling a counterfeit.</p>

          </div>
        </div>


        <div class="row site-section">
          <div class="col-md-6 col-lg-6 col-xl-4 text-center mb-5">
            <img src="{{asset('/assets/images/person_1.jpg')}}" alt="Image" class="img-fluid w-50 rounded-circle mb-4">
            <h2 class="text-black font-weight-light mb-4">Jean Smith</h2>
            <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur ab quas facilis obcaecati non ea, est odit repellat distinctio incidunt, quia aliquam eveniet quod deleniti impedit sapiente atque tenetur porro?</p>
            <p>
              <a href="#" class="pl-0 pr-3"><span class="icon-twitter"></span></a>
              <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
              <a href="#" class="pl-3 pr-3"><span class="icon-facebook"></span></a>
            </p>
          </div>
          <div class="col-md-6 col-lg-6 col-xl-4 text-center mb-5">
            <img src="{{asset('/assets/images/person_2.jpg')}}" alt="Image" class="img-fluid w-50 rounded-circle mb-4">
            <h2 class="text-black font-weight-light mb-4">Claire Smith</h2>
            <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur ab quas facilis obcaecati non ea, est odit repellat distinctio incidunt, quia aliquam eveniet quod deleniti impedit sapiente atque tenetur porro?</p>
            <p>
              <a href="#" class="pl-0 pr-3"><span class="icon-twitter"></span></a>
              <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
              <a href="#" class="pl-3 pr-3"><span class="icon-facebook"></span></a>
            </p>
          </div>
          <div class="col-md-6 col-lg-6 col-xl-4 text-center mb-5">
            <img src="{{asset('/assets/images/person_4.jpg')}}" alt="Image" class="img-fluid w-50 rounded-circle mb-4">
            <h2 class="text-black font-weight-light mb-4">John Smith</h2>
            <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur ab quas facilis obcaecati non ea, est odit repellat distinctio incidunt, quia aliquam eveniet quod deleniti impedit sapiente atque tenetur porro?</p>
            <p>
              <a href="#" class="pl-0 pr-3"><span class="icon-twitter"></span></a>
              <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
              <a href="#" class="pl-3 pr-3"><span class="icon-facebook"></span></a>
            </p>
          </div>
        </div>
      </div>
    </div>

    <div class="footer py-4">

    </div>





  </div>
  @endsection

