<!DOCTYPE html>
<html lang="en"
      dir="ltr">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible"
              content="IE=edge">
        <meta name="viewport"
              content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Activities</title>

        <!-- Prevent the demo from appearing in search engines -->
        <meta name="robots"
              content="noindex">

        <!-- Perfect Scrollbar -->
        <link type="text/css"
              href="{{ asset('/vendor/perfect-scrollbar.css') }}"
              rel="stylesheet">

        <!-- App CSS -->
        <link type="text/css"
              href="{{ asset('/css/app.css') }}"
              rel="stylesheet">
        <link type="text/css"
              href="{{ asset('/css/app.rtl.css') }}"
              rel="stylesheet">

       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <!-- Material Design Icons -->
        <link type="text/css"
              href="{{ asset('/css/vendor-material-icons.css') }}"
              rel="stylesheet">
        <link type="text/css"
              href="{{ asset('/css/vendor-material-icons.rtl.css') }}"
              rel="stylesheet">

        <!-- Font Awesome FREE Icons -->
        <link type="text/css"
              href="{{ asset('/css/vendor-fontawesome-free.css') }}"
              rel="stylesheet">
        <link type="text/css"
              href="{{ asset('/css/vendor-fontawesome-free.rtl.css') }}"
              rel="stylesheet">

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async
                src="{{ asset('https://www.googletagmanager.com/gtag/js?id=UA-133433427-1') }}"></script>
        <script>
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());
            gtag('config', 'UA-133433427-1');
        </script>

    </head>

    <body class="layout-default">

        <div class="preloader"></div>

        <!-- Header Layout -->
        <div class="mdk-header-layout js-mdk-header-layout">


 <!-- Header -->

            <div id="header"
                 class="mdk-header js-mdk-header m-0"
                 data-fixed>
                <div class="mdk-header__content">

                    <div class="navbar navbar-expand-sm navbar-main navbar-dark bg-dark  pr-0"
                         id="navbar"
                         data-primary>
                        <div class="container-fluid p-0">

                            <!-- Navbar toggler -->

                            <button class="navbar-toggler navbar-toggler-right d-block d-lg-none"
                                    type="button"
                                    data-toggle="sidebar">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            <!-- Navbar Brand -->
                            <a href="index.html"
                               class="navbar-brand ">
                                <span>Best For You</span>
                            </a>

                        </div>
                    </div>

                </div>
            </div>

            <!-- // END Header -->
            <!-- Header Layout Content -->
            <div class="mdk-header-layout__content">

                <div class="mdk-drawer-layout js-mdk-drawer-layout"
                     data-push
                     data-responsive-width="992px">
                    <div class="mdk-drawer-layout__content page">

    {{-- =========================================================================================================== --}}
    @yield('content')
    {{-- ===================================================================================================== --}}

                    <!-- // END drawer-layout__content -->

                    <div class="mdk-drawer  js-mdk-drawer"
                         id="default-drawer"
                         data-align="start">
                        <div class="mdk-drawer__content">
                            <div class="sidebar sidebar-light sidebar-left sidebar-p-t"
                                 data-perfect-scrollbar>
                                <div class="sidebar-heading">Menu</div>
                                <ul class="sidebar-menu">

                                <li class="sidebar-menu-item">
                                     <a class="sidebar-menu-button"
                                         href="{{ route('admin.dashboard') }}">
                                        <span class="sidebar-menu-text">Dashboard</span>
                                    </a>
                                 </li>
                                 {{-- @include('layout.admin._menu',
                                 ['menu_name' => 'Orders', 'number' => 'orders' , 'gate' => 'order' ,
                                 'icon' => 'fa-pencil-square-o','subMenu' => 'Not Sent Orders','secondSubMenu' => 'All Orders',
                                 'route_create' => 'order.not_sent' ,'route_list' => 'order.index']) --}}

                              {{-- @include('layout.admin._menu',
                              ['menu_name' => 'Payments', 'number' => 'payments' ,'gate' => 'order-edit','icon' => 'fa-credit-card',
                              'subMenu' => 'Failed Payment','secondSubMenu' => 'All Payment',
                              'route_create' => 'payment.failed' ,'route_list' => 'payment.index']) --}}

                              @include('layout.admin._menu',
                              ['menu_name' => 'Comments', 'number' => 'comments' ,'gate' => '-','icon' => 'fa-comment',
                              'subMenu' => 'All reviews','secondSubMenu' => 'Not Approved ',
                              'route_create' => 'comment.index'])
                              {{-- @can('role-list')
                                 @include('layout.admin._menu',
                                ['menu_name' => 'Roles', 'numbe0r' => '' ,'gate' => 'role','icon' => 'fa-check-square-o',
                                'subMenu' => 'Role List','secondSubMenu' => 'Add Role',
                                'route_create' => 'roles.index' ,'route_list' => 'roles.create'])
                              @endcan --}}

                              @can('product-list')

                                 @include('layout.admin._menu',
                                 ['menu_name' => 'Products', 'number' => 'products' ,'gate' => 'product','icon' => 'fa-globe', 'route_create' => 'product.create' ,'route_list' => 'product.index'])

                                 {{-- @include('layout.admin._menu',
                                   ['menu_name' => 'Attributes', 'number0' => '' , 'gate' => '-' , 'icon' => 'fa-globe',
                                   'subMenu' => 'Create New','secondSubMenu' => 'Attach to product',
                                   'route_create' => 'attribute.create' ]) --}}

                                 @include('layout.admin._menu',
                                 ['menu_name' => 'Categories','gate' => 'product','icon' => 'fa-list', 'number' => 'categories_count' , 'route_create' => 'category.create' ,'route_list' => 'category.index'])

                                 {{-- @include('layout.admin._menu',
                                 ['menu_name' => 'Brands', 'number' => 'brands' ,'gate' => 'product' ,'icon' => 'fa-lemon-o', 'route_create' => 'brand.create' ,'route_list' => 'brand.index']) --}}

                              @endcan
                              {{-- @can('gift-list')
                                 @include('layout.admin._menu',
                                 ['menu_name' => 'Gift cards', 'number' => 'gift_cards','gate' => 'gift' ,'icon' => 'fa-gift', 'route_create' => 'giftCard.create' ,'route_list' => 'giftCard.index'])
                              @endcan --}}
                              @can('role-list')
                              {{-- ======================================================== --}}
                              <li class="sidebar-menu-item ">
                                 <a class="sidebar-menu-button" data-toggle="collapse" href="#Discounts">
                                    <span class="sidebar-menu-text">Discounts</span>
                                    <span class="ml-auto d-flex align-items-center">
                                       <span class="sidebar-menu-toggle-icon"></span>
                                    </span>
                                 </a>
                                 <ul class="sidebar-submenu collapse " id="Discounts">
                                    <li class="sidebar-menu-item ">
                                       <a class="sidebar-menu-button" href="{{ route('discounts.index') }}"
                                          data-title="feedback">
                                          <span class="sidebar-menu-text">Brows</span>
                                       </a>
                                    </li>

                                 </ul>
                              </li>
                              {{-- ======================================================== --}}
                              {{-- ======================================================== --}}
                              <li class="sidebar-menu-item ">
                                 <a class="sidebar-menu-button" data-toggle="collapse" href="#Contact">
                                    <span class="sidebar-menu-text">Contact us</span>
                                    <span class="ml-auto d-flex align-items-center">
                                       <span class="sidebar-menu-toggle-icon"></span>
                                    </span>
                                 </a>
                                 <ul class="sidebar-submenu collapse " id="Contact">
                                    <li class="sidebar-menu-item ">
                                       <a class="sidebar-menu-button" href="{{ route('Admincontact.index') }}"
                                          data-title="feedback">
                                          <span class="sidebar-menu-text">Brows Messages</span>
                                       </a>
                                    </li>

                                 </ul>
                              </li>
                              {{-- ======================================================== --}}
                              {{-- ======================================================== --}}
                              <li class="sidebar-menu-item ">
                                 <a class="sidebar-menu-button" data-toggle="collapse" href="#Franchise">
                                    <span class="sidebar-menu-text">Franchise</span>
                                    <span class="ml-auto d-flex align-items-center">
                                       <span class="sidebar-menu-toggle-icon"></span>
                                    </span>
                                 </a>
                                 <ul class="sidebar-submenu collapse " id="Franchise">
                                    <li class="sidebar-menu-item ">
                                       <a class="sidebar-menu-button" href="{{ route('Adminfranchise.index') }}"
                                          data-title="feedback">
                                          <span class="sidebar-menu-text">Brows Messages</span>
                                       </a>
                                    </li>

                                 </ul>
                              </li>
                              {{-- ======================================================== --}}
                              {{-- ======================================================== --}}
                              <li class="sidebar-menu-item ">
                                 <a class="sidebar-menu-button" data-toggle="collapse" href="#Join">
                                    <span class="sidebar-menu-text">Join us</span>
                                    <span class="ml-auto d-flex align-items-center">
                                       <span class="sidebar-menu-toggle-icon"></span>
                                    </span>
                                 </a>
                                 <ul class="sidebar-submenu collapse " id="Join">
                                    <li class="sidebar-menu-item ">
                                       <a class="sidebar-menu-button" href="{{ route('Adminjoin-us.index') }}"
                                          data-title="feedback">
                                          <span class="sidebar-menu-text">Brows Messages</span>
                                       </a>
                                    </li>

                                 </ul>
                              </li>
                              {{-- ======================================================== --}}
                              <li class="sidebar-menu-item">
                                 <a class="sidebar-menu-button" href="{{ route('settings.index') }}">
                                    <span class="sidebar-menu-text">Settings</span>
                                 </a>
                              </li>
                           @endcan






                                {{-- <div class="sidebar-p-a">
                                    <a href="https://themeforest.net/item/stack-admin-bootstrap-4-dashboard-template/22959011"
                                       class="btn btn-primary btn-block">Purchase &dollar;35</a>
                                </div> --}}

                            </div>
                        </div>
                    </div>
                </div>
                <!-- // END drawer-layout -->

            </div>
            <!-- // END header-layout__content -->

        </div>
        <!-- // END header-layout -->




        <!-- App Settings FAB -->
        <div id="app-settings">
            <app-settings layout-active="default"
                          :layout-location="{
      'default': 'activities.html',
      'fixed': 'fixed-activities.html',
      'fluid': 'fluid-activities.html',
      'mini': 'mini-activities.html'
    }"></app-settings>
        </div>

        <!-- jQuery -->
        <script src="{{ asset('/vendor/jquery.min.js') }}"></script>

        <!-- Bootstrap -->
        <script src="{{ asset('/vendor/popper.min.js') }}"></script>
        <script src="{{ asset('/vendor/bootstrap.min.js') }}"></script>

        <!-- Perfect Scrollbar -->
        <script src="{{ asset('/vendor/perfect-scrollbar.min.js') }}"></script>

        <!-- DOM Factory -->
        <script src="{{ asset('/vendor/dom-factory.js') }}"></script>

        <!-- MDK -->
        <script src="{{ asset('/vendor/material-design-kit.js') }}"></script>

        <!-- App -->
        <script src="{{ asset('/js/toggle-check-all.js') }}"></script>
        <script src="{{ asset('/js/check-selected-row.js') }}"></script>
        <script src="{{ asset('/js/dropdown.js') }}"></script>
        <script src="{{ asset('/js/sidebar-mini.js') }}"></script>
        <script src="{{ asset('/js/app.js') }}"></script>

        <!-- App Settings (safe to remove) -->
        <script src="{{ asset('/js/app-settings.js') }}"></script>

    </body>

</html>
