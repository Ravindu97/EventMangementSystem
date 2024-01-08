@extends('layout')

@if (isset($userDataJson))
    <script>
        // Parse the JSON user data
        var userData = {!! json_encode(json_decode($userDataJson), JSON_HEX_TAG) !!};

        // Store the user data in local storage
        localStorage.setItem('loggedUser', JSON.stringify(userData));
    </script>
@endif

@section('content')
    @include('home.banner', ['event' => $latestEvent])
    @include('home.about', ['event' => $latestEvent])
    {{-- @include('home.eventgrid') --}}
    @include('home.swiper', ['approvedEvents' => $approvedEvents])
@endsection
