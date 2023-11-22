
@extends('Layout.app')

@section('content')
    @include('Components.nav')
    @include('Components.slider')
    @include('Components.news')
    @include('Components.history')
    @include('Components.principalMsg')
    @include('Components.notice')
    @include('Components.photoGallery')
@endsection