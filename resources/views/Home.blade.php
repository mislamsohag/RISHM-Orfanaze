@extends('Layout.app')

@section('content')
@include('Components.Pages.Home.slider')
<div class="container">
@include('Components.pages.Home.news')
<div class="row">
    <div class="col-md-9">
        @include('Components.Pages.Home.history')
        @include('Components.Pages.Home.principalMsg')
        @include('Components.Pages.Home.notice')
        @include('Components.Pages.Home.photoGallery')
    </div>
    <div class="col-md-3 noPrintShow">
        @include('Components.Pages.Home.admissionSection')
        @include('Components.Pages.Home.downloadLink')
        @include('Components.Pages.Home.visitorsCount')
    </div>
</div>
</div>
@endsection