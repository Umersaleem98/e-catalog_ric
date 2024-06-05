<!DOCTYPE html>
<html lang="en">
<head>
    <title>Signature Programs</title>
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
                        <h1 class="">Signature Programs</h1>
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

</body>
</html>
