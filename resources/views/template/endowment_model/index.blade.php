
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
   warning    color: orange; /* Set text color to black */
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
                                    <h2 class="card-title text-warning text">Sponsor One Year Education</h2>
                                    <p class="card-text text-light">Empower a scholar with stress-free studies for an entire year at NUST. <h2 hidden>hhhhhh</h2>  </p>

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
                                    <h2 class="card-title text-warning">Adopt a Scholar</h2>
                                    <p class="card-text text-light">Sponsor a scholar’s entire undergraduate journey, ensuring four years of education at NUST.</p>
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
                                    <h2 class="card-title text-warning">Endowment: GIft a Perpetual Generosity</h2>
                                    <p class="card-text text-light">Ensure your gift lasts forever—one scholar graduates, and another takes their place, perpetuating the cycle of opportunity.</p>
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
                                    <h2 class="card-title text-warning">Zakat: Intergenerational Impact </h2>
                                    <p class="card-text text-light">Entrust your zakat in our  Shariah-compliant NEED Initiative & support needy scholars in their pursuit of higher education.</p>
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
