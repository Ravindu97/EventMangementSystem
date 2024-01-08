@extends('layout')

@section('title')
    Login
@endsection

@if (isset($userDataJson))
    <script>
        // Parse the JSON user data
        var userData = {!! json_encode(json_decode($userDataJson), JSON_HEX_TAG) !!};

        // Store the user data in local storage
        localStorage.setItem('loggedUser', JSON.stringify(userData));
    </script>
@endif

@section('content')
    <section class="register" style="margin-bottom: 50px">
        <div class="container-fluid h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-9 col-lg-6 col-xl-5">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
                        class="img-fluid" alt="Sample image">
                </div>
                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                    <h1>Login</h1>
                    @if (session()->has('err-msg'))
                        <div class="alert alert-danger" role="alert">
                            {{ session()->get('err-msg') }}
                        </div>
                    @endif
                    <form action="login" method="POST">
                        {{-- <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                            <p class="lead fw-normal mb-0 me-3">Sign in with</p>
                            <button type="button" class="btn btn-primary btn-floating mx-1">
                                <i class="fab fa-facebook-f"></i>
                            </button>

                            <button type="button" class="btn btn-primary btn-floating mx-1">
                                <i class="fab fa-twitter"></i>
                            </button>

                            <button type="button" class="btn btn-primary btn-floating mx-1">
                                <i class="fab fa-linkedin-in"></i>
                            </button>
                        </div>

                        <div class="divider d-flex align-items-center my-4">
                            <p class="text-center fw-bold mx-3 mb-0">Or</p>
                        </div> --}}

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
                            <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="/register"
                                    class="link-danger">Register</a></p>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var userData = localStorage.getItem('loggedUser');
        var user = JSON.parse(userData); // Corrected JSON.parse() here

        if (user) {
            window.location.href = '/';
        }
    });
</script>
