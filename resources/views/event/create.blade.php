@extends('layout')

@section('title')
    Create Event
@endsection

@section('content')
    @include('components.title', ['pageName' => 'Create Event'])

    <section class="section single-speaker">

        <div class="container">
            <div class="block">
                <div class="row">
                    <h1 class="d-flex justify-content-center align-items-center">Create Event</h1>
                    <form action="/create-event" method="POST" enctype="multipart/form-data">
                        {{-- basic information --}}
                        <div class="row">
                            <h2>Basic Information</h2>
                            <div class="col-lg-5 col-md-6 align-self-md-center">
                                {{-- event name --}}
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="event_name">Event Name</label>
                                    <input type="text" id="event_name" name="event_name"
                                        class="form-control form-control-lg" placeholder="Enter your event name"
                                        value="{{ old('event_name') }}" />
                                    <div class="text-danger pl-2">
                                        {{ $errors->first('event_name') }}
                                    </div>
                                </div>

                                {{-- category --}}
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="category">Category</label>
                                    <select class="form-select form-select-lg mb-3" name="category"
                                        aria-label="Large select example" value="{{ old('category') }}">
                                        <option selected disabled>Select your category</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category }}"
                                                {{ old('category') == $category ? 'selected' : '' }}>
                                                {{ $category }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <div class="text-danger pl-2">
                                        {{ $errors->first('category') }}
                                    </div>
                                </div>

                                <div class="form-outline mb-4">
                                    <label class="form-label" for="location">Venue</label>
                                    <input type="text" id="location" name="location"
                                        class="form-control form-control-lg" placeholder="Enter your location"
                                        value="{{ old('location') }}" />
                                    <div class="text-danger pl-2">
                                        {{ $errors->first('location') }}
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                                {{-- date --}}
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="date">Event Date</label>
                                    <input type="date" id="date" name="date" class="form-control form-control-lg"
                                        value="{{ old('date') }}" />
                                    <div class="text-danger pl-2">
                                        {{ $errors->first('date') }}
                                    </div>
                                </div>

                                <!-- time -->
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="time">Event Time</label>
                                    <input type="time" id="time" name="time" class="form-control form-control-lg"
                                        value="{{ old('time') }}" />
                                    <div class="text-danger pl-2">
                                        {{ $errors->first('time') }}
                                    </div>
                                </div>

                                {{-- event image --}}
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="photo">Event Thumbnail</label>
                                    <input type="file" id="photo" name="photo" class="form-control form-control-lg"
                                        value="{{ old('photo') }}" />
                                    <div class="text-danger pl-2">
                                        {{ $errors->first('photo') }}
                                    </div>
                                </div>


                                <input type="text" id="user_id" name="user_id" hidden value="" />

                            </div>
                        </div>

                        {{-- description --}}
                        <div class="row">
                            <h2>Description</h2>
                            {{-- event name --}}
                            <div class="form-outline mb-4">
                                <label class="form-label" for="description">Event Description</label>
                                <textarea class="form-control form-control-lg" placeholder="Enter your event description" name="description">{{ old('description') }}</textarea>
                                <div class="text-danger pl-2">
                                    {{ $errors->first('description') }}
                                </div>
                            </div>
                        </div>

                        {{-- ticket price --}}
                        <h2 class="d-flex justify-content-center align-items-center">Ticket Prices</h2>
                        <div class="row">
                            {{-- ticket 1 --}}
                            <div class="row">
                                <h2>Ticket 1</h2>
                                <div class="row">
                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="t1_name">Ticket 1 Name</label>
                                        <input type="text" id="t1_name" name="t1_name"
                                            class="form-control form-control-lg" placeholder="Enter your ticket 1 name"
                                            value="{{ old('t1_name') }}" />
                                        <div class="text-danger pl-2">
                                            {{ $errors->first('t1_name') }}
                                        </div>
                                    </div>

                                </div>
                                <div class="col-lg-5 col-md-6 align-self-md-center">
                                    {{-- ticket 1 price --}}
                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="t1_price">Ticket 1 Price</label>
                                        <input type="text" id="t1_price" name="t1_price"
                                            class="form-control form-control-lg" placeholder="Enter your ticket 1 price"
                                            value="{{ old('t1_price') }}" />
                                        <div class="text-danger pl-2">
                                            {{ $errors->first('t1_price') }}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                                    {{-- ticket 1 count --}}
                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="t1_count">Ticket 1 Count</label>
                                        <input type="number" id="t1_count" name="t1_count"
                                            class="form-control form-control-lg" placeholder="Enter your ticket 1 count"
                                            value="{{ old('t1_count') }}" />
                                        <div class="text-danger pl-2">
                                            {{ $errors->first('t1_count') }}
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- ticket 2 --}}
                            <div class="row">
                                <h2>Ticket 2</h2>
                                <div class="row">
                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="t2_name">Ticket 2 Name</label>
                                        <input type="text" id="t2_name" name="t2_name"
                                            class="form-control form-control-lg" placeholder="Enter your ticket 2 name"
                                            value="{{ old('t2_name') }}" />
                                        <div class="text-danger pl-2">
                                            {{ $errors->first('t2_name') }}
                                        </div>
                                    </div>

                                </div>
                                <div class="col-lg-5 col-md-6 align-self-md-center">
                                    {{-- ticket 1 price --}}
                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="t2_price">Ticket 2 Price</label>
                                        <input type="text" id="t2_price" name="t2_price"
                                            class="form-control form-control-lg" placeholder="Enter your ticket 2 price"
                                            value="{{ old('t2_price') }}" />
                                        <div class="text-danger pl-2">
                                            {{ $errors->first('t2_price') }}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                                    {{-- ticket 1 count --}}
                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="t2_count">Ticket 2 Count</label>
                                        <input type="number" id="t2_count" name="t2_count"
                                            class="form-control form-control-lg" placeholder="Enter your ticket 2 count"
                                            value="{{ old('t2_count') }}" />
                                        <div class="text-danger pl-2">
                                            {{ $errors->first('t2_count') }}
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- ticket 3 --}}
                            <div class="row">
                                <h2>Ticket 3</h2>
                                <div class="row">
                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="t3_name">Ticket 3 Name</label>
                                        <input type="text" id="t3_name" name="t3_name"
                                            class="form-control form-control-lg" placeholder="Enter your ticket 3 name"
                                            value="{{ old('t3_name') }}" />
                                        <div class="text-danger pl-2">
                                            {{ $errors->first('t3_name') }}
                                        </div>
                                    </div>

                                </div>
                                <div class="col-lg-5 col-md-6 align-self-md-center">
                                    {{-- ticket 1 price --}}
                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="t3_price">Ticket 3 Price</label>
                                        <input type="text" id="t3_price" name="t3_price"
                                            class="form-control form-control-lg" placeholder="Enter your ticket 3 price"
                                            value="{{ old('t3_price') }}" />
                                        <div class="text-danger pl-2">
                                            {{ $errors->first('t3_price') }}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                                    {{-- ticket 1 count --}}
                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="t3_count">Ticket 3 Count</label>
                                        <input type="number" id="t3_count" name="t3_count"
                                            class="form-control form-control-lg" placeholder="Enter your ticket 3 count"
                                            value="{{ old('t3_count') }}" />
                                        <div class="text-danger pl-2">
                                            {{ $errors->first('t3_count') }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>




                        {{-- submit button --}}
                        <div class="text-center text-lg-start mt-4 pt-2">
                            <button type="submit" class="btn btn-main-md btn-lg"
                                style="padding-left: 2.5rem; padding-right: 2.5rem;">Create Event</button>

                        </div>

                        @csrf
                    </form>
                </div>
            </div>
    </section>
@endsection


<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Get user ID from local storage
        var userData = localStorage.getItem('loggedUser');
        var user = JSON.parse(userData); // Corrected JSON.parse() here

        if (!user) {
            window.location.href = '/login';
        }

        // console.log(user);
        // Set user ID in the input field
        document.getElementById('user_id').value = user.id;
    });
</script>
