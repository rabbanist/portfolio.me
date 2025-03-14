@extends('layouts.app')

@section('title', 'Contact')

@section('content')
    <!--================ Start Banner Area =================-->
    @include('components.contact.banner')
    <!--================ End Banner Area =================-->

    <!--================Contact Area =================-->
    @include('components.contact.contact')
    <!--================Contact Area =================-->
@endsection
