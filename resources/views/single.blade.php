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
                <h2 class="site-section-heading text-center">Portrait Gallery</h2>
              </div>
            </div>
          </div>

        </div>


        <div class="row" id="lightgallery">
          <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 item" data-aos="fade" data-src="{{asset('/assets/images/big-images/demo/product-17-2.jpg')}}" data-sub-html="<h4>Fading Light</h4><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor doloremque hic excepturi fugit, sunt impedit fuga tempora, ad amet aliquid?</p>">
            <button class="mt-3 ml-3 btn btn-danger" style="position: absolute;    border-radius: 8px;z-index: 100; ">
                NO Pass
            </button>
            <a href="#"><img src="{{asset('/assets/images/demo/product-17-2.jpg')}}"style=" border-radius: 22px;    max-height: 100%;" alt="IMage" class="img-fluid"></a>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 item" data-aos="fade" data-src="{{asset('/assets/images/big-images/demo/product-18.jpg')}}" data-sub-html="<h4>Fading Light</h4><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam omnis quaerat molestiae, praesentium. Ipsam, reiciendis. Aut molestiae animi earum laudantium.</p>">
            <button class="mt-3 ml-3 btn btn-danger" style="position: absolute;    border-radius: 8px;z-index: 100; ">
                NO Pass
            </button>
            <a href="#"><img src="{{asset('/assets/images/demo/product-18.jpg')}}" style=" border-radius: 22px;    max-height: 100%;" alt="IMage" class="img-fluid"></a>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 item" data-aos="fade" data-src="{{asset('/assets/images/big-images/demo/product-11-2.jpg')}}" data-sub-html="<h4>Fading Light</h4><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem reiciendis, dolorum illo temporibus culpa eaque dolore rerum quod voluptate doloribus.</p>">
            <button class="mt-3 ml-3 btn btn-danger" style="position: absolute;    border-radius: 8px;z-index: 100; ">
                NO Pass
            </button>
            <a href="#"><img src="{{asset('/assets/images/demo/product-11-2.jpg')}}" style=" border-radius: 22px;    max-height: 100%;" alt="IMage" class="img-fluid"></a>
          </div>
          {{-- <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="{{asset('/assets/images/big-images/nature_big_4.jpg')}}" data-sub-html="<h4>Fading Light</h4><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim perferendis quae iusto omnis praesentium labore tempore eligendi quo corporis sapiente.</p>">
            <a href="#"><img src="{{asset('/assets/images/nature_small_4.jpg')}}" style=" border-radius: 22px;" alt="IMage" class="img-fluid"></a>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="{{asset('/assets/images/big-images/nature_big_5.jpg')}}" data-sub-html="<h4>Fading Light</h4><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe, voluptatum voluptate tempore aliquam, dolorem distinctio. In quas maiores tenetur sequi.</p>">
            <a href="#"><img src="{{asset('/assets/images/nature_small_5.jpg')}}" alt="IMage" class="img-fluid"></a>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="{{asset('/assets/images/big-images/nature_big_6.jpg')}}" data-sub-html="<h4>Fading Light</h4><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum cum culpa blanditiis illum, voluptatum iusto quisquam mollitia debitis quaerat maiores?</p>">
            <a href="#"><img src="{{asset('/assets/images/nature_small_6.jpg')}}" alt="IMage" class="img-fluid"></a>
          </div> --}}





        </div>
      </div>
    </div>




  </div>


  @endsection
