<!DOCTYPE html>
<html lang="en">
<head>
    <title>Teams</title>
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
            <div class="col-md-5">
                <div class="card hover-card"> <!-- Added hover-card class -->
                    <div class="card-body">
                        <img src="{{ asset('team/Arooba_Gillani.png') }}" class="img-fluid" alt="CEO Image" style="max-height: 450px; width:100%">
                    </div>
                </div>
            </div>
            <!-- Right side (message) -->
            <div class="col-md-7">
                <div class="card hover-card"> <!-- Added hover-card class -->
                    <div class="card-body">
                        <br>
                        <h2 class="text-dark mt-3  p-2">Arooba Gillani  (Director UAO)</h2>
                        {{-- <h2 class="text-dark mt-1"></h2> --}}
                        <p class="text-dark justify-center  p-2" >

                            A commitment to quality faculty and students has fueled NUST’s impressive rise in rankings and the success of our international alumni network. As Director Advancement, I am privileged to steer a self-sustaining system that supports Pakistan’s leading science and technology university. Our aim is to become the driving force of Pakistan’s knowledge economy, with the dream of making NUST a need-blind university.
                            <br>
                            Many deserving students face significant financial challenges, with nearly half of our undergraduates requiring scholarships. Despite our best efforts, a gap remains, affecting 150 to 250 students annually. Our NEED Initiative Campaign aims to bridge this gap, ensuring all talented students can afford higher education.
                            <br>
                            Your support is crucial to this campaign, dedicated to making need-blind admissions a reality and empowering our youth. Join us in sponsoring dreams and lighting the way for a more equitable future.
                        </p>
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
                        <img src="{{ asset('team/' . $item->image) }}" class="img-fluid mb-3" alt="{{ $item->name }} Image" style="height: 240px; width:100%">
                        <h3 class="text-dark mt-3">{{ $item->name }}</h3>
                        <h4 class="text-dark mt-3">{{ $item->designation }}</h4>
                        <a href="{{ url('meet_out_team', ['id' => $item->id]) }}" class="mt-3">About More</a>
                    </div>
                </div>
            </div>
        @endforeach

            <!-- Repeat for other cards -->
        </div>
    </div>


    @include('template.event')
    @include('template.footer')
</body>
</html>
