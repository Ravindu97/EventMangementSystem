<section class="section speakers bg-speaker overlay-lighter">
    <div class="container">
        <div class="container text-center">
            <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-4">
                {{-- {{ dd($events) }} --}}
                @foreach ($events as $eventData)
                    <div class="col">

                        @include('event.eventCard', [
                            'event' => $booked ? $eventData['events'] : $eventData,
                            'myEvents' => $myEvents,
                            'bookings' => $eventData['bookings'],
                            'tickets' => $eventData['tickets'],
                        ])
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    </div>
</section>
