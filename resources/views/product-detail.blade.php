@extends('layout')

@section('content')

    @include('product_detail.components.detail')

    {{-- @include('product_detail.components.modal-detail') --}}

    @include('product.components.call')

@endsection

@section('scripts')

@endsection
