@extends('layout')

@section('title')
    Register
@endsection

@section('content')
    <section class="register" style="margin-bottom: 50px">
        <div class="container-fluid min-h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-9 col-lg-6 col-xl-5">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
                        class="img-fluid" alt="Sample image">
                </div>
                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                    <h1>Register</h1>
                    <form action="{{ route('users.store') }}" method="POST">
                        {{-- name --}}
                        <div class="form-outline mb-4">
                            <label class="form-label" for="name">Name</label>
                            <input type="text" id="name" name="name" class="form-control form-control-lg"
                                placeholder="Enter your name" value="{{ old('name') }}" />
                            <div class="text-danger pl-2">
                                {{ $errors->first('name') }}
                            </div>
                        </div>

                        {{-- district --}}
                        <div class="form-outline mb-4">
                            <label class="form-label" for="district">District</label>
                            <select class="form-select form-select-lg mb-3" name="district"
                                aria-label="Large select example" value="{{ old('district') }}">
                                <option selected disabled>Select your district</option>
                                @foreach ($districts as $district)
                                    <option value="{{ $district }}"
                                        {{ old('district') == $district ? 'selected' : '' }}>
                                        {{ $district }}
                                    </option>
                                @endforeach
                                {{-- <option value="One">One</option>
                                <option value="Two">Two</option>
                                <option value="Three">Three</option> --}}
                            </select>
                            <div class="text-danger pl-2">
                                {{ $errors->first('district') }}
                            </div>
                        </div>

                        {{-- mobile --}}
                        <div class="form-outline mb-4">
                            <label class="form-label" for="mobile">Mobile</label>
                            <input type="text" id="mobile" name="mobile" class="form-control form-control-lg"
                                placeholder="Enter your mobile number" value="{{ old('mobile') }}" />
                            <div class="text-danger pl-2">
                                {{ $errors->first('mobile') }}
                            </div>
                        </div>

                        <!-- Email input -->
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

                        <!-- Confirm password input -->
                        <div class="form-outline mb-3">
                            <label class="form-label" for="confirm_password">Confirm Password</label>
                            <input type="password" id="confirm_password" name="confirm_password"
                                class="form-control form-control-lg" placeholder="Enter password again"
                                value="{{ old('confirm_password') }}" />
                            <div class="text-danger pl-2">
                                {{ $errors->first('confirm_password') }}
                            </div>
                        </div>


                        <div class="text-center text-lg-start mt-4 pt-2">
                            <button type="submit" class="btn btn-main-md btn-lg"
                                style="padding-left: 2.5rem; padding-right: 2.5rem;">Register</button>
                            <p class="small fw-bold mt-2 pt-1 mb-0">Already have an account? <a href="/login"
                                    class="link-danger">Login</a></p>
                        </div>

                        @csrf

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
