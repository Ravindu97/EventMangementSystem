@extends('layout')

@section('title')
    Update User
@endsection

@if (isset($userDataJson))
    <script>
        // Parse the JSON user data
        var userData1 = {!! json_encode(json_decode($userDataJson), JSON_HEX_TAG) !!};
        // console.log(userData1);
        // Store the user data in local storage
        localStorage.setItem('loggedUser', JSON.stringify(userData1));
    </script>
@endif

@section('content')
    <section class="" style="margin-bottom: 50px">
        <div class="container-fluid min-h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                {{-- <div class="col-md-9 col-lg-6 col-xl-5">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
                        class="img-fluid" alt="Sample image">
                </div> --}}
                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                    <h1>Update User</h1>
                    <form action="/update-user/{{ $user->id }}" method="POST">
                        @method('PATCH')
                        {{-- name --}}
                        {{-- {{ dd($userData) }} --}}

                        <div class="form-outline mb-4">
                            <label class="form-label" for="name">Name</label>
                            <input type="text" id="name" name="name" class="form-control form-control-lg"
                                placeholder="Enter your name" value="{{ old('name') ?? $user->name }}" />

                            <div class="text-danger pl-2">
                                {{ $errors->first('name') }}
                            </div>
                        </div>

                        {{-- district --}}
                        <div class="form-outline mb-4">
                            <label class="form-label" for="district">District</label>
                            <select class="form-select form-select-lg mb-3" name="district"
                                aria-label="Large select example" value="{{ old('district') }}">
                                @foreach ($districts as $district)
                                    <option value="{{ $district }}"
                                        {{ $user->district == $district ? 'selected' : '' }}>
                                        {{ $district }}
                                    </option>
                                @endforeach
                            </select>
                            <div class="text-danger pl-2">
                                {{ $errors->first('district') }}
                            </div>
                        </div>

                        {{-- mobile --}}
                        <div class="form-outline mb-4">
                            <label class="form-label" for="mobile">Mobile</label>
                            <input type="text" id="mobile" name="mobile" class="form-control form-control-lg"
                                placeholder="Enter your mobile number" value="{{ old('mobile') ?? $user->mobile }}" />
                            <div class="text-danger pl-2">
                                {{ $errors->first('mobile') }}
                            </div>
                        </div>

                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="email">Email address</label>
                            <input type="email" id="email" name="email" class="form-control form-control-lg"
                                placeholder="Enter a valid email address" value="{{ old('email') ?? $user->email }}"
                                disabled />
                            <div class="text-danger pl-2">
                                {{ $errors->first('email') }}
                            </div>
                        </div>

                        <!-- Password input -->
                        {{-- <div class="form-outline mb-3">
                            <label class="form-label" for="password">Password</label>
                            <input type="password" id="password" name="password" class="form-control form-control-lg"
                                placeholder="Enter password" value="{{ old('password') }}" />
                            <div class="text-danger pl-2">
                                {{ $errors->first('password') }}
                            </div>
                        </div> --}}

                        <!-- Confirm password input -->
                        {{-- <div class="form-outline mb-3">
                            <label class="form-label" for="confirm_password">Confirm Password</label>
                            <input type="password" id="confirm_password" name="confirm_password"
                                class="form-control form-control-lg" placeholder="Enter password again"
                                value="{{ old('confirm_password') }}" />
                            <div class="text-danger pl-2">
                                {{ $errors->first('confirm_password') }}
                            </div>
                        </div> --}}


                        <div class="text-center text-lg-start mt-4 pt-2">
                            <button type="submit" class="btn btn-main-md btn-lg"
                                style="padding-left: 2.5rem; padding-right: 2.5rem;">Save Details</button>

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
        var userData11 = localStorage.getItem('loggedUser');
        var user = JSON.parse(userData11); // Corrected JSON.parse() here

        if (!user) {
            window.location.href = '/login';
        }
    });
</script>
