@extends('layouts.app')

@section('title', 'Portfolio')

@section('content')
    <!--================ Start Portfolio Banner Area =================-->
    @include('components.portfolio.banner')
    <!--================ End Portfolio Banner Area =================-->

    <!--================Start Portfolio Area =================-->
    @include('components.portfolio.portfolio')
    <!--================End Portfolio Area =================-->

    <!--================ Srart Newsletter Area =================-->
    @include('components.portfolio.newsletter')
    <!--================ End Newsletter Area =================-->
@endsection
