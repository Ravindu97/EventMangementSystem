@extends('layout')

@section('title')
    All Events
@endsection

@section('content')
    @include('components.title', ['pageName' => 'All Events'])

    @include('event.eventgrid', ['events' => $events, 'myEvents' => false, 'booked' => false])
@endsection
