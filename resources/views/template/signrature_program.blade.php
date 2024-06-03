<!DOCTYPE html>
<html lang="en">
<head>
    <title>Payment</title>
    @include('template.head')
    <style>
        /* Custom CSS for responsiveness */
        @media (max-width: 767px) {
            .ml-sm-5 {
                margin-left: 0 !important;
            }
        }
    </style>
</head>
<body>

<div class="super_container">

    <!-- Header -->
    @include('template.navbar')

    @include('template.home')

    <div class="events page_section">
        <div class="container">

            <div class="row mb-5">
                <div class="col">
                    <div class="section_title text-center">
                        <h1 class="">Signature Stories</h1>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Loop through each Signature Story -->
                @foreach ($SignatureStories as $item)
                    <div class="col-lg-3 col-md-4 mb-2">
                        <div class="card">
                            @if ($item->images)
                                <img src="{{ asset('signature_storie_images/' . $item->images) }}" class="card-img-top" alt="Image of {{ $item->title }}" style="width: 100%; height:200px;">
                            @else
                                <img src="{{ asset('signature_storie_images/default-image.jpg') }}" class="card-img-top" alt="Default Image">
                            @endif
                            <div class="card-body">
                                <h5 class="card-title">{{ $item->title }}</h5>
                                <p class="card-text">{{ Str::limit($item->content, 100) }}</p>
                                <a href="#" class="btn btn-primary">Read More</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </div>

    <!-- Footer -->
    @include('template.footer')<!DOCTYPE html>
    <html lang="en">
    <head>
        <title>Payment</title>
        @include('template.head')
        <style>
            /* Custom CSS for responsiveness */
            @media (max-width: 767px) {
                .ml-sm-5 {
                    margin-left: 0 !important;
                }
            }
        </style>
    </head>
    <body>

    <div class="super_container">

        <!-- Header -->
        @include('template.navbar')

        @include('template.home')

        <div class="events page_section">
            <div class="container">

                <div class="row mb-5">
                    <div class="col">
                        <div class="section_title text-center">
                            <h1 class="">Signature Stories</h1>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <!-- Loop through each Signature Story -->
                    @foreach ($SignatureStories as $item)
                        <div class="col-lg-4 col-md-4 mb-2">
                            <div class="card">
                                @if ($item->images)
                                    <img src="{{ asset('signature_storie_images/' . $item->images) }}" class="card-img-top" alt="Image of {{ $item->title }}" style="width: 100%; height:200px;">
                                @else
                                    <img src="{{ asset('signature_storie_images/default-image.jpg') }}" class="card-img-top" alt="Default Image">
                                @endif
                                <div class="card-body">
                                    <h5 class="card-title">{{ $item->title }}</h5>
                                    <p class="card-text">{{ Str::limit($item->content, 100) }}</p>
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#storyModal{{ $item->id }}">Read More</button>
                                </div>
                            </div>
                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="storyModal{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="storyModalLabel{{ $item->id }}" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="storyModalLabel{{ $item->id }}">{{ $item->title }}</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        {{ $item->content }}
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </div>

        <!-- Footer -->
        @include('template.footer')



        <!-- Include Bootstrap JS (make sure this is included after jQuery) -->

    </body>
    </html>

</body>
</html>
