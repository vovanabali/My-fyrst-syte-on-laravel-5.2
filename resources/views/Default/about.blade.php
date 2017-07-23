@extends('default.layouts.layout')

@section('header')
@endsection

@section('sidebar')
@endsection

@section('content')
    <div class="jumbotron" style="margin-top: 100px;">
        <div class="container">
            <h1>{{ $page->name }}</h1>
            <p>{{ $page->text }}</p>
        </div>
    </div>
@endsection
