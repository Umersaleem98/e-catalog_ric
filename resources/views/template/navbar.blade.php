<header class="header d-flex flex-row">
    <div class="header_content d-flex flex-row align-items-center">
        <!-- Logo -->
        <div class="logo_container">
            <div class="logo">
                <a href="{{ url('/') }}">
                    <img src="{{ asset('templates/images/logo.png') }}" alt="" class="img-fluid" style="max-width: 80px;">
                </a>
                <span>
                    <a href="{{ url('/') }}">
                        <img src="{{ asset('templates/images/logo2.png') }}" alt="" style="max-width: 220px;">
                    </a>
                </span>
            </div>
        </div>



        <!-- Main Navigation -->
        <nav class="main_nav_container">
            <div class="main_nav">
                <ul class="main_nav_list">
                    <li class="main_nav_item"><a href="{{url('/')}}">home</a></li>
                    <li class="main_nav_item"><a href="{{url('about_us')}}">about us</a></li>
                    <li class="main_nav_item"><a href="courses.html">Students</a></li>
                    <li class="main_nav_item"><a href="contact.html">contact</a></li>
                </ul>
            </div>
        </nav>
    </div>
    <div class="header_side d-flex flex-row justify-content-center align-items-center " style="background-color:#FFFFFF;">
        {{-- <img src="templates/images/phone-call.svg" alt="">
        <span>+43 4566 7788 2457</span> --}}
        <a href="#" class="btn btn-success btn-lg rounded-pill" style="width: 60%;">Donate Now</a>

    </div>

    <!-- Hamburger -->
    <div class="hamburger_container">
        <i class="fas fa-bars trans_200"></i>
    </div>

</header>
