<style>

.nav-link{
    font-size: 18px;
    font-weight: 600;
    color: black;
}
</style>

{{-- <header class="header d-flex flex-row"> --}}
    <nav class="navbar navbar-expand-lg navbar-light bg-light w-100 fixed-top">
        <!-- Left-side logos -->
        <a class="navbar-brand ml-3" href="{{url('/')}}">
            <img src="{{ asset('templates/images/logo4.png') }}" alt="Left Logo" class="navbar-logo">
            {{-- <a href="{{ url('/') }}">
                <img src="{{ asset('templates/images/logo2.png') }}" alt="Additional Logo" class="additional-logo">
            </a> --}}
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
                <li class="nav-item">
                    <a class="nav-link" href="{{url('signrature_program')}}">Signature Program</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"  href="{{url('/our_team')}}" >Our Team</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/contact_us')}}" >Contact Us</a>
                </li>
            </ul>

            <!-- Right-side logo inside nav items for small screens -->
            <a class="navbar-brand d-lg-none mr-3" href="{{url('/')}}">
                <img src="{{ asset('templates/images/logo3.png') }}" alt="Right Logo" id="right_logo"  class="navbar-logo img-fluid blinking-animation" >
            </a>
        </div>

        <!-- Right-side logo for large screens -->
        <a class="navbar-brand d-none d-lg-block mr-4" href="{{url('/')}}">
            <img src="{{ asset('templates/images/logo3.png') }}" alt="Right Logo" class="navbar-logo img-fluid blinking-animation">
        </a>
    </nav>
{{-- </header> --}}
