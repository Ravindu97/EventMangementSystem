@extends('layout')

@if (isset($userDataJson))
    <script>
        // Parse the JSON user data
        var userData = JSON.parse('{!! $userDataJson !!}');

        // Store the user data in local storage
        localStorage.setItem('loggedUser', JSON.stringify(userData));
    </script>
@endif


@section('content')
    @include('home.banner')
    @include('home.about')
    {{-- @include('home.eventgrid') --}}
    @include('home.swiper')
@endsection
