@extends('Layouts.app')

@section('content')
<div class="content container">
	<div class="row cols-wrapper">
		
		@include('Components.routine.class')
		
		<div class="col-md-3 noPrintShow">
			@include('Components.sideNav.admissionSection')
			@include('Components.sideNav.downloadLink')
			@include('Components.sideNav.visitorsCount')
		</div>
	</div><!--//cols-wrapper-->
</div><!--//content-->
@endsection