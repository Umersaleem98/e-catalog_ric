<!DOCTYPE html>
<html lang="en">
<head>
    @include('template.head')
    <style>
        #preloader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
            animation: fadeIn 5s forwards;
        }

        @keyframes fadeIn {
            0% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
        }

        /* Hide content initially */
        #content {
            display: none;
        }

        /* Increase preloader image size */
        .loader img {
            height: 500px; /* Adjust height as needed */
            width: 500px;  /* Adjust width as needed */
            animation: slowBlink 1.5s infinite; /* Add animation for slow blinking */
        }

        @keyframes slowBlink {
            0%, 100% {
                opacity: 1;
            }
            50% {
                opacity: 0.5;
            }
        }
    </style>
</head>
<body>
    <div id="preloader">
        <div class="loader">
            <img src="{{ asset('templates/videos/preloader.gif') }}" alt="" class="img-fluid blinking-animation">
        </div>
    </div>

    <div id="content" class="super_container">
        <!-- Header -->
        @include('template.navbar')
        @include('template.slider')
        @include('template.statistics')
        <!-- Home -->

        <!-- Popular -->
        @include('template.stories')

        <!-- Register -->
        {{-- @include('template.register') --}}

        <!-- Services -->
        {{-- @include('template.services') --}}

        <!-- Testimonials -->
        @include('template.testimonial')

        <!-- Events -->
        @include('template.event')

        <!-- Footer -->
        @include('template.footer')
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            setTimeout(function() {
                var preloader = document.getElementById('preloader');
                preloader.style.display = 'none';

                var content = document.getElementById('content');
                content.style.display = 'block';
            }, 2000); // 8000 milliseconds = 8 seconds
        });
    </script>
</body>
</html>
