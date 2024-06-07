<!DOCTYPE html>
<html lang="en">
<head>
    <title>Teams</title>
    @include('template.head')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <style>
        .custom-paragraph {
            font-size: 16px; /* Adjust the font size as needed */
            line-height: 1.4; /* Adjust the line height as needed */
            position: relative; /* Required for positioning the signature */
        }
        .signature {
            font-size: 18px;
            color: black;
            margin-right: 40px;
            text-align: right; /* Aligns the text to the right */
            font-weight: bold; /* Makes the text bold */
            margin-top: 10px; /* Adds some space before the signature */
        }

        .hover-card {
            transition: all 0.3s ease; /* Smooth transition for hover effect */
        }

        .hover-card:hover {
            box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.3); /* Box shadow for hover effect */
            transform: translateY(-5px); /* Slightly lifts the card */
        }

        .social-icon {
            margin-right: 10px; /* Add right margin for spacing between icons */
            margin-bottom: 10px; /* Add bottom margin for vertical spacing */
        }

        .custom-paragraph {
            font-size: 1.1em;
            color: #333;
            line-height: 1.8;
        }
        .custom-paragraph .highlight {
            font-weight: bold;
            color: #007bff; /* Bootstrap primary color for emphasis */
        }
        .quote img {
            width: 25px;
            height: 25px;
            color: blue;
            transform: rotate(180deg);
        }
        .signature {
            margin-top: 15px;
            font-family: 'Brush Script MT', cursive;
            font-size: 20px;
            color: black;
        }
        .img-fluid {
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .img-fluid:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.2);
        }
        span{
            color: black;
        }
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
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <img src="{{ asset('team/Arooba_Gillani.png') }}" class="img-fluid" alt="CEO Image" style="max-height: 400px; width: 100%;">
                </div>
                <div class="col-md-8">
                    <p class="text-dark custom-paragraph">
                        <span class="quote">
                            <img src="{{ asset('templates/images/quotation-right-mark-svgrepo-com.svg') }}" alt="" style="transform: rotate(180deg);">
                        </span>
                        <b style="font-size:25px; color:black;">A commitment</b> to quality faculty and students has fueled NUST’s impressive rise in rankings and the success of our international alumni network. As Director Advancement, I am privileged to steer a self-sustaining system that supports<span style="font-size:16px; font-weight: bold"> Pakistan’s leading science and technology university.</span>  Our aim is to become the driving force of Pakistan’s knowledge economy, with the<span style="font-size:16px; font-weight: bold"> dream of making NUST a need-blind university.</span>
                        <br>
                        Many deserving students face significant financial challenges, with<span style="font-size:16px; font-weight: bold"> nearly half of our undergraduates requiring scholarships. Despite our best efforts, a gap remains, affecting 150 to 250 students </span>  annually. Our <span style="font-size:16px; font-weight: bold">NEED Initiative Campaign</span> aims to bridge this gap, ensuring all talented students can afford higher education.
                        <br>
                        Your support is crucial to this campaign, dedicated to making need-blind admissions a reality and empowering our youth. <span style="font-size:16px; font-weight: bold"> Join us in sponsoring dreams and lighting the way for a more equitable future.</span>
                        <span class="quote">
                            <img src="{{ asset('templates/images/quotation-right-mark-svgrepo-com.svg') }}" alt="">
                        </span>
                    </p>
                    <div class="signature">Arooba Gillani</div>
                    <div style="font-size: 14px; color: black; margin-right: 55px; text-align: right; font-weight: bold; margin-top: -4px;">Director</div>
                    <div style="font-size: 14px; color: black; margin-right: 25px; text-align: right; font-weight: bold; margin-top: -4px;">Univerity Advancement Office</div>
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
                        <a href="{{ url('meet_out_team', ['id' => $item->id]) }}" class="mt-3">Info <span>+</span></a>
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
