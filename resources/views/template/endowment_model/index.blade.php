<!DOCTYPE html>
<html lang="en">
<head>
    <title>Select Endowment Model </title>
    @include('template.head')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        /* Custom CSS for responsiveness */
        @media (max-width: 767px) {
            .ml-sm-5 {
                margin-left: 0 !important;
            }
        }
        .icon-container {
            font-size: 2rem; /* Adjust size as needed */
        }
        .card-title {
            color: black; /* Set text color to black */
        }
        .card-link {
            display: flex;
            align-items: center;
            text-decoration: none; /* Remove underline from anchor tag */
            color: black; /* Set text color to black */
        }
        .card-link i {
            margin-right: 10px; /* Adjust as needed for spacing between icon and text */
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
                        <h1 class="">Giving Avenues</h1>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mb-2">
                    <div class="card" style="background-color: #004476;">
                        <div class="card-body">
                            <a href="{{'support_for_one_year'}}" class="card-link">
                                <div class="icon-container mr-3">
                                    <br>
                                    <i class="fas fa-graduation-cap text-light"></i> <!-- Font Awesome icon for education/degree -->
                                </div>
                                <div>
                                    <h2 class="card-title text-light">Soponser One Year Education</h2>
                                    <p class="card-text text-light">Click here for more information.</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Repeat the above card structure for other cards -->
                <div class="col-md-6 mb-2">
                    <div class="card" style="background-color: #004476;">
                        <div class="card-body">
                            <a href="{{'support_for_entire_year'}}" class="card-link">
                                <div class="icon-container mr-3">
                                    <br>
                                    <i class="fas fa-book text-light"></i> <!-- Font Awesome icon for education/degree -->
                                </div>
                                <div>
                                    <h2 class="card-title text-light">Adopt a Scholor</h2>
                                    <p class="card-text text-light">Click here for more information.</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-2">
                    <div class="card" style="background-color: #004476;">
                        <div class="card-body">
                            <a href="{{url('perpetualseatyourname')}}" class="card-link">
                                <div class="icon-container mr-3">
                                    <br>
                                    <i class="fas fa-chair text-light"></i> <!-- Font Awesome icon for seat/chair -->
                                </div>
                                <div>
                                    <h2 class="card-title text-light">Create a Perpetual Seat in Your Name</h2>
                                    <p class="card-text text-light">Click here for more information.</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-2">
                    <div class="card" style="background-color: #004476;">
                        <div class="card-body">
                            <a href="{{url('zakat_for_students')}}" class="card-link">
                                <div class="icon-container mr-3">
                                    <br>
                                    <i class="fas fa-hands-helping text-light"></i> <!-- Font Awesome icon for helping hand -->
                                </div>
                                <div>
                                    <h2 class="card-title text-light">Zakat for Students</h2>
                                    <p class="card-text text-light">Click here for more information.</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Repeat the structure for other cards -->
            </div>

        </div>
    </div>

    <!-- Footer -->
    @include('template.footer')

</body>
</html>
