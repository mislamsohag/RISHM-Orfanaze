@extends('Layouts.app')

@section('content')
<div class="content container">
	<div class="row cols-wrapper">
		<div class="col-md-12 noPrintShow">
			<div class="page-wrapper">
				<header class="page-heading clearfix">
					<h1 class="heading-title pull-left">Madrasah Program </h1>
					<div class="breadcrumbs pull-right">
						<ul class="breadcrumbs-list">
							<li class="breadcrumbs-label">You are here:</li>
							<li><a href="index.html">Home</a><i class="fa fa-angle-right"></i></li>
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
							href="{{asset('../../../images')}}/event/event1786722Aug2023.jpg">
							<img src="{{asset('../../../images')}}/event/event1786722Aug2023.jpg"
								class="img-responsive img-thumbnail" alt="">
							<strong class='title'>দাখিল দশম শ্রেণির অভিভাবক সমাবেশ</strong>
						</a>

						<a class="prettyphoto col-md-4 col-sm-4 col-xs-6" rel="prettyPhoto[gallery]"
							href="{{asset('../../../images')}}/event/event8656922Aug2023.jpg">
							<img src="{{asset('../../../images')}}/event/event8656922Aug2023.jpg"
								class="img-responsive img-thumbnail" alt="">
							<strong class='title'>দাখিল দশম শ্রেণির অভিভাবক সমাবেশ ২</strong>
						</a>

						<a class="prettyphoto col-md-4 col-sm-4 col-xs-6" rel="prettyPhoto[gallery]"
							href="{{asset('../../../images')}}/event/event5305422Aug2023.jpg">
							<img src="{{asset('../../../images')}}/event/event5305422Aug2023.jpg"
								class="img-responsive img-thumbnail" alt="">
							<strong class='title'>দাখিল দশম শ্রেণির অভিভাবক সমাবেশ ৩</strong>
						</a>

					</div><!--//page-row-->
					<div class="row page-row image-event">

						<a class="prettyphoto col-md-4 col-sm-4 col-xs-6" rel="prettyPhoto[gallery]"
							href="{{asset('../../../images')}}/event/event8167831Aug2023.jpg">
							<img src="{{asset('../../../images')}}/event/event8167831Aug2023.jpg"
								class="img-responsive img-thumbnail" alt="">
							<strong class='title'>সহকারী মৌলভী জনাব এ.এইচ.এম মোহাম্মদ উল্যাহ সাহেবের শেষ কর্মদিবসে
								ফুলেল...</strong>
						</a>

						<a class="prettyphoto col-md-4 col-sm-4 col-xs-6" rel="prettyPhoto[gallery]"
							href="{{asset('../../../images')}}/event/event8202231Aug2023.jpg">
							<img src="{{asset('../../../images')}}/event/event8202231Aug2023.jpg"
								class="img-responsive img-thumbnail" alt="">
							<strong class='title'>সহকারী মৌলভী জনাব এ.এইচ.এম মোহাম্মদ উল্যাহ সাহেবের শেষ কর্মদিবসে
								ফুলেল...</strong>
						</a>

						<a class="prettyphoto col-md-4 col-sm-4 col-xs-6" rel="prettyPhoto[gallery]"
							href="{{asset('../../../images')}}/event/event3939131Aug2023.jpg">
							<img src="{{asset('../../../images')}}/event/event3939131Aug2023.jpg"
								class="img-responsive img-thumbnail" alt="">
							<strong class='title'>সহকারী মৌলভী জনাব এ.এইচ.এম মোহাম্মদ উল্যাহ সাহেবের শেষ কর্মদিবসে
								ফুলেল...</strong>
						</a>

					</div><!--//page-row-->
				</div><!--//page-content-->
			</div>
		</div>
		
		<div class="col-md-3 noPrintShow">
			@include('pages.Home.admissionSection')
			@include('pages.Home.downloadLink')
			@include('pages.Home.visitorsCount')
		</div>
	</div><!--//cols-wrapper-->
</div><!--//content-->
@endsection