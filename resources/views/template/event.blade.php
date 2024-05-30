<div class="events page_section">
    <div class="container">

        <div class="row">
            <div class="col">
                <div class="section_title text-center">
                    <h1>Upcoming Events</h1>
                </div>
            </div>
        </div>

        <div class="event_items">

            <!-- Event Item -->

            @foreach ($events as $item)

            <div class="row event_item">
                <div class="col">
                    <div class="row d-flex flex-row align-items-end">

                        <div class="col-lg-2 order-lg-1 order-2">
                            <div class="event_date d-flex flex-column align-items-center justify-content-center">
                                <h2 class="text-dark">{{$item->date}}</h2>
                            </div>
                        </div>

                        <div class="col-lg-6 order-lg-2 order-3">
                            <div class="event_content">
                                <div class="event_name"><a class="trans_200" href="#">{{$item->event_title}}</a></div>
                                <div class="event_location">{{$item->subtitle}}</div>
                                <p>{{$item->description }}</p>
                            </div>
                        </div>

                        <div class="col-lg-4 order-lg-3 order-1">
                            <div class="event_image">
                                <img src="{{ asset('templates/events/' . $item->images) }}" class="img-fluid mb-3" alt="{{ $item->images }} Image" style="max-height: 140px; width:100%">
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            @endforeach

        </div>

    </div>
</div>


