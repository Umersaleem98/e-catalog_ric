<!DOCTYPE html>
<html lang="en">
<head>
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
            max-height: 250px;
            width: 100%;
            height: auto;
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
                        <h1 class="">Resource Mobilization Officers</h1>
                    </div>
                </div>
            </div>

            <div class="row mb-3">
                <!-- First Row: Images on Left, Designations on Right -->
                <div class="col-md-6">
                    <img src="{{ asset('templates/rmo/Danish_Aman.jpeg') }}" alt="Image 1" class="custom-img-fluid">
                </div>
                <div class="col-md-6 center-text">
                    <br>
                    <h2 class="text-dark">Danish Aman</h2>
                    <p class="text-dark">Partner Hafiz Tannery</p>
                </div>
            </div>

            <div class="row mt-5 mb-3">
                <!-- Second Row: Designations on Left, Images on Right -->
                <div class="col-md-6 order-md-2">
                    <img src="{{ asset('templates/rmo/Zafar_Sultan.jpg') }}" alt="Image 2" class="custom-img-fluid">
                </div>
                <div class="col-md-6 order-md-1 " id="right-text">
                    <br>
                    <h2 class="text-dark">Zafar Sultan</h2>
                    <p class="text-dark">Friend of NUST</p>
                </div>
            </div>


            <div class="row mb-3">
                <!-- Third Row: Images on Left, Designations on Right -->
                <div class="col-md-6">
                    <img src="{{ asset('templates/rmo/sidra.jpg') }}" alt="Image 3" class="custom-img-fluid">
                </div>
                <div class="col-md-6 center-text">
                    <br>
                    <br>
                    <br>
                    <h2 class="text-dark ">Sidra Ali Bin Nadeem</h2>
                    <p class="text-dark">NUSTian USA</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    @include('template.footer')

</div>

</body>
</html>
