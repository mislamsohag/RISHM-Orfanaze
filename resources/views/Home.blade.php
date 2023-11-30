@extends('Layout.app')

@section('content')
@include('Components.pages.home.nav')
@include('Components.pages.home.slider')
<div class="container">
@include('Components.pages.home.news')
<div class="row">
    <div class="col-md-9">
        @include('Components.pages.home.history')
        @include('Components.pages.home.principalMsg')
        @include('Components.pages.home.notice')
        @include('Components.pages.home.photoGallery')
    </div>
    <div class="col-md-3 noPrintShow">
        @include('Components.pages.home.admissionSection')
        @include('Components.pages.home.downloadLink')
        @include('Components.pages.home.visitorsCount')
    </div>
</div>
</div>
@endsection