@include('components.head')
<body>
    <!-- Begin page -->
    <div id="layout-wrapper">
<!-- **************************************** -->

@include('components.backend.header')
@include('components.left_sidebar')

    @yield('content')

@include('Components.backend.footer')

<!-- **************************************** -->
    </div>
    <!-- END layout-wrapper -->

    <!--start back-to-top-->
    <button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
        <i class="ri-arrow-up-line"></i>
    </button>
    <!--end back-to-top-->

    
    <!-- Theme Settings Start -->
    @include('components.theme_setting')
    <!-- Theme Settings End -->

     <!-- JAVASCRIPTS Links Here -->
   @include('components.js_scripts_links')
</body>

</html>