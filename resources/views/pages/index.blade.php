@extends('layouts.app')

@section('content')
    

    <!--================ Start Home Banner Area =================-->
    @include('components.home.banner')
    <!--================ End Home Banner Area =================-->

    <!--================ Start About Us Area =================-->
    @include('components.home.about')
    <!--================ End About Us Area =================-->

    <!--================ Srart Brand Area =================-->
    @include('components.home.brand')
    <!--================ End Brand Area =================-->

    <!--================ Start Features Area =================-->
    @include('components.home.features')`
    <!--================ End Features Area =================-->

    <!--================Start Portfolio Area =================-->
    @include('components.home.portfolio')
    <!--================End Portfolio Area =================-->

  
@endsection
