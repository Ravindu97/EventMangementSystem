@extends('admin_layout')

@if (isset($userDataJson))
    <script>
        // Parse the JSON user data
        var userData = {!! json_encode(json_decode($userDataJson), JSON_HEX_TAG) !!};

        // Store the user data in local storage
        localStorage.setItem('admin', JSON.stringify(userData));
    </script>
@endif

@section('content')
    <h1>Admin Home</h1>

    <ul class="navbar-nav">

        <li class="nav-item">
            <a class="nav-link" href="/admin/users">Users</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/admin/approved-events">Approved Events</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" aria-disabled="true" href="/admin/pending-events">Pending Events</a>
        </li>
    </ul>
@endsection

<script>
    // Get user ID from local storage
    var adminData = localStorage.getItem('admin');
    var user = JSON.parse(adminData); // Corrected JSON.parse() here

    if (!adminData) {
        window.location.href = '/admin/login';
    }
</script>
