@extends('admin.layouts.master')
@section('style')

@endsection
@section('content')
<div id="app">
<product-component></product-component>
</div>

<script src="{{ asset('js/app.js') }}"></script>
@endsection
@section('script')


@endsection