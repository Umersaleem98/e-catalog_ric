<!DOCTYPE html>
<html lang="en">
<head>
    <title>Signature Programs</title>
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
                        <h1 class="">Zakat for Students</h1>
                    </div>
                </div>
            </div>



        </div>
    </div>

    <!-- Footer -->
    @include('template.footer')

</body>
</html>
