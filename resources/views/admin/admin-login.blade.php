@extends('admin_layout')

@section('title')
    Admin Login
@endsection

@if (isset($userDataJson))
    <script>
        // Parse the JSON user data
        var userData = {!! json_encode(json_decode($userDataJson), JSON_HEX_TAG) !!};

        // Store the user data in local storage
        localStorage.setItem('admin', JSON.stringify(userData));
    </script>
@endif

@section('content')
    <section class="register" style="margin-bottom: 50px">
        <div class="container-fluid h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">

                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                    <h1>Admin Login</h1>
                    @if (session()->has('err-msg'))
                        <div class="alert alert-danger" role="alert">
                            {{ session()->get('err-msg') }}
                        </div>
                    @endif
                    <form action="/admin/login" method="POST">


                        <div class="form-outline mb-4">
                            <label class="form-label" for="email">Email address</label>
                            <input type="email" id="email" name="email" class="form-control form-control-lg"
                                placeholder="Enter a valid email address" value="{{ old('email') }}" />
                            <div class="text-danger pl-2">
                                {{ $errors->first('email') }}
                            </div>
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-3">
                            <label class="form-label" for="password">Password</label>
                            <input type="password" id="password" name="password" class="form-control form-control-lg"
                                placeholder="Enter password" value="{{ old('password') }}" />
                            <div class="text-danger pl-2">
                                {{ $errors->first('password') }}
                            </div>
                        </div>

                        {{-- <div class="d-flex justify-content-between align-items-center">
                            <!-- Checkbox -->
                            <div class="form-check mb-0">
                                <label class="form-check-label" for="form2Example3">
                                    Remember me
                                </label>
                                <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
                            </div>
                            <a href="#!" class="text-body">Forgot password?</a>
                        </div> --}}
                        @csrf

                        <div class="text-center text-lg-start mt-4 pt-2">
                            <button type="submit" class="btn btn-main-md btn-lg"
                                style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>

                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var userData = localStorage.getItem('admin');
        var user = JSON.parse(userData); // Corrected JSON.parse() here

        if (user) {
            window.location.href = '/admin/dashboard';
        }
    });
</script>
