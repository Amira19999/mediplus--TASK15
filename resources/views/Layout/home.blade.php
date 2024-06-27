@extends('layouts.main')

@section('content')

 <!-- Spinner Start -->
 @include('includes.Spinner')
        <!-- Spinner End -->


        <!-- Navbar Start -->
        @include('includes.nav')
        <!-- Navbar End -->


        <!-- Carousel Start -->
        @include('includes.Carousel')
        <!-- Carousel End -->


        <!-- Facilities Start -->
        @include('includes.Facilities')
        <!-- Facilities End -->


        <!-- About Start -->
        @include('includes.about')
        <!-- About End -->


        <!-- Call To Action Start -->
        @include('includes.action')
        <!-- Call To Action End -->


        <!-- Classes Start -->
        @include('includes.Classes')
        <!-- Classes End -->


        <!-- Appointment Start -->
        @include('includes.Appointment')
        <!-- Appointment End -->


        <!-- Team Start -->
        @include('includes.Team')
        <!-- Team End -->


        <!-- Testimonial Start -->
        @include('includes.Testimonial')
        <!-- Testimonial End -->

@endsection