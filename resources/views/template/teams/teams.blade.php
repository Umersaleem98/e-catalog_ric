<!DOCTYPE html>
<html lang="en">
<head>
    @include('template.head')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <style>
        .hover-card:hover {
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.3); /* Example box shadow for hover effect */
            transform: translateY(-5px); /* Example translateY for hover effect */
            transition: all 0.3s ease; /* Example transition for smooth effect */
        }
        .social-icon {
    margin-right: 10px; /* Add right margin for spacing between icons */
    margin-bottom: 10px; /* Add bottom margin for vertical spacing */
}

        /* Custom CSS to reduce line height for h2 tags within .card-body */

    </style>
</head>
<body>

@include('template.home')

<div class="super_container">
    @include('template.navbar')

    <div class="row mt-4">
        <div class="col">
            <div class="section_title text-center">
                <h1>MEET OUR TEAM</h1>
            </div>
        </div>
    </div>

    <!-- Header -->
    <section class="container mt-5">
        <div class="row justify-content-center">
            <!-- Left side (image) -->
            <div class="col-md-4">
                <div class="card hover-card"> <!-- Added hover-card class -->
                    <div class="card-body">
                        <img src="{{ asset('team/Arooba_Gillani.png') }}" class="img-fluid" alt="CEO Image">
                    </div>world-leading 
                </div>
            </div>
            <!-- Right side (message) -->
            <div class="col-md-8">
                <div class="card hover-card"> <!-- Added hover-card class -->
                    <div class="card-body">
                        <h2 class="text-dark mt-3">Arooba Gillani</h2>
                        <h2 class="text-dark mt-1">Director UAO</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Other card elements -->
    <div class="container mt-5">
        <div class="row">
            <!-- Add hover-card class to each card -->
            @foreach ($teams as $item)
            <div class="col-md-3 col-sm-12 mb-4">
                <div class="card hover-card">
                    <div class="card-body">
                        <img src="{{ asset('team/' . $item->image) }}" class="img-fluid mb-3" alt="{{ $item->name }} Image" style="height: 200px; width:100%">
                        <h3 class="text-dark mt-3">{{ $item->name }}</h3>
                        <h3 class="text-dark mt-3">{{ $item->designation }}</h3>
                        <a href="{{ url('meet_out_team', ['id' => $item->id]) }}" class="mt-3">About More</a>
                    </div>
                    <div class="card-footer">
                        <div class="text-center">
                            <a href="#" class="social-icon"><i class="fab fa-facebook"></i></a>
                            <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

            <!-- Repeat for other cards -->
        </div>
    </div>
    <br><br>

    @include('template.event')
    @include('template.footer')
</body>
</html>
