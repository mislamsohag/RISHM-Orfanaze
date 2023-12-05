@extends('Layout.app')

@section('content')
<div class="content container">
	<div class="row cols-wrapper">
		<div class="col-md-12 noPrintShow">
			<div class="page-wrapper">
				<header class="page-heading clearfix">
					<h1 class="heading-title pull-left">Syllabus</h1>
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
					<tbody>
						@foreach($syllabuses as $syllabus)
						<tr>
							<td>{{$syllabus['id']}}</td>
							<td>{{$syllabus['class']}}</td>
							<td><a href='javascript:;'>{{$syllabus['syllabusTitle']}}</a> <span
									class="label label-success"></span></td>
							<td><i class="fa fa-calendar"></i> {{$syllabus['date']}}</td>

							<td>
								<a href="{{asset('../results/3183608Jan2023.pdf')}}" target="_blank"
									class="btn btn-success btn-sm"><i class='fa fa-download'> &nbsp;{{$syllabus['download']}}</i></a>
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
			@include('Components.pages.home.admissionSection')
			@include('Components.pages.home.downloadLink')
			@include('Components.pages.home.visitorsCount')
		</div>
	</div><!--//cols-wrapper-->
</div>
@endsection