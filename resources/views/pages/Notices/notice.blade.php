@extends('Layouts.app')

@section('content')
<div class="content container">
	<div class="row cols-wrapper">
		<div class="col-md-12 noPrintShow">
			<div class="page-wrapper">
				<header class="page-heading clearfix">
					<h1 class="heading-title pull-left">Notice Details</h1>
					<div class="breadcrumbs pull-right">
						<ul class="breadcrumbs-list">
							<li class="breadcrumbs-label">You are here:</li>
							<li><a href="{{url('home')}}">Home</a><i class="fa fa-angle-right"></i></li>
							<li class="current">Leadership Team</li>
						</ul>
					</div>
				</header>
			</div>
		</div>

		<div class="col-md-9">
			<div style="background: #FFF;" class="news_details">
				<article class="events-item page-row has-divider clearfix">
					<div class="details col-md-12">
						<h3 class="title"><strong>ভর্তি বিজ্ঞপ্তি - ২০২৪</strong></h3>
						<p class="news_time">
							<span class="time">
								<i class="fa fa-clock-o"></i>&nbsp;23:43 PM&nbsp;
								<i class="fa fa-calendar"></i> 02 Sep 2023
							</span>
						</p>
						<p class="desc">
						<p>অন্যান্য</p>
						</p>
					</div><!--//details-->
				</article><!--//events-item-->
			</div><!--//table-responsive-->
		</div>

		<div class="col-md-3 noPrintShow">
			@include('pages.home.admissionSection')
			@include('pages.home.downloadLink')
			@include('pages.home.visitorsCount')
		</div>
	</div><!--//cols-wrapper-->
</div><!--//content-->


@endsection