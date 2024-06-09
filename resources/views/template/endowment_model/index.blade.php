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
                        <h1 class="">Endowment Model</h1>
                    </div>
                </div>
            </div>

            <div class="row">

               @foreach ($categories  as $item)

                <div class="col-md-6 mb-2">
                    <div class="card">
                        <div class="card-body">
                            {{-- <a href="{{'support_for_one_year'}}" class="card-link"> --}}
                                <a href="{{ url('support_for_one_year', $item->id) }}" class="card-link">
                                <div class="icon-container mr-3">
                                    <br>
                                    <i class="fas fa-graduation-cap"></i> <!-- Font Awesome icon for education/degree -->
                                </div>
                                <div>
                                    <h2 class="card-title"> {{ $item->name }} </h2>
                                    <p class="card-text">Click here for more information.</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Repeat the above card structure for other cards -->

                @endforeach
                <!-- Repeat the structure for other cards -->
            </div>

        </div>
    </div>

    <!-- Footer -->
    @include('template.footer')

</body>
</html>
