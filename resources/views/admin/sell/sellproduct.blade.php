@extends('admin.layouts.master')
@section('title','Sell product')
@section('style')

@endsection
@section('content')
<div id="content-wrapper">
<div id="app">
<sellproduct-component></sellproduct-component>
</div>
</div>

<script src="{{ asset('js/app.js') }}"></script>
@endsection

