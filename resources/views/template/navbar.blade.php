<style>
    .nav-link {
        font-size: 18px;
        font-weight: 600;
        color: black;
    }

    .nav-item {
        margin-left: 3px; /* Adjust the margin value as needed */
        margin-right: 3px; /* Adjust the margin value as needed */
    }

    .dropdown-item {
        font-weight: bold; /* Makes the dropdown items bold */
    }
</style>

<nav class="navbar navbar-expand-lg navbar-light bg-light w-100 fixed-top">
    <!-- Left-side logos -->
    <a class="navbar-brand ml-3" href="{{url('/')}}">
        <img src="{{ asset('templates/images/logo4.png') }}" alt="Left Logo" class="navbar-logo">
    </a>

    <!-- Toggler/collapsing button for small screens -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Centered nav items -->
    <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="{{url('/')}}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('about_us')}}">About</a>
            </li>
            <!-- Dropdown Menu -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="programsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Programs
                </a>
                <div class="dropdown-menu" aria-labelledby="programsDropdown">
                    <a class="dropdown-item" href="{{url('signrature_program')}}">Signature Programs</a>
                    <a class="dropdown-item" href="{{url('r_m_o')}}">Resource Mobilization Officers</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('/our_team')}}">Our Team</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('/contact_us')}}">Contact Us</a>
            </li>
        </ul>

        <!-- Right-side logo inside nav items for small screens -->
        <a class="navbar-brand d-lg-none mr-3" href="{{url('/')}}">
            <img src="{{ asset('templates/images/logo3.png') }}" alt="Right Logo" id="right_logo" class="navbar-logo img-fluid blinking-animation">
        </a>
    </div>

    <!-- Right-side logo for large screens -->
    <a class="navbar-brand d-none d-lg-block mr-4" href="{{url('/')}}">
        <img src="{{ asset('templates/images/logo3.png') }}" alt="Right Logo" class="navbar-logo img-fluid blinking-animation">
    </a>
</nav>
