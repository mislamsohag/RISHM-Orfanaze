<section class="slide-box">
    <h1 class="section-heading text-highlight slider-content">
        <span class="line">Students Photo Gallery</span>
    </h1>

        <div class="col-md-9">
            <div id="effect-5" class="effects clearfix">
                <div class="row">
                    <div class="col-md-4 gallery">
                        <div class="img">
                            <img src="{{asset('../images')}}/event/event5163417Jan2023.jpg" class="img-responsive"
                                alt="">
                            <div class="overlay">
                                <a href="{{url('gallery/visit')}}" class="expand"><i class="fa fa-hand-o-right"></i></a>
                                <a class="close-overlay hidden">x</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 gallery">
                        <div class="img">
                            <img src="{{asset('../images')}}/event/event3756307Jan2020.jpg" class="img-responsive"
                                alt="">
                            <div class="overlay">
                                <a href="{{url('gallery/ceremony')}}" class="expand"><i
                                        class="fa fa-hand-o-right"></i></a>
                                <a class="close-overlay hidden">x</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 gallery">
                        <div class="img">
                            <img src="{{asset('../images')}}/event/event6697023Jan2023.jpg" class="img-responsive"
                                alt="">
                            <div class="overlay">
                                <a href="{{url('gallery/sports')}}" class="expand"><i
                                        class="fa fa-hand-o-right"></i></a>
                                <a class="close-overlay hidden">x</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div 
</section>
<script>
    $(document).ready(function () {
        if (Modernizr.touch) {
            // show the close overlay button
            $(".close-overlay").removeClass("hidden");
            // handle the adding of hover class when clicked
            $(".img").click(function (e) {
                if (!$(this).hasClass("hover")) {
                    $(this).addClass("hover");
                }
            });
            // handle the closing of the overlay
            $(".close-overlay").click(function (e) {
                e.preventDefault();
                e.stopPropagation();
                if ($(this).closest(".img").hasClass("hover")) {
                    $(this).closest(".img").removeClass("hover");
                }
            });
        } else {
            // handle the mouseenter functionality
            $(".img").mouseenter(function () {
                $(this).addClass("hover");
            })
                // handle the mouseleave functionality
                .mouseleave(function () {
                    $(this).removeClass("hover");
                });
        }
    });
</script>