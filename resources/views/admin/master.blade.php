<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="rtl">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="_token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="market admin panel">
    <meta name="keywords"content="admin,panel,market">
    <meta name="author" content="AM">
    <title>پنل مدیریت</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('../../../app-assets/images/ico/favicon.ico')}}">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('./css/app.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('./css/admin.css')}}">

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern semi-dark-layout 2-columns  navbar-floating footer-static"  data-open="click" data-menu="vertical-menu-modern" data-col="2-columns" data-layout="semi-dark-layout">
    <div id="app">

        <!-- BEGIN: Header-->
        @include('admin.layouts.navbar')
        <!-- END: Header-->

        <!-- BEGIN: Main Menu-->
        @include('admin.layouts.sidebar')
        <!-- END: Main Menu-->

            <!-- BEGIN: Content-->
            <div class="app-content content">
                <div class="content-overlay"></div>
                <div class="header-navbar-shadow"></div>
                <div class="content-wrapper">
                    {{-- <router-view></router-view> --}}
                    @include('admin.fragments.errors')
                    @yield('content')
                </div>
            </div>
            <!-- END: Content-->

            <div class="sidenav-overlay"></div>
            <div class="drag-target"></div>

        <!-- BEGIN: Footer-->
        @include('admin.layouts.footer')
        <!-- END: Footer-->
    </div>


    <!-- BEGIN: Vendor JS-->
    <script src={{asset('../../../app-assets/vendors/js/vendors.min.js')}}></script>
    <script src={{asset('../../../app-assets/vendors/js/charts/apexcharts.min.js')}}></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{asset('./js/app.js')}}"></script>
    <script src={{asset('../../../app-assets/vendors/js/forms/select/select2.full.min.js')}}></script>
    <script src={{asset('../../../app-assets/js/scripts/forms/select/form-select2.js')}}></script>
    <script src={{asset('../../../app-assets/js/scripts/forms/select/form-select2.js')}}></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src={{asset('../../../app-assets/js/core/app-menu.js')}}></script>
    <script src={{asset('../../../app-assets/js/core/app.js')}}></script>
    <script src={{asset('../../../app-assets/js/scripts/components.js')}}></script>
    <!-- END: Theme JS-->
    <script src={{asset('../../../app-assets/vendors/js/tables/datatable/datatables.min.js')}}></script>
    <script src={{asset('../../../app-assets/vendors/js/tables/datatable/datatables.buttons.min.js')}}></script>
    <script src={{asset('../../../app-assets/js/scripts/datatables/datatable.js')}}></script>
    <script src={{asset('../../../app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js')}}></script>

    <!-- BEGIN: Page JS-->
    <script src={{asset('../../../app-assets/js/scripts/pages/dashboard-ecommerce.js')}}></script>
    <!-- END: Page JS-->

    <!-- Sweet Alert2 -->
    <script src={{asset('../../../app-assets/vendors/js/extensions/sweetalert2.all.min.js')}}></script>

    <script src="{{asset('./js/custom.js')}}"></script>
    <script src={{asset('../../../app-assets/js/scripts/ui/data-list-view.js')}}></script>

    {{-- documentRoot --}}
    <script> documentRoot = '{{url('/')}}' </script>


    @yield('script')
</body>
<!-- END: Body-->



</html>
