@extends('Layout.app')

@section('content')

<div class="content container">
	<!--<marquee style="color:red; font-size:18px;">কামিল ১ম ও ২য় বর্ষ ফরম পূরণ ১৩ জানুয়ারী ২০২০ হতে ‍শুরু হয়ে ২০ জানুয়ারী ২০২০ পর্যন্ত চলবে। সকল ছাত্র/ছাত্রী কে তাদের স্ব-স্ব মোবাইল এস.এম.এস চেক করতে নির্দেশ দেয়া হল। ইতিমধ্যে এস.এম.এস এ সকল তথ্য জানিয়ে দেয়া হয়েছে।</marquee>-->

	<div class="row cols-wrapper">
		<div class="col-md-12 noPrintShow">
			<div class="page-wrapper">
				<header class="page-heading clearfix">
					<h1 class="heading-title pull-left">Inauguration of annual sports program-2023</h1>
					<div class="breadcrumbs pull-right">
						<ul class="breadcrumbs-list">
							<li class="breadcrumbs-label">You are here:</li>
							<li><a href="{{('home')}}">Home</a><i class="fa fa-angle-right"></i></li>
							<li class="current">Leadership Team</li>
						</ul>
					</div><!--//breadcrumbs-->
				</header>
			</div>
		</div>
		<div class="col-md-9">

			<div style="background: #FFF; padding: 5px;">

				<div class="page-content">
					<div class="row page-row image-event">

						<a class="prettyphoto col-md-4 col-sm-4 col-xs-6" rel="prettyPhoto[gallery]"
							href="{{asset('../../../images')}}/event/event8037523Jan2023.jpg">
							<img src="{{asset('../../../images')}}/event/event8037523Jan2023.jpg"
								class="img-responsive img-thumbnail" alt="">
							<strong class='title'>Inauguration of annual sports program-2023</strong>
						</a>

						<a class="prettyphoto col-md-4 col-sm-4 col-xs-6" rel="prettyPhoto[gallery]"
							href="{{asset('../../../images')}}/event/event6697023Jan2023.jpg">
							<img src="{{asset('../../../images')}}/event/event6697023Jan2023.jpg"
								class="img-responsive img-thumbnail" alt="">
							<strong class='title'>Inauguration of annual sports program-2023</strong>
						</a>

						<a class="prettyphoto col-md-4 col-sm-4 col-xs-6" rel="prettyPhoto[gallery]"
							href="{{asset('../../../images')}}/event/event9697323Jan2023.jpg">
							<img src="{{asset('../../../images')}}/event/event9697323Jan2023.jpg"
								class="img-responsive img-thumbnail" alt="">
							<strong class='title'>Inauguration of annual sports program-2023</strong>
						</a>

					</div><!--//page-row-->
					<div class="row page-row image-event">

						<a class="prettyphoto col-md-4 col-sm-4 col-xs-6" rel="prettyPhoto[gallery]"
							href="{{asset('../../../images')}}/event/event3655923Jan2023.jpg">
							<img src="{{asset('../../../images')}}/event/event3655923Jan2023.jpg"
								class="img-responsive img-thumbnail" alt="">
							<strong class='title'>Inauguration of annual sports program-2023</strong>
						</a>

						<a class="prettyphoto col-md-4 col-sm-4 col-xs-6" rel="prettyPhoto[gallery]"
							href="{{asset('../../../images')}}/event/event9515423Jan2023.jpg">
							<img src="{{asset('../../../images')}}/event/event9515423Jan2023.jpg"
								class="img-responsive img-thumbnail" alt="">
							<strong class='title'>Inauguration of annual sports program-2023</strong>
						</a>

						<a class="prettyphoto col-md-4 col-sm-4 col-xs-6" rel="prettyPhoto[gallery]"
							href="{{asset('../../../images')}}/event/event7275123Jan2023.jpg">
							<img src="{{asset('../../../images')}}/event/event7275123Jan2023.jpg"
								class="img-responsive img-thumbnail" alt="">
							<strong class='title'>Inauguration of annual sports program-2023</strong>
						</a>

					</div><!--//page-row-->
					<div class="row page-row image-event">

						<a class="prettyphoto col-md-4 col-sm-4 col-xs-6" rel="prettyPhoto[gallery]"
							href="{{asset('../../../images')}}/event/event8487423Jan2023.jpg">
							<img src="{{asset('../../../images')}}/event/event8487423Jan2023.jpg"
								class="img-responsive img-thumbnail" alt="">
							<strong class='title'>Inauguration of annual sports program-2023</strong>
						</a>

						<a class="prettyphoto col-md-4 col-sm-4 col-xs-6" rel="prettyPhoto[gallery]"
							href="{{asset('../../../images')}}/event/event9002823Jan2023.jpg">
							<img src="{{asset('../../../images')}}/event/event9002823Jan2023.jpg"
								class="img-responsive img-thumbnail" alt="">
							<strong class='title'>Inauguration of annual sports program-2023</strong>
						</a>

					</div><!--//page-row-->
				</div><!--//page-content-->
			</div>
		</div>

		<div class="col-md-3 noPrintShow">
			@include('Components.Pages.Home.admissionSection')
			@include('Components.Pages.Home.downloadLink')
			@include('Components.Pages.Home.visitorsCount')
		</div>
	</div><!--//cols-wrapper-->
</div><!--//content-->

@endsection