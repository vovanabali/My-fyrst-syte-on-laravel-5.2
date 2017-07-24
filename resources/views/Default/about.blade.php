@extends('default.layouts.layout')

@section('header')
@endsection

@section('sidebar')
@endsection

@section('content')
    @for($i = 0; $i<count($page);$i++)
    <div class="jumbotron" style="margin-top: 20px;">
        <div class="container">
            <h1>{{ $page[$i]->name }}</h1>
            <p>{{ $page[$i]->text }}</p>
        </div>
    </div>
    @endfor
@endsection
