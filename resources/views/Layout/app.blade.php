@include('Components.head_links')


    <!-- Header -->
    @include('Components.header')        
    @include('Components.nav')
        <!-- All Components inject here -->
        @yield('content')
        <!-- All Components inject here -->        
    <!-- Footer -->
    @include('Components.footer')
    <!-- Footer -->

@include('Components.js_links')