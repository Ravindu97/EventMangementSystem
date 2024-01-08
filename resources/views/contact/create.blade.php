@extends('layout')

@section('title')
    Contact Us
@endsection

@section('content')
    @include('components.title', ['pageName' => 'Contact'])

    <section class="section contact-form">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h3>Get in <span class="alternate">Touch</span></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores, velit.</p>
                    </div>
                </div>
            </div>
            <form action="/contact" class="row" method="POST">
                <div class="col-md-6">
                    <input type="text" class="form-control main" name="name" id="name" placeholder="Name"
                        value="{{ old('name') }}">
                    <div class="text-danger pl-2">
                        {{ $errors->first('name') }}
                    </div>
                </div>
                <div class="col-md-6">
                    <input type="email" class="form-control main" name="email" id="email" placeholder="Email"
                        value="{{ old('email') }}">
                    <div class="text-danger pl-2">
                        {{ $errors->first('name') }}
                    </div>
                </div>
                <div class="col-md-12">
                    <input type="text" class="form-control main" name="mobile" id="mobile" placeholder="Mobile"
                        value="{{ old('mobile') }}">
                    <div class="text-danger pl-2">
                        {{ $errors->first('mobile') }}
                    </div>
                </div>
                <div class="col-md-12">
                    <textarea name="message" id="message" class="form-control main" rows="10" placeholder="Your Message">{{ old('message') }}</textarea>
                    <div class="text-danger pl-2">
                        {{ $errors->first('name') }}
                    </div>
                </div>
                <div class="col-12 text-center">
                    <button type="submit" class="btn btn-main-md">Send Message</button>
                </div>
                @csrf
            </form>
        </div>
    </section>
@endsection
