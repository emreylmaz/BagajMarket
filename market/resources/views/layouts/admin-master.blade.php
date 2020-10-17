<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/logo-icon.png">
    <title>BagajMarket</title>
    <!-- Custom CSS -->
    <link href={{asset('assets/extra-libs/c3/c3.min.css')}} rel="stylesheet">
    <link href={{asset('assets/libs/chartist/dist/chartist.min.css')}} rel="stylesheet">
    <link href={{asset('assets/extra-libs/jvector/jquery-jvectormap-2.0.2.css')}} rel="stylesheet" />
    <!-- Custom CSS -->
    <link href={{asset('dist/css/style.min.css')}} rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src={{asset('https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js')}}></script>
    <script src={{asset('https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js')}}></script>
    <![endif]-->
</head>

<body>
<!-- ============================================================== -->
<!-- Preloader - style you can find in spinners.css -->
<!-- ============================================================== -->
<div class="preloader">
    <div class="lds-ripple">
        <div class="lds-pos"></div>
        <div class="lds-pos"></div>
    </div>
</div>
<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
     data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">
    <!-- ============================================================== -->
    <!-- Topbar header - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <header class="topbar" data-navbarbg="skin6">
        <nav class="navbar top-navbar navbar-expand-md">
            <div class="navbar-header" data-logobg="skin6">
                <!-- This is for the sidebar toggle which is visible on mobile only -->
                <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
                        class="ti-menu ti-close"></i></a>
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-brand">
                    <!-- Logo icon -->
                    <a href="index.html">
                        <b class="logo-icon">
                            <!-- Dark Logo icon -->
                            <img src={{asset('assets/images/logo-icon.png')}} alt="homepage" class="dark-logo" />
                            <!-- Light Logo icon -->
                            <img src={{asset('assets/images/logo-icon.png')}} alt="homepage" class="light-logo" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span class="logo-text">
                                <!-- dark Logo text -->
                                <img src='assets/images/et.png' alt="homepage" class="dark-logo" />
                            <!-- Light Logo text -->

                            </span>
                    </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Toggle which is visible on mobile only -->
                <!-- ============================================================== -->
                <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)"
                   data-toggle="collapse" data-target="#navbarSupportedContent"
                   aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i
                        class="ti-more"></i></a>
            </div>
            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <div class="navbar-collapse collapse" id="navbarSupportedContent">
                <!-- ============================================================== -->
                <!-- toggle and nav items -->
                <!-- ============================================================== -->
                <ul class="navbar-nav float-left mr-auto ml-3 pl-1">
                    <!-- Notification -->

                    <!-- End Notification -->
                    <!-- ============================================================== -->
                    <!-- create new -->
                    <!-- ============================================================== -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i data-feather="settings" class="svg-icon"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                    <li class="nav-item d-none d-md-block">
                        <a class="nav-link" href="javascript:void(0)">
                            <div class="customize-input">
                                <select
                                    class="custom-select form-control bg-white custom-radius custom-shadow border-0">
                                    <option selected>EN</option>
                                    <option value="1">AB</option>
                                    <option value="2">AK</option>
                                    <option value="3">BE</option>
                                </select>
                            </div>
                        </a>
                    </li>
                </ul>
                <!-- ============================================================== -->
                <!-- Right side toggle and nav items -->
                <!-- ============================================================== -->
                <ul class="navbar-nav float-right">
                    <!-- ============================================================== -->
                    <!-- Search -->
                    <!-- ============================================================== -->
                    <li class="nav-item d-none d-md-block">
                        <a class="nav-link" href="javascript:void(0)">
                            <form>
                                <div class="customize-input">
                                    <input class="form-control custom-shadow custom-radius border-0 bg-white"
                                           type="search" placeholder="Search" aria-label="Search">
                                    <i class="form-control-icon" data-feather="search"></i>
                                </div>
                            </form>
                        </a>
                    </li>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">
                            <img src="../assets/images/users/profile-pic.jpg" alt="user" class="rounded-circle"
                                 width="40">
                            <span class="ml-2 d-none d-lg-inline-block"><span>Hello,</span> <span
                                    class="text-dark">{{ Auth::user()->name }}</span> <i data-feather="chevron-down"
                                                                          class="svg-icon"></i></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right user-dd animated flipInY">
                            <a class="dropdown-item" href="javascript:void(0)"><i data-feather="user"
                                                                                  class="svg-icon mr-2 ml-1"></i>
                                My Profile</a>
                            <a class="dropdown-item" href="javascript:void(0)"><i data-feather="credit-card"
                                                                                  class="svg-icon mr-2 ml-1"></i>
                                My Balance</a>
                            <a class="dropdown-item" href="javascript:void(0)"><i data-feather="mail"
                                                                                  class="svg-icon mr-2 ml-1"></i>
                                Inbox</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="javascript:void(0)"><i data-feather="settings"
                                                                                  class="svg-icon mr-2 ml-1"></i>
                                Account Setting</a>
                            <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="/login"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"> <i data-feather="power"
                                                                                                           class="svg-icon mr-2 ml-1"></i>
                            {{ __('Çıkış Yap') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>

                            <div class="dropdown-divider"></div>
                            <div class="pl-4 p-3"><a href="javascript:void(0)" class="btn btn-sm btn-info">View
                                    Profile</a></div>
                        </div>
                    </li>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                </ul>
            </div>
        </nav>
    </header>
    <!-- ============================================================== -->
    <!-- End Topbar header -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <aside class="left-sidebar" data-sidebarbg="skin6">
        <!-- Sidebar scroll-->
        <div class="scroll-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar navigation-->
            @if(Auth::user()->is_admin == 0)
            <nav class="sidebar-nav">
                <ul id="sidebarnav">
                    <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="/market"
                                                 aria-expanded="false"><i data-feather="home" class="feather-icon"></i><span
                                class="hide-menu">Market</span></a></li>
                    <li class="sidebar-item"> <a class="has-arrow sidebar-link active" href="javascript:void(0)" aria-expanded="false"><span class="hide-menu">Ürün İşlemleri</span></a>
                        <ul aria-expanded="false" class="collapse second-level base-level-line in">
                            <li class="sidebar-item"><a href="/urun-ekle" class="sidebar-link"><span class="hide-menu"> Ürün Ekle </span></a></li>
                            <li class="sidebar-item"><a href="/urun-guncelle" class="sidebar-link"><span class="hide-menu"> Ürün Güncelle</span></a></li>
                        </ul>

                    </li>
                    <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="/market"
                                                 aria-expanded="false"><i  class="icon-handbag"></i><span
                                class="hide-menu">Siparişler</span></a></li>

                    <li class="list-divider"></li>
                    <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href=""
                                                 aria-expanded="false"><i data-feather="log-out" class="feather-icon"></i><span
                                class="hide-menu">Logout</span></a></li>
                </ul>
            </nav>
            @endif
            @if(Auth::user()->is_admin == 1)
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="/market"
                                                     aria-expanded="false"><i data-feather="home" class="feather-icon"></i><span
                                    class="hide-menu">Market</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{ route('cart.index') }}"
                                                     aria-expanded="false"><i  class="fas fa-cart-plus"></i><span
                                    class="hide-menu">Sepet</span>
                                    <div class="badge badge-danger">
                                        @auth()
                                        {{Cart::session(auth()->id())->getContent()->count()}}
                                        @else
                                            0
                                        @endauth
                                    </div>
                            </a></li>
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="/market"
                                                     aria-expanded="false"><i  class="icon-handbag"></i><span
                                    class="hide-menu">Siparişler</span></a></li>



                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="/admin"
                                                     aria-expanded="false"><i data-feather="log-out" class="feather-icon"></i><span
                                    class="hide-menu">Logout</span></a></li>
                    </ul>
                </nav>
            @endif
            <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
    </aside>
    <!-- ============================================================== -->
    <!-- End Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <main class="py-4 container">

         <div class="container-fluid">
         @yield('content')
         </div>
        </main>

        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="../assets/libs/jquery/dist/jquery.min.js"></script>
<script src="../assets/libs/popper.js/dist/umd/popper.min.js"></script>
<script src="../assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- apps -->
<!-- apps -->
<script src="../dist/js/app-style-switcher.js"></script>
<script src="../dist/js/feather.min.js"></script>
<script src="../assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
<script src="../dist/js/sidebarmenu.js"></script>
<!--Custom JavaScript -->
<script src="../dist/js/custom.min.js"></script>
<!--This page JavaScript -->
<script src="../assets/extra-libs/c3/d3.min.js"></script>
<script src="../assets/extra-libs/c3/c3.min.js"></script>
<script src="../assets/libs/chartist/dist/chartist.min.js"></script>
<script src="../assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
<script src="../assets/extra-libs/jvector/jquery-jvectormap-2.0.2.min.js"></script>
<script src="../assets/extra-libs/jvector/jquery-jvectormap-world-mill-en.js"></script>
<script src="../dist/js/pages/dashboards/dashboard1.min.js"></script>
</body>

</html>
