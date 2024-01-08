@extends('layout')

@section('title')
    Event
@endsection

@section('content')
    @include('components.title', ['pageName' => 'Event'])

    <section class="section single-speaker">

        <div class="container">
            <div class="block">
                <div class="row">
                    <div class="col-lg-5 col-md-6 align-self-md-center">
                        <div class="image-block">
                            <img src="{{ asset('storage/' . $eventData->photo_path) }}" class="img-fluid" alt="speaker">
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-6 align-self-center">
                        <div class="content-block">
                            <div class="name" style="display: flex; gap: 50px">
                                <h1>{{ $eventData->event_name }}</h1>
                            </div>
                            <div class="profession">
                                <h3 class="text-success font-weight-bold">{{ $eventData->date }}</h3>
                                <h3 class="text-success font-weight-bold">{{ $eventData->time }}</h3>
                                <h4 class="text-success font-weight-bold">{{ $eventData->location }}</h4>
                            </div>
                            <div class="details">
                                <p>{{ $eventData->category }}
                                    <br>
                                </p>
                                <p>
                                    {{ $eventData->description }}
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
    </section>

    <!-- pricing Section -->

    <section class="section pricing">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h3>Get <span class="alternate">ticket</span></h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusm tempor incididunt ut labore
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-lg-4 col-md-6">
                    <form action="{{ route('buy-ticket', ['eventId' => $eventData->id, 'ticketType' => 3]) }}"
                        method="POST">
                        <!-- Pricing Item -->
                        <div class="pricing-item">
                            <div class="pricing-heading">
                                <!-- Title -->
                                <div class="title">
                                    <h6>{{ $eventData->t3_name }}</h6>
                                </div>
                                <!-- Price -->
                                <div class="price">
                                    <h2>Rs {{ $eventData->t3_price }}</h2>
                                    <p>/Person</p>
                                </div>
                            </div>
                            <div class="pricing-body">
                                <!-- Feature List -->
                                <ul class="feature-list m-0 p-0">
                                    <li>
                                        <p><span class="fa fa-check-circle available"></span>1 Seat from back rows</p>
                                    </li>
                                    <li>
                                        <p><span class="fa fa-times-circle unavailable"></span>Free Beverage</p>
                                    </li>
                                    {{-- <li>
                                    <p><span class="fa fa-check-circle available"></span>Certificate</p>
                                </li> --}}
                                    <li>
                                        <p><span class="fa fa-check-circle available"></span>{{ $eventData->t3_sold }} /
                                            {{ $eventData->t3_count }} -
                                            sold
                                        </p>
                                    </li>
                                </ul>
                            </div>
                            @if ($eventData->t3_sold < $eventData->t3_count)
                                <div class="pricing-footer text-center">
                                    <button type="submit" class="btn btn-transparent-md">Buy a ticket</button>
                                </div>
                            @endif
                        </div>
                        <input type="text" id="user_id" name="user_id" hidden value="" />
                        @csrf
                    </form>

                </div>
                <div class="col-lg-4 col-md-6">
                    <form action="{{ route('buy-ticket', ['eventId' => $eventData->id, 'ticketType' => 1]) }}"
                        method="POST">
                        <!-- Pricing Item -->
                        <div class="pricing-item featured">
                            <div class="pricing-heading">
                                <!-- Title -->
                                <div class="title">
                                    <h6>{{ $eventData->t1_name }}</h6>
                                </div>
                                <!-- Price -->
                                <div class="price">
                                    <h2>Rs {{ $eventData->t1_price }}</h2>
                                    <p>/Person</p>
                                </div>
                            </div>
                            <div class="pricing-body">
                                <!-- Feature List -->
                                <ul class="feature-list m-0 p-0">
                                    <li>
                                        <p><span class="fa fa-check-circle available"></span>1 Seat from back rows</p>
                                    </li>
                                    <li>
                                        <p><span class="fa fa-check-circle available"></span>Free Beverage and Pop corn</p>
                                    </li>
                                    {{-- <li>
                                    <p><span class="fa fa-check-circle available"></span>Certificate</p>
                                </li> --}}
                                    <li>
                                        <p><span class="fa fa-check-circle available"></span>{{ $eventData->t1_sold }} /
                                            {{ $eventData->t1_count }} -
                                            sold
                                        </p>
                                    </li>
                                </ul>
                            </div>
                            @if ($eventData->t1_sold < $eventData->t1_count)
                                <div class="pricing-footer text-center">
                                    <button type="submit" class="btn btn-transparent-md">Buy a ticket</button>
                                </div>
                            @endif
                        </div>
                        <input type="text" id="user_id" name="user_id" hidden value="" />
                        @csrf
                    </form>
                </div>
                <div class="col-lg-4 col-md-6 m-auto">
                    <form action="{{ route('buy-ticket', ['eventId' => $eventData->id, 'ticketType' => 2]) }}"
                        method="POST">
                        <!-- Pricing Item -->
                        <div class="pricing-item">
                            <div class="pricing-heading">
                                <!-- Title -->
                                <div class="title">
                                    <h6>{{ $eventData->t2_name }}</h6>
                                </div>
                                <!-- Price -->
                                <div class="price">
                                    <h2>Rs {{ $eventData->t2_price }}</h2>
                                    <p>/Person</p>
                                </div>
                            </div>
                            <div class="pricing-body">
                                <!-- Feature List -->
                                <ul class="feature-list m-0 p-0">
                                    <li>
                                        <p><span class="fa fa-check-circle available"></span>1 Seat from middle rows</p>
                                    </li>
                                    <li>
                                        <p><span class="fa fa-check-circle available"></span>Free Beverage</p>
                                    </li>
                                    {{-- <li>
                                    <p><span class="fa fa-check-circle available"></span>Certificate</p>
                                </li> --}}
                                    <li>
                                        <p><span class="fa fa-check-circle available"></span>{{ $eventData->t2_sold }} /
                                            {{ $eventData->t2_count }} -
                                            sold
                                        </p>
                                    </li>
                                </ul>
                            </div>
                            @if ($eventData->t2_sold < $eventData->t2_count)
                                <div class="pricing-footer text-center">
                                    <button type="submit" class="btn btn-transparent-md">Buy a ticket</button>
                                </div>
                            @endif
                        </div>
                        <input type="text" id="user_id" name="user_id" hidden value="" />
                        @csrf
                    </form>

                    {{-- <p>{{ $data['body'] }}</p> --}}
                </div>
            </div>
        </div>
    </section>
@endsection

<script>
    function buyTicket(ticket) {
        const userData = localStorage.getItem('loggedUser');
        if (userData) {
            console.log(ticket)
        } else {
            window.location.href = '/login';
        }
    }
</script>


<script></script>
