@extends('Layout.app')

@section('content')
<div class="content container">
	<!--<marquee style="color:red; font-size:18px;">কামিল ১ম ও ২য় বর্ষ ফরম পূরণ ১৩ জানুয়ারী ২০২০ হতে ‍শুরু হয়ে ২০ জানুয়ারী ২০২০ পর্যন্ত চলবে। সকল ছাত্র/ছাত্রী কে তাদের স্ব-স্ব মোবাইল এস.এম.এস চেক করতে নির্দেশ দেয়া হল। ইতিমধ্যে এস.এম.এস এ সকল তথ্য জানিয়ে দেয়া হয়েছে।</marquee>-->

	<div class="row cols-wrapper">
		<div class="col-md-12 noPrintShow">
			<div class="page-wrapper">
				<header class="page-heading clearfix">
					<h1 class="heading-title pull-left">Exam Routine</h1>
					<div class="breadcrumbs pull-right">
						<ul class="breadcrumbs-list">
							<li class="breadcrumbs-label">You are here:</li>
							<li><a href="home">Home</a><i class="fa fa-angle-right"></i></li>
							<li class="current">Leadership Team</li>
						</ul>
					</div><!--//breadcrumbs-->
				</header>
			</div>
		</div>

		<div class="col-md-9">

			<div style="background: #FFF;" class="table-responsive">
				<table class="table table-bordered">
					<thead style="background: #002E5B;">
						<tr>
							<th style=" color: #FFF;">#</th>
							<th style=" color: #FFF;">Class</th>
							<th style=" color: #FFF;" width="350">Title</th>
							<th style=" color: #FFF;">Published Date</th>
							<th style=" color: #FFF;">Download</th>
						</tr>
					</thead>
					<tbody>
						@foreach($routines as $routine)
						<tr>
							<td>{{$routine['id']}}</td>
							<td>{{$routine['class']}}</td>
							<td><a href='javascript:;'>{{$routine['title']}}</a> <span
									class="label label-success"></span></td>
							<td><i class="fa fa-calendar"></i> {{$routine['date']}} </td>
							<td>
								<a href='../../public/images/routine/Routine7793827Nov2019.pdf'
									class="btn btn-success btn-xs"><i class='fa fa-download'> &nbsp;{{$routine['download']}}</i></a>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table><!--//table-->
			</div><!--//table-responsive-->

			<tr>
				<td colspan="6">

				</td>
			</tr>
		</div>
		
		<div class="col-md-3 noPrintShow">
			@include('Components.Pages.Home.admissionSection')
			@include('Components.Pages.Home.downloadLink')
			@include('Components.Pages.Home.visitorsCount')
		</div>
	</div><!--//cols-wrapper-->
</div><!--//content-->
@endsection