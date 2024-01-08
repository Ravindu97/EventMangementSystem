<section class="banner-two bg-banner-two overlay-white-slant text-overlay"
    style="background: url('{{ asset('storage/' . $event->photo_path) }}') no-repeat; background-size: cover; background-position: right center;">
    <div class="container" style="text-align: center; ">
        <div class="">
            <div class="row">
                <div class="col-md-12 banner-middle-container" style="width: auto">
                    <!-- Content Block -->
                    <div class="col-md-5 banner-block" style="color:white; margin: 0 auto;">
                        <h1 style="color: white; text-transform: uppercase; font-size: 60px">{{ $event->event_name }}
                        </h1>
                        <h3
                            style="font-size: 40px; padding-top: 10px; padding-bottom: 10px; border-radius: 50px; background-color: #000000; margin: 10px auto; ">
                            {{ $event->category }}</h3>

                        <h4>{{ $event->date }}</h4>
                        <h4>{{ $event->time }}</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
