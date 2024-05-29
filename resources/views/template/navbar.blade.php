<style>


</style>


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
                    <li class="main_nav_item"><a href="{{url('/our_team')}}">Our Team</a></li>
                    <li class="main_nav_item"><a href="{{url('/contact_us')}}">contact</a></li>
                </ul>
            </div>
        </nav>
    </div>
    <div class="header_side d-flex flex-row justify-content-center align-items-center " style="background-color:#FFFFFF;">

        {{-- <a href="#" class="btn btn-success btn-lg rounded-pill" style="width: 60%;">Donate Now</a> --}}
        <i class="fas fa-donate" style="font-size: 60px"></i>

    </div>

    <!-- Hamburger -->
    <div class="hamburger_container">
        <i class="fas fa-bars trans_200"></i>
    </div>


    <div class="menu_container menu_mm">

		<!-- Menu Close Button -->
		<div class="menu_close_container">
			<div class="menu_close"></div>
		</div>

		<!-- Menu Items -->
		<div class="menu_inner menu_mm">
			<div class="menu menu_mm">
				<ul class="menu_list menu_mm">
					<li class="menu_item menu_mm"><a href="{{url('/')}}">home</a>/li>
					<li class="menu_item menu_mm"><a href="{{url('about_us')}}">About us</a></li>
                    <li class="menu_item menu_mm"><a href="{{url('/our_team')}}">Our Team</a></li>
					<li class="menu_item menu_mm"><a href="{{url('/contact_us')}}">contact</a></li>
				</ul>

				<!-- Menu Social -->

				<div class="menu_social_container menu_mm">
					<ul class="menu_social menu_mm">
						<li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-pinterest"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-instagram"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-twitter"></i></a></li>
					</ul>
				</div>

				<div class="menu_copyright menu_mm">Colorlib All rights reserved</div>
			</div>

		</div>

	</div>

</header>
