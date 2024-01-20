@include('Components.donate_head_links')
    @include('Components.donate_nav')
        <!-- All Components inject here -->
        @yield('content')
        <!-- All Components inject here -->        
    @include('Components.donate_footer')
    
@include('Components.donate_js_links')