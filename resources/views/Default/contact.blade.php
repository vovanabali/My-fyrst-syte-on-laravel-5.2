@extends('default.layouts.layout') {{--Данная страница наследуеться от родительского шаблона--}}

@section('navbar')
 @parent
@endsection

@section('header')
 @parent
@endsection

@section('sidebar')
 @parent
@endsection

@section('content')
 @parent
@endsection


@section('content')
 @include('default.contactVive')
@endsection