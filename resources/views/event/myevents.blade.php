@extends('layout')

@section('title')
    My Events
@endsection

@section('content')
    @include('components.title', ['pageName' => 'My Events'])

    @include('event.eventgrid', ['events' => $events, 'myEvents' => true, 'booked' => false])
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
