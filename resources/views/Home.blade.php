@extends('Layout.app')

@section('content')
@include('Components.home.nav')
@include('Components.home.slider')
@include('Components.home.news')
<div class="row cols-wrapper">
    <div class="col-md-9">
        @include('Components.home.history')
        @include('Components.home.principalMsg')
        @include('Components.home.notice')
        @include('Components.home.photoGallery')
    </div>
    <div class="col-md-3 noPrintShow">
        @include('Components.home.admission')
        @include('Components.home.downloadLink')
        @include('Components.home.visitorsCount')
    </div>
</div>
@endsection