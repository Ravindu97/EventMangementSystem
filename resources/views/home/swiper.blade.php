<section class="speakers-full-width">
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-12">
                <!-- Speaker Slider -->
                <div class="speaker-slider">
                    @foreach ($approvedEvents as $event)
                        <div class="speaker-image">
                            {{-- @if ($event->id % 3 == 0)
                                <img src="images/eventImages/2.webp" alt="speaker" class="img-fluid">
                            @elseif($event->id % 3 == 1)
                                <img src="images/eventImages/5.webp" alt="speaker" class="img-fluid">
                            @else
                                <img src="{{ asset('storage/' . $event->photo_path) }}" alt="speaker" class="img-fluid">
                            @endif --}}
                            <img src="{{ asset('storage/' . $event->photo_path) }}" alt="speaker" class="img-fluid">
                            <div class="primary-overlay text-center">
                                <h5>{{ $event->event_name }}</h5>
                                <p>{{ $event->category }}</p>
                                <ul class="list-inline">
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a>
                                    </li>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-linkedin"></i></a>
                                    </li>
                                </ul>

                                <a href="/event/{{ $event->id }}">
                                    <p>Read More</p>
                                </a>
                            </div>
                        </div>
                    @endforeach

                    {{-- <div class="speaker-image">
                        <img src="images/eventImages/1.webp" alt="speaker" class="img-fluid">
                        <div class="primary-overlay text-center">
                            <h5>Y FM MUSIC FEST 2023</h5>
                            <p>CEO Rancom Motor</p>
                            <ul class="list-inline">
                                <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="speaker-image">
                        <img src="images/eventImages/2.webp" alt="speaker" class="img-fluid">
                        <div class="primary-overlay text-center">
                            <h5>Y FM MUSIC FEST 2023</h5>
                            <p>CEO Rancom Motor</p>
                            <ul class="list-inline">
                                <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="speaker-image">
                        <img src="images/eventImages/3.webp" alt="speaker" class="img-fluid">
                        <div class="primary-overlay text-center">
                            <h5>Y FM MUSIC FEST 2023</h5>
                            <p>CEO Rancom Motor</p>
                            <ul class="list-inline">
                                <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="speaker-image">
                        <img src="images/eventImages/4.webp" alt="speaker" class="img-fluid">
                        <div class="primary-overlay text-center">
                            <h5>Y FM MUSIC FEST 2023</h5>
                            <p>CEO Rancom Motor</p>
                            <ul class="list-inline">
                                <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="speaker-image">
                        <img src="images/eventImages/5.webp" alt="speaker" class="img-fluid">
                        <div class="primary-overlay text-center">
                            <h5>Y FM MUSIC FEST 2023</h5>
                            <p>CEO Rancom Motor</p>
                            <ul class="list-inline">
                                <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="speaker-image">
                        <img src="images/eventImages/6.webp" alt="speaker" class="img-fluid">
                        <div class="primary-overlay text-center">
                            <h5>Y FM MUSIC FEST 2023</h5>
                            <p>CEO Rancom Motor</p>
                            <ul class="list-inline">
                                <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="speaker-image">
                        <img src="images/eventImages/7.webp" alt="speaker" class="img-fluid">
                        <div class="primary-overlay text-center">
                            <h5>Y FM MUSIC FEST 2023</h5>
                            <p>CEO Rancom Motor</p>
                            <ul class="list-inline">
                                <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fa fa-linkedin"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="speaker-image">
                        <img src="images/eventImages/8.webp" alt="speaker" class="img-fluid">
                        <div class="primary-overlay text-center">
                            <h5>Y FM MUSIC FEST 2023</h5>
                            <p>CEO Rancom Motor</p>
                            <ul class="list-inline">
                                <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fa fa-linkedin"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="speaker-image">
                        <img src="images/speakers/speaker-full-four.jpg" alt="speaker" class="img-fluid">
                        <div class="primary-overlay text-center">
                            <h5>Y FM MUSIC FEST 2023</h5>
                            <p>CEO Rancom Motor</p>
                            <ul class="list-inline">
                                <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fa fa-linkedin"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="speaker-image">
                        <img src="images/speakers/speaker-full-five.jpg" alt="speaker" class="img-fluid">
                        <div class="primary-overlay text-center">
                            <h5>Y FM MUSIC FEST 2023</h5>
                            <p>CEO Rancom Motor</p>
                            <ul class="list-inline">
                                <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fa fa-linkedin"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</section>
