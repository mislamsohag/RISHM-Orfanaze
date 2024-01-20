@extends('Layouts.app')

@section('content')
@include('pages.Home.slider')
<div class="container">
@include('pages.Home.news')
<div class="row">
    <div class="col-md-9">
        @include('pages.Home.history')
        @include('pages.Home.principalMsg')
        @include('pages.Home.notice')
        @include('pages.Home.photoGallery')
    </div>
    <div class="col-md-3 noPrintShow">
        @include('pages.Home.admissionSection')
        @include('pages.Home.downloadLink')
        @include('pages.Home.visitorsCount')
    </div>
</div>
</div>
@endsection