
    <title>Resource Mobilization Officer</title>
    @include('template.head')
    <style>
        /* Custom CSS for responsiveness */
        @media (max-width: 767px) {
            .ml-sm-5 {
                margin-left: 0 !important;
            }
        }

        /* Custom class for image styling */
        .custom-img-fluid {
            max-height: 400px; /* Increased height */
            width: 100%;
            height: auto;
            transition: transform 0.3s ease; /* Smooth transition */
        }

        /* Hover effect to increase image size */
        .custom-img-fluid:hover {
            transform: scale(1.1); /* Scale image up to 110% */
        }

        /* Card styling with border */
        .card {
            border: 4px solid #004476; /* 4px border with black color */
        }

        /* Center text within columns */
        .center-text {
            text-align: left;
            margin-top: 50px;
        }

        #right-text {
            text-align: right;
            margin-top: 50px;
        }
    </style>

<div class="super_container">

    <!-- Header -->
    @include('template.navbar')

    @include('template.home')

    <div class="events page_section">
        <div class="container">

            <div class="row mb-5">
                <div class="col">
                    <div class="section_title text-center">
                        <h1 class="">Resource Mobilization Officers</h1>
                    </div>
                </div>
            </div>

            <div class="row mb-3">
                <!-- First Row: Card -->
                <div class="col-md-6">
                    <div class="card">
                        <img src="{{ asset('templates/rmo/Danish_Aman.jpeg') }}" alt="Image 1" class="card-img-top custom-img-fluid">
                    </div>
                </div>
                <!-- Second Row: Card -->
                <div class="col-md-6">
                    <div class="card">
                        <img src="{{ asset('templates/rmo/Zafar_Sultan.jpg') }}" alt="Image 2" class="card-img-top custom-img-fluid">
                    </div>
                </div>
            </div>

            <div class="row mb-3">
                <!-- Third Row: Card -->
                <div class="col-md-6">
                    <div class="card">
                        <img src="{{ asset('templates/rmo/sidra.jpg') }}" alt="Image 3" class="card-img-top custom-img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    @include('template.footer')

</div>

<!-- Bootstrap JS and dependencies -->
