@extends('layouts.app')

@section('title', 'About')

@section('content')
    <!--================ Start About Banner Area =================-->
    @include('components.about.banner')
    <!--================ End About Banner Area =================-->

    <!--================ Start About Us Area =================-->
    @include('components.about.about')
    <!--================ End About Us Area =================-->

    <!--================ Srart Brand Area =================-->
    @include('components.about.brand')
    <!--================ End Brand Area =================-->

    <!--================ Start Newsletter Area =================-->
    @include('components.about.newsletter')
    <!--================ End Newsletter Area =================-->

    <!--================Start Testimonials Area =================-->
    @include('components.about.testimonials')
    <!--================End Testimonials Area =================-->
@endsection
