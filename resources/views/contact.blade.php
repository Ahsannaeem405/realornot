
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
                <h2 class="site-section-heading text-center">Contact</h2>
              </div>
            </div>
          </div>

        </div>

        <div class="row">
          <div class="col-lg-8 mb-5" style="
          border: solid 2px #df141e;
          border-radius: 23px;
          padding-left: 22px;
          background: white;
          padding-top: 22px;
          padding-bottom: 22px;
          box-shadow: rgb(0 0 0 / 25%) 0px 54px 55px, rgb(0 0 0 / 12%) 0px -12px 30px, rgb(0 0 0 / 12%) 0px 4px 6px, rgb(0 0 0 / 17%) 0px 12px 13px, rgb(0 0 0 / 9%) 0px -3px 5px;
          padding-right: 22px;
      ">
            <form action="#">


              <div class="row form-group">
                <div class="col-md-6 mb-3 mb-md-0">
                  <label class="text-black" for="fname">First Name</label>
                  <input type="text" id="fname" class="form-control">
                </div>
                <div class="col-md-6">
                  <label class="text-black" for="lname">Last Name</label>
                  <input type="text" id="lname" class="form-control">
                </div>
              </div>

              <div class="row form-group">

                <div class="col-md-12">
                  <label class="text-black" for="email">Email</label>
                  <input type="email" id="email" class="form-control">
                </div>
              </div>

              <div class="row form-group">

                <div class="col-md-12">
                  <label class="text-black" for="subject">Subject</label>
                  <input type="subject" id="subject" class="form-control">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="message">Message</label>
                  <textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="Write your notes or questions here..."></textarea>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Send Message" style="background: #34aa44; border-color:#34aa44" class="btn btn-danger py-2 px-4 text-white">
                </div>
              </div>


            </form>
          </div>
          <div class="col-lg-3 ml-auto">
            <div class="mb-3">
              <p class="mb-0 font-weight-bold text-white">Address</p>
              <p class="mb-4"> <a href="#">Authentic8 Inc / Authenticate Pro.com
                940 W. Foothill Blvd
                Claremont, California 91711</p>

              <p class="mb-0 font-weight-bold text-white">Phone</p>
              <p class="mb-4"><a href="#">323-736-1795

            </a></p>

              <p class="mb-0 font-weight-bold text-white">Email Address</p>
              <p class="mb-0"><a href="#">info@authenticatepro.com

            </a></p>

            </div>

          </div>
        </div>
      </div>
    </div>

    <div class="footer py-4">

    </div>





  </div>

  @endsection
