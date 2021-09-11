
<header class="site-navbar py-3" role="banner">

    <div class="container-fluid">
      <div class="row align-items-center">

        <div class="col-6 col-xl-2" data-aos="fade-down">
      <a href="{{url('/')}}" class=" h2 mb-0"><img  style=" -webkit-filter: grayscale(0);
        -webkit-transform: scale(1.01);   width: 70%;" src="{{asset('assets/images/logoo.jfif')}}" alt=""></a>
        </div>
        <div class="col-10 col-md-7 d-none d-xl-block" data-aos="fade-down">
          <nav class="site-navigation position-relative text-right text-lg-center" role="navigation">

            <ul class="site-menu js-clone-nav mx-auto d-none d-lg-block">
              <li class="active"><a href="{{url('/')}}">Home</a></li>
              <li class="has-children">
                {{-- <a href="{{url('/single')}}">Gallery</a>
                <ul class="dropdown">
                  <li><a href="#">Nature</a></li>
                  <li><a href="#">Portrait</a></li>
                  <li><a href="#">People</a></li>

                  <li class="has-children">
                    <a href="#">Sub Menu</a>
                    <ul class="dropdown">
                      <li><a href="#">Menu One</a></li>
                      <li><a href="#">Menu Two</a></li>

                    </ul>
                  </li>
                </ul>
              </li> --}}
              <li><a href="{{url('/service')}}">Services</a></li>
              <li><a href="{{url('/about')}}">About</a></li>
              <li><a href="{{url('/contact')}}">Contact</a></li>
            </ul>
          </nav>
        </div>

        <div class="col-6 col-xl-2 text-right" data-aos="fade-down">
          <div class="d-none d-xl-inline-block">
            <ul class="site-menu js-clone-nav ml-auto list-unstyled d-flex text-right mb-0" data-class="social">


@if(Auth::user())
              <li style="text-align: center;">
                <a href="#" class="pl-3 pr-3" data-toggle="modal" data-target="#Authentication">Authentication Now</a>

              </li>
              @else

              <li style="text-align: center;">
                <a href="{{url('/login')}}" class="pl-3 pr-3" >Authentication Now</a>

              </li>
              @endif

              <li>
                <a href=""  data-toggle="modal" data-target="#signUp"   class="pl-3 pr-3">Signup</a>
              </li>
              <li>
                <a href="{{url('/login')}}" class="pl-3 pr-3">Login</a>
              </li>
            </ul>
          </div>

          <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

        </div>

      </div>
    </div>




  </header>

  <div class="modal fade" id="Authentication" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">

        <div class="modal-body" style="text-align: center;">
            <a href="{{url('express')}}" type="button" class="btn btn-primary">Express</a>
            <p style="margin-bottom: -3px; margin-top: 3px;">30$</p>
            <p>50-100 mint</p>
            <a href="{{url('priority')}}" class="btn btn-danger">Priority</a>
            <p style="margin-bottom: -3px; margin-top: 3px;">20-40$</p>
            <p>2-48 hours</p>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
        </div>
      </div>
    </div>
  </div>






  <div class="modal fade" id="signUp" tabindex="-1" role="dialog" aria-labelledby="signUpLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel" style="text-align: center;font-size: 24px;">Register</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body" style="text-align: center">
            <form action=""></form>
            <a href="{{url('buyer')}}" type="button"   class="btn btn-primary">Buyer</a><p></p>
            <a href="{{url('seller')}}" type="button" class="btn btn-danger">Seller</a><p></p>
            <a href="" type="button" data-toggle="modal" data-target="#expert_signup"  class="btn btn-secondary">Expert</a>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
          </div>
        </div>
      </div>
  </div>



  <div class="modal fade" id="expert_signup" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">

        <div class="modal-body" style="text-align: center;">
            <a href="{{url('signup_expert')}}" type="button" class="btn btn-primary">Apply</a>
            <p></p>
            <a href="{{url('/login')}}" type="button"  class="btn btn-danger"s>Login</a>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

        </div>
      </div>
    </div>
  </div>

  <script>

  </script>
