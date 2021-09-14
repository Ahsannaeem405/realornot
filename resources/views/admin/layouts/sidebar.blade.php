<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto"><a class="navbar-brand" href="html/ltr/vertical-menu-template/index.html">
                    <div class="" ></div>
                    <h2 class="brand-text mb-0">@if (isset(Auth::user()->name)) {{Auth::user()->name}} @endif</h2>
                </a></li>
            <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary" data-ticon="icon-disc"></i></a></li>
        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">

              <li class=" navigation-header">.
            </li>
            <li class={{ Request::is('admin/home')? 'active' : '' }} ><a href=""><i class="feather icon-home"></i><span class="menu-title" data-i18n="Dashboard">Dashboard</span></a>
            </li>
{{--
            <li  ><a href=""><i class="feather icon-user"></i><span class="menu-title" data-i18n="profile">User</span></a>
                <ul class="menu-content">
                    <li class="{{ Request::is('admin/user')? 'active' : '' }}" ><a href="{{url('admin/user')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Analytics">View User</span></a>
                    </li>

                </ul>

            </li> --}}



            <li  ><a href=""><i class="feather icon-user"></i><span class="menu-title" data-i18n="profile">Seller</span></a>
                <ul class="menu-content">


                    <li class={{ Request::is('admin/seller')? 'active' : '' }} ><a href="{{url('admin/seller')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Analytics">View Seller</span></a>
                    </li>

                </ul>

            </li>




            <li class={{ Request::is('admin/readings')? 'active' : '' }} ><a href=""><i class="feather icon-user"></i><span class="menu-title" data-i18n="profile">Buyer</span></a>
                <ul class="menu-content">



                    <li class={{ Request::is('admin/buyer')? 'active' : '' }} ><a href="{{url('admin/buyer')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Analytics">View Buyer</span></a>
                    </li>



                </ul>

            </li>


            <li class={{ Request::is('admin/vocabulary')? 'active' : '' }} ><a href=""><i class="feather icon-user"></i><span class="menu-title" data-i18n="profile">Expert</span></a>
                <ul class="menu-content">

                    <li class={{ Request::is('admin/expert')? 'active' : '' }} ><a href="{{url('admin/expert')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Analytics">View Expert</span></a>
                    </li>



                </ul>

            </li>



            <li class={{ Request::is('admin/writing')? 'active' : '' }} ><a href=""><i class="feather icon-user"></i><span class="menu-title" data-i18n="profile">Brands</span></a>
                <ul class="menu-content">

                    <li class={{ Request::is('view/brands')? 'active' : '' }} ><a href="{{url('view/brands')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Analytics">View Brands</span></a>
                    </li>

                </ul>

            </li>


        </ul>
    </div>
</div>
