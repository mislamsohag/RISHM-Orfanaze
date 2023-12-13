 <!-- Scripts -->
 <script src="{{asset('js/jquery-migrate-1.2.1.min.js')}}"></script>
 <script src="{{asset('js/bootstrap.min.js')}}"></script>
 <script src="{{asset('js/bootstrap-hover-dropdown.min.js')}}"></script>
 <script src="{{asset('js/back-to-top.js')}}"></script>
 <script src="{{asset('js/jquery.placeholder.js')}}"></script>
 <script src="{{asset('js/jflickrfeed/jflickrfeed.min.js')}}"></script>
 <script src="{{asset('js/jquery.prettyPhoto.js')}}"></script>
 <script src="{{asset('js/jquery.flexslider-min.js')}}"></script>
 <script src="{{asset('js/modernizr.js')}}"></script>
 <script src="{{asset('js/main.js')}}"></script>
 <script src="{{asset('js/jquery.scrollbox.min.js')}}"></script>
 <script src="{{asset('js/jquery.nivo.slider.js')}}"></script>

</body>
<script>
 $(window).load(function () {
     $('#slider').nivoSlider();
 });

 $(function () {
     $(window).bind('scroll', function () {
         var navHeight = $(".header").height();
         ($(window).scrollTop() > navHeight) ? $('nav').addClass('goToTop') : $('nav').removeClass('goToTop');
     });
     //===============================		
     /*
      * Content Slider
     */
     $('#content-slider').scrollbox({
         direction: 'h',
         distance: 134
     });
     $('#slider-backward').click(function () {
         $('#content-slider').trigger('backward');
     });
     $('#slider-forward').click(function () {
         $('#content-slider').trigger('forward');
     });
     //===============================


     //========Active nav bar===========  
     var url = window.location;
     // Will only work if string in href matches with location
     $('ul.nav li a[href="' + url + '"]').parent().addClass('active');

     // Will also work for relative and absolute hrefs
     $('li.dropdown ul.dropdown-menu a').filter(function () {
         return this.href == url;
     }).parent().addClass('active').parent().parent().addClass('active');

 });
</script>

</html>