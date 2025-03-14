@extends('layouts.app')

@section('title', 'Services')

@section('content')
    <!--================ Start Banner Area =================-->
    @include('components.services.banner')
    <!--================ End Banner Area =================-->

    <!--================ Start Features Area =================-->
    @include('components.services.features')
    <!--================ End Features Area =================-->

    <!--================ Start Testimonial Area =================-->
    @include('components.services.testimonials')
    <!--================ End Testimonial Area =================-->

    <!--================ Start Newsletter Area =================-->
    @include('components.services.newsletter')
    <!--================ End Newsletter Area =================-->
@endsection
