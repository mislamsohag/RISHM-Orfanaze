@extends('Layouts.app')

@section('content')
<div class="content container">
	<div class="row cols-wrapper">
		
		@include('Components.syllabus')

		<div class="col-md-3 noPrintShow">
			@include('Components.sideNav.admissionSection')
			@include('Components.sideNav.downloadLink')
			@include('Components.sideNav.visitorsCount')
		</div>
	</div><!--//cols-wrapper-->
</div>
@endsection