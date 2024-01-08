@extends('admin_layout')


@section('content')
    <h1>Admin Approved Events</h1>

    {{-- {{ dd($events) }} --}}

    <div style="margin: 80px auto; padding: 0px 20px">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Event Name</th>
                    <th scope="col">Event Date</th>
                    <th scope="col">Event Time</th>
                    <th scope="col">Location</th>
                    <th scope="col">Category</th>
                    <th scope="col">Description</th>
                    <th scope="col">Event Owner</th>
                    <th scope="col">Ticket 1</th>
                    <th scope="col">Ticket 2</th>
                    <th scope="col">Ticket 3</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($events as $event)
                    <tr>
                        <th scope="row">{{ $event['events']->id }}</th>
                        <td>{{ $event['events']->event_name }}</td>
                        <td>{{ $event['events']->date }}</td>
                        <td>{{ $event['events']->time }}</td>
                        <td>{{ $event['events']->location }}</td>
                        <td>{{ $event['events']->category }}</td>
                        <td>{{ $event['events']->description }}</td>
                        <td>{{ $event['user']->name }}</td>
                        <td>{{ $event['events']->t1_name }} - {{ $event['events']->t1_sold }} /
                            {{ $event['events']->t1_count }}</td>
                        <td>{{ $event['events']->t2_name }} - {{ $event['events']->t2_sold }} /
                            {{ $event['events']->t2_count }}</td>
                        <td>{{ $event['events']->t3_name }} - {{ $event['events']->t3_sold }} /
                            {{ $event['events']->t3_count }}</td>
                        <td>
                            <form action="/admin/delete-event/{{ $event['events']->id }}" method="POST"
                                style="margin-top: 10px">
                                <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                @csrf
                            </form>
                        </td>
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
