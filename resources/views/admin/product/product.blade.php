@extends('admin.layouts.master')
@section('title','Create Product')
@section('style')

@endsection
@section('content')
<div id="content-wrapper">
<div id="app">
<product-component></product-component>
</div>
</div>

<script src="{{ asset('js/app.js') }}"></script>
@endsection

