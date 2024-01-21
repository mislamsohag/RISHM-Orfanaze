
@extends('Layouts.app')

@section('content')

<div class="content container">
	<div class="row cols-wrapper">

		@include('Components.contact')

		<div class="col-md-3 noPrintShow">
			@include('Components.sideNav.admissionSection')
			@include('Components.sideNav.downloadLink')
			@include('Components.sideNav.visitorsCount')
		</div>

		<div class="page-row">
			<article class="map-section">
				<h3 class="title">How to find us On Google Map</h3>
				<div id="map"></div><!--//map-->
			</article><!--//map-->
		</div><!--//page-row-->
	</div><!--//cols-wrapper-->
</div><!--//content-->

@endsection