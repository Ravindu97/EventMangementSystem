@extends('admin_layout')


@section('content')
    <h1>Admin Users</h1>

    {{-- {{ dd($users) }} --}}

    <div style="margin: 80px auto; padding: 0px 20px">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Mobile</th>
                    <th scope="col">District</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <th scope="row">{{ $user->id }}</th>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->mobile }}</td>
                        <td>{{ $user->district }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection


<script>
    // Get user ID from local storage
    var adminData = localStorage.getItem('admin');
    var user = JSON.parse(adminData); // Corrected JSON.parse() here

    if (!adminData) {
        window.location.href = '/admin/login';
    }
</script>
