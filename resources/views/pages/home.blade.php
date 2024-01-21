@extends('Layouts.app')

@section('content')
@include('Components.home.slider')
<div class="container">
@include('Components.home.news')
<div class="row">
    <div class="col-md-9">
        @include('Components.home.history')
        @include('Components.home.principalMsg')
        @include('Components.home.notice')
        @include('Components.home.photoGallery')
    </div>
    <div class="col-md-3 noPrintShow">
        @include('Components.sideNav.admissionSection')
        @include('Components.sideNav.downloadLink')
        @include('Components.sideNav.visitorsCount')
    </div>
</div>
</div>
@endsection