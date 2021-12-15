@extends('layout.adminLayout')
@section('title', 'Contact')
    

@section('page-name')
    <h2>Contact Page</h2>
    <hr>
@endsection

@section('banner')
<h2>This is Contact page banner</h2>    
@endsection

@section('main')
    <h2>This is Contact page content</h2>
@endsection

{{-- @section('default-content')
    <h4>This is Contact Page text </h4>
@show --}}

@section('default-content')
    @parent
    <h4>This is Contact Page text </h4>
@show