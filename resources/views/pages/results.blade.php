@extends('Layouts.app')

@section('content')
<div class="content container">
	<div class="row cols-wrapper">
		@include('Components.results.pdfResult')

		<div class="col-md-3 noPrintShow">
			@include('Components.results.board')
			@include('Components.results.term')
			@include('Components.results.tutorial')
			
		</div>
	</div><!--//cols-wrapper-->
</div>



@endsection