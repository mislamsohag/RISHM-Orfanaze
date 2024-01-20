@extends('Layouts.app')

@section('content')
<div class="content container">
	<div class="row cols-wrapper">
		<div class="col-md-12 noPrintShow">
			<div class="page-wrapper">
				<header class="page-heading clearfix">
					<h1 class="heading-title pull-left">Employees</h1>
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
				<table class="table table-striped">
					<thead>
						<tr>
							<th>#</th>
							<th>Picture</th>
							<th>Name</th>
							<th>Designation</th>
							<!--<th>E-mail</th>-->
							<th>Phone</th>
						</tr>
					</thead>
					<tbody>

						@foreach($employees as $employee)
						<tr>
							<td>{{$employee['id']}}</td>
							<td>
								<img src="{{$employee['image']}}" class="img-responsive img-circle profile-img"
									alt="">
							</td>

							<td><a href="javascript:"><b>{{$employee['name']}}</b></a></td>
							<td>{{$employee['designation']}}</td>
							<!--<td></td>-->
							<td>{{$employee['phone']}}</td>
						</tr>
						@endforeach
						
					</tbody>
				</table><!--//table-->
			</div><!--//table-responsive-->
		</div>


		<div class="col-md-3 noPrintShow">
			@include('pages.home.admissionSection')
			@include('pages.home.downloadLink')
			@include('pages.home.visitorsCount')
		</div>
	</div><!--//cols-wrapper-->
</div>
@endsection