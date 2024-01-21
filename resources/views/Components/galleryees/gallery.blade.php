<div class="col-md-12 noPrintShow">
	<div class="page-wrapper">
		<header class="page-heading clearfix">
			<h1 class="heading-title pull-left">Photo Gallery</h1>
			<div class="breadcrumbs pull-right">
				<ul class="breadcrumbs-list">
					<li class="breadcrumbs-label">You are here:</li>
					<li><a href="{{url('home')}}">Home</a><i class="fa fa-angle-right"></i></li>
					<li class="current">Leadership Team</li>
				</ul>
			</div><!--//breadcrumbs-->
		</header>
	</div>
</div>

<div class="col-md-9">
	<div id="effect-5" class="effects clearfix">
		<div class="row">
			<div class="col-md-4 gallery">
				<p class="title"><strong> Madrasah Visit</strong></p>
				<div class="img">
					<img src="{{asset('../images')}}/event/event5163417Jan2023.jpg" class="img-responsive" alt="">
					<div class="overlay">
						<a href="{{url('gallery/visit')}}" class="expand"><i class="fa fa-hand-o-right"></i></a>
						<a class="close-overlay hidden">x</a>
					</div>
				</div>
			</div>
			<div class="col-md-4 gallery">
				<p class="title"><strong> Ceremony </strong></p>
				<div class="img">
					<img src="{{asset('../images')}}/event/event3756307Jan2020.jpg" class="img-responsive" alt="">
					<div class="overlay">
						<a href="{{url('gallery/ceremony')}}" class="expand"><i class="fa fa-hand-o-right"></i></a>
						<a class="close-overlay hidden">x</a>
					</div>
				</div>
			</div>
			<div class="col-md-4 gallery">
				<p class="title"><strong>Annual sports program-23</strong></p>
				<div class="img">
					<img src="{{asset('../images')}}/event/event6697023Jan2023.jpg" class="img-responsive" alt="">
					<div class="overlay">
						<a href="{{url('gallery/sports')}}" class="expand"><i class="fa fa-hand-o-right"></i></a>
						<a class="close-overlay hidden">x</a>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4 gallery">
				<p class="title"><strong>Madrasah Program</strong></p>
				<div class="img">
					<img src="{{asset('../images')}}/event/event4990512Mar2018.jpg" class="img-responsive" alt="">
					<div class="overlay">
						<a href="{{url('gallery/programme')}}" class="expand"><i class="fa fa-hand-o-right"></i></a>
						<a class="close-overlay hidden">x</a>
					</div>
				</div>
			</div>
		</div>
	</div>

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
</div>