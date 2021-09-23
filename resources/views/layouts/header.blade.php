
<header class="site-navbar py-3" role="banner">

    <div class="container-fluid">
      <div class="row align-items-center">

        <div class="col-6 col-xl-2" data-aos="fade-down">
      <a href="{{url('/')}}" class=" h2 mb-0"><img  style=" -webkit-filter: grayscale(0);
        -webkit-transform: scale(1.01);   width: 70%;" src="{{asset('assets/logo1.png')}}" alt=""></a>
        </div>
        <div class="col-10 col-md-7 d-none d-xl-block" data-aos="fade-down">
          <nav class="site-navigation position-relative text-right text-lg-center" role="navigation">

            <ul class="site-menu js-clone-nav mx-auto d-none d-lg-block">
              <li class="active"><a href="{{url('/')}}">Home</a></li>
              <li class="has-children">

              {{-- <li><a href="{{url('/service')}}">Services</a></li> --}}
              <li id="navMenus"><a href="{{url('/products')}}">products</a></li>
              <li id="navMenus"><a href="{{url('/contact')}}">Contact</a></li>

              @if(Auth::check())
              @if(Auth::user()->role != 'expert')
              <li><a href="{{url('/product_detail')}}">My Products</a></li>
              @endif
              @if(Auth::user()->role == 'expert')
              <li><a href="{{url('/Jobs_detail')}}">Jobs</a></li>
              <li><a href="{{url('/Jobs_history')}}">Job History</a></li>
              <div class="dropdown">
  <li class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <a href="{{url('/expert_profile_edit')}}">My Profile</a>
  </li>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <li class="dropdown-item"><a href="{{url('/withdraws')}}">WithDraw</a></li>
  </div>
</div>

              


              @endif
              @if(Auth::user()->role == 'buyer')
              <li><a href="{{url('/authentication_buyer')}}">Authentication Buyer</a></li>
              @endif
              @endif

            </ul>
          </nav>
        </div>

        <div class="col-6 col-xl-2 text-right" data-aos="fade-down">
          <div class="d-none d-xl-inline-block">
            <ul class="site-menu js-clone-nav ml-auto list-unstyled d-flex text-right mb-0" data-class="social">


            @if(Auth::check())

             @if(Auth::user()->role != 'expert')

              <li style="text-align: center;">
                <a href="#" class="pl-3 pr-3"  data-toggle="modal" data-target="#Authentication">Authentication Now</a>

              </li>
              @endif
            @endif
              @if(!Auth::check())

              <li style="text-align: center;">
                <a href="{{url('/login')}}" class="pl-3 pr-3 " >Authentication Now</a>

              </li>

              @endif

              @if(!Auth::check())
              <li>
                <a href=""  data-toggle="modal" data-target="#signUp"   class="pl-3 pr-3">Signup</a>
              </li>
              <li>
                <a href="{{url('/login')}}" class="pl-3 pr-3">Login</a>
              </li>
              @else
              <li>
                <a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                 {{ __('Logout') }}
             </a>

             <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                 @csrf
             </form>
              </li>

              @endif
            </ul>
          </div>

          <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle "><span class="icon-menu h3"></span></a></div>

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
            <a href="{{url('buyer')}}" type="button"   class="btn btn-primary" data-dismiss="modal">Buyer</a><p></p>
            <a href="{{url('seller')}}" type="button" class="btn btn-danger" data-dismiss="modal">Seller</a><p></p>
            <a href="" type="button" data-toggle="modal" data-target="#expert_signup"  class="btn btn-secondary" data-dismiss="modal">Expert</a>
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
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script>
$(document).ready(function(){

//     $("li").click(function(){
//         alert(1);
//   // If this isn't already active
//   if (!$(this).hasClass("active")) {
//     // Remove the class from anything that is active
//     $("li.active").removeClass("active");
//     // And make this active
//     $(this).addClass("active");
//   }
// });
$('.btn').click(function(){
  $('#signup').hide();
});
$('#dropdownMenuButton').click(function(){

  $('.dropdown-menu').css('display','block');
  $('body').click(function(){
    $('.dropdown-menu').hide();
  });
});
});

  </script>


                                                                