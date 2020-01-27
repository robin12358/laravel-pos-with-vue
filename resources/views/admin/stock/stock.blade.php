@extends('admin.layouts.master')
@section('title','Create Stock')
@section('style')

@endsection
@section('content')
<div id="content-wrapper">
<div id="app">
<stockproduct-component></stockproduct-component>
</div>
</div>

<script src="{{ asset('js/app.js') }}"></script>
@endsection

