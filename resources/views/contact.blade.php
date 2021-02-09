@extends('layout')

@section('content')

    @include('sections.banner-inner')

    @include('contact.components.form')

@endsection

@section('scripts')
    
    <!-- //Js scripts -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <!-- Toastr  -->
    <script src="{{ asset('assets/toastr/toastr.min.js') }}"></script>
    <script src="{{asset("assets/js/alerts.js")}}"></script>
    <script src="{{ asset('js/contact.js') }}"></script>

@endsection