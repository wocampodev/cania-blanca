@extends('layout')

@section('styles')
    
<link rel="stylesheet" href="{{ asset('/css/glider.min.css') }}">

@endsection

@section('content')

    @include('sections.banner-inner')

    @include('product_detail.components.story')

    @include('product_detail.components.detail')

@endsection

@section('scripts')
    
<script src="{{ asset('/js/glider.min.js') }}"></script>
<script src="{{ asset('/js/slider.js') }}"></script>

@endsection