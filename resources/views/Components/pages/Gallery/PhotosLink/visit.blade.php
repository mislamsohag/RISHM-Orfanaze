@extends('Layout.app')

@section('content')
<div class="content container">
	<div class="row cols-wrapper">
		<div class="col-md-12 noPrintShow">
			<div class="page-wrapper">
				<header class="page-heading clearfix">
					<h1 class="heading-title pull-left">Madrasah Visit</h1>
					<div class="breadcrumbs pull-right">
						<ul class="breadcrumbs-list">
							<li class="breadcrumbs-label">You are here:</li>
							<li><a href="{{url('gallery')}}">Home</a><i class="fa fa-angle-right"></i></li>
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
							href="{{url('../../../images')}}/event/event5163417Jan2023.jpg">
							<img src="{{asset('../../../images')}}/event/event5163417Jan2023.jpg"
								class="img-responsive img-thumbnail" alt="">
							<strong class='title'>জনাব ফাহমিদা হক, অতিরিক্ত জেলা প্রশাসক (শিক্ষা ও আইসিটি), মহোদয় কে
								ফু...</strong>
						</a>

						<a class="prettyphoto col-md-4 col-sm-4 col-xs-6" rel="prettyPhoto[gallery]"
							href="{{url('../../../images')}}/event/event5268017Jan2023.jpg">
							<img src="{{asset('../../../images')}}/event/event5268017Jan2023.jpg"
								class="img-responsive img-thumbnail" alt="">
							<strong class='title'>জনাব ফাহমিদা হক, অতিরিক্ত জেলা প্রশাসক (শিক্ষা ও আইসিটি), মহোদয়ের
								মাদ্...</strong>
						</a>

						<a class="prettyphoto col-md-4 col-sm-4 col-xs-6" rel="prettyPhoto[gallery]"
							href="{{url('../../../images')}}/event/event5313817Jan2023.jpg">
							<img src="{{asset('../../../images')}}/event/event5313817Jan2023.jpg"
								class="img-responsive img-thumbnail" alt="">
							<strong class='title'>জনাব ফাহমিদা হক, অতিরিক্ত জেলা প্রশাসক (শিক্ষা ও আইসিটি), মহোদয়ের
								মাদ্...</strong>
						</a>

					</div><!--//page-row-->
					<div class="row page-row image-event">
						<a class="prettyphoto col-md-4 col-sm-4 col-xs-6" rel="prettyPhoto[gallery]"
							href="{{url('../../../images')}}/event/event6341617Jan2023.jpg">
							<img src="{{asset('../../../images')}}/event/event6341617Jan2023.jpg"
								class="img-responsive img-thumbnail" alt="">
							<strong class='title'>জনাব ফাহমিদা হক, অতিরিক্ত জেলা প্রশাসক (শিক্ষা ও আইসিটি), মহোদয়ের
								মাদ্...</strong>
						</a>
					</div><!--//page-row-->
				</div><!--//page-content-->
			</div>
		</div>

		<div class="col-md-3 noPrintShow">
			@include('Components.pages.home.admissionSection')
			@include('Components.pages.home.downloadLink')
			@include('Components.pages.home.visitorsCount')
		</div>
	</div><!--//cols-wrapper-->
</div><!--//content-->
@endsection