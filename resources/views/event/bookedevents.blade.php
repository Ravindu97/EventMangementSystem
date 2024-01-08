@extends('layout')

@section('title')
    Booked Events
@endsection

@section('content')
    @include('components.title', ['pageName' => 'Booked Events'])

    @include('event.eventgrid', ['events' => $events, 'myEvents' => false, 'booked' => true])
@endsection



<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Get user ID from local storage
        var userData = localStorage.getItem('loggedUser');
        var user = JSON.parse(userData); // Corrected JSON.parse() here

        if (!user) {
            window.location.href = '/login';
        }
    });
</script>
