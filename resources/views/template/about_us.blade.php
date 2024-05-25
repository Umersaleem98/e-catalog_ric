<!DOCTYPE html>
<html lang="en">
<head>
    @include('template.head')
    <style>
 .pagination li.active a {
        background-color: #007bff;
        border-color: #007bff;
        color: white;
    }
    .pagination li a:hover {
        background-color: #0056b3;
        border-color: #0056b3;
        color: white;
    }
    </style>
<body>

<div class="super_container">

	<!-- Header -->

    @include('template.navbar')

	<!-- Menu -->
	<div class="menu_container menu_mm">

		<!-- Menu Close Button -->
		<div class="menu_close_container">
			<div class="menu_close"></div>
		</div>

		<!-- Menu Items -->

			</div>

		</div>

	</div>

	<!-- Home -->

	<div class="home">
		<div class="home_background_container prlx_parent">

            <div class="hero_slide_background" style="background-image: url('{{ asset('templates/images/teachers_background.jpg') }}')"></div>
		</div>
		<div class="home_content">
			<h1>About Us</h1>
		</div>
	</div>

	<!-- Teachers -->

	<div class="teachers page_section">
		<div class="container">
			<div class="row">

				<!-- Teacher -->
                <div class="col-lg-4 teacher">
					<div class="card">
						<div class="card_img">
                            <div class="card_plus trans_200 text-center"><a href="">+</a></div>
                            <div class="card_plus trans_200 text-center"><a href="">+</a></div>
                            <img class="card-img-top trans_200" src="{{ asset('templates/images/teacher_1.jpg') }}" alt="Teacher Image">
                        </div>

						<div class="card-body text-center">
							<div class="card-title"><a href="#"></a></div>
							<div class="card-text"></div>
							<div class="teacher_social">
								<ul class="menu_social">
									<li class="menu_social_item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
									<li class="menu_social_item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
									<li class="menu_social_item"><a href="#"><i class="fab fa-instagram"></i></a></li>
									<li class="menu_social_item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
									<li class="menu_social_item"><a href="#"><i class="fab fa-twitter"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
<br>
<br>

	</div>

	<!-- Milestones -->

	<div class="milestones">
        <div class="milestones_background" style="background-image:url('{{ asset('images/milestones_background.jpg') }}')">
            <!-- Your content goes here -->
        </div>

		<div class="container">
			<div class="row">

				<!-- Milestone -->
				<div class="col-lg-3 milestone_col">
					<div class="milestone text-center">
						<div class="milestone_icon">
                            <img src="{{ asset('templates/images/milestone_1.svg') }}" alt="Milestone Image">
                        </div>

						<div class="milestone_counter" data-end-value="750">0</div>
						<div class="milestone_text">Current Students</div>
					</div>
				</div>

				<!-- Milestone -->
				<div class="col-lg-3 milestone_col">
					<div class="milestone text-center">
                        <div class="milestone_icon">
                            <img src="{{ asset('templates/images/milestone_2.svg') }}" alt="Milestone Image">
                        </div>
						{{-- <div class="milestone_icon"><img src="images/milestone_2.svg" alt="https://www.flaticon.com/authors/zlatko-najdenovski"></div> --}}
						<div class="milestone_counter" data-end-value="120">0</div>
						<div class="milestone_text">Certified Teachers</div>
					</div>
				</div>

				<!-- Milestone -->
				<div class="col-lg-3 milestone_col">
					<div class="milestone text-center">
                        <div class="milestone_icon">
                            <img src="{{ asset('templates/images/milestone_3.svg') }}" alt="Milestone Image">
                        </div>
						{{-- <div class="milestone_icon"><img src="images/milestone_3.svg" alt="https://www.flaticon.com/authors/zlatko-najdenovski"></div> --}}
						<div class="milestone_counter" data-end-value="39">0</div>
						<div class="milestone_text">Approved Courses</div>
					</div>
				</div>

				<!-- Milestone -->
				<div class="col-lg-3 milestone_col">
					<div class="milestone text-center">
                        <div class="milestone_icon">
                            <img src="{{ asset('templates/images/milestone_4.svg') }}" alt="Milestone Image">
                        </div>
						{{-- <div class="milestone_icon"><img src="images/milestone_4.svg" alt="https://www.flaticon.com/authors/zlatko-najdenovski"></div> --}}
						<div class="milestone_counter" data-end-value="3500" data-sign-before="+">0</div>
						<div class="milestone_text">Graduate Students</div>
					</div>
				</div>


			</div>
		</div>
	</div>


	<!-- Footer -->


</div>

@include('template.footer')

</body>
</html>
