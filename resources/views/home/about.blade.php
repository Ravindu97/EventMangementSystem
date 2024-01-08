<section class="section about">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-6 align-self-center">
                <div class="image-block two bg-about">
                    <img class="img-fluid" src="{{ asset('storage/' . $event->photo_path) }}" alt="">
                </div>
            </div>
            <div class="col-lg-6 col-md-6 align-self-center ml-lg-auto">
                <div class="content-block">
                    <h2>About The <span class="alternate">{{ $event->event_name }}</span></h2>
                    <div class="description-one">
                        <p>
                            {{ $event->description }}
                        </p>
                    </div>

                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <a href="/event/{{ $event->id }}" class="btn btn-main-md">Buy ticket</a>
                        </li>
                        {{-- <li class="list-inline-item">
                            <a href="#" class="btn btn-transparent-md">Read more</a>
                        </li> --}}
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
