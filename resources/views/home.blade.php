@extends('layout')

@section('styles')
    
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>

@endsection

@section('content')

    @include('sections.history')
    
    {{-- @include('sections.about') --}}
    
    @include('sections.products')
    
    @include('sections.culture')
    
    @include('sections.brand')
    
    @include('sections.clients')
    
    @include('sections.video')
    
    {{-- @include('sections.team') --}}
    
    {{-- @include('sections.blog') --}}
    
    {{-- @include('sections.call') --}}
    
    {{-- @include('sections.promo') --}}
    
@endsection

@section('scripts')

<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="{{ secure_asset('js/home.js') }}"></script>

@endsection