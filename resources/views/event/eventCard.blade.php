<div class="card" style="width: 20rem;">
    {{-- <img src="{{ asset('storage/' . $event->photo_path) }}" class="card-img-top" alt="..."> --}}
    <img src="{{ asset('storage/' . $event->photo_path) }}" class="card-img-top" alt="...">


    <div class="card-body">
        <h5 class="card-title">{{ $event->event_name }}</h5>

        <div class="d-flex justify-content-between align-items-center">
            <p class="text-success font-weight-bold">{{ $event->date }}</p>
            <p class="text-success font-weight-bold">{{ $event->time }}</p>
        </div>

        @if (isset($tickets))
            {{-- {{ dd($tickets['ticket_name']) }} --}}
            <div class="ticket-info">
                {{-- <p class="text-success font-weight-bold">Ticket{{ $tickets['ticket_name'] }}</p> --}}
                <p>Ticket Name: <span class="text-success font-weight-bold">{{ $tickets['ticket_name'] }}</span> </p>
                <p>Price: <span class="text-success font-weight-bold">Rs {{ $tickets['ticket_price'] }}</span></p>
                <p>Tickets <span class="text-success font-weight-bold">{{ $tickets['ticket_count'] }}</span></p>
            </div>
        @endif


        @if (!isset($tickets))
            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                of the card's content.</p>
        @endif

        @if ($myEvents)
            <a href="/my-event-details/{{ $event->id }}" class="btn btn-success">More Details</a>
        @else
            <a href="/event/{{ $event->id }}" class="btn btn-success">Read More</a>
        @endif

        @if ($myEvents && $event->approved == 0)
            <a href="/update-event/{{ $event->id }}/edit" class="btn btn-primary" style="margin-top: 10px">Edit
                Details</a>
        @endif

        {{-- event delete button --}}
        @if ($myEvents && $event->approved == 0)
            <form action="/delete-event/{{ $event->id }}" method="POST" style="margin-top: 10px">
                <button type="submit" class="btn btn-danger">Delete</button>
                @csrf
            </form>
        @endif


    </div>
</div>

{{--  --}}
