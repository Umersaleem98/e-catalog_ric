<!DOCTYPE html>
<html lang="en">
<head>
    <title>Story</title>
    @include('template.head')
    <style>
        .info_container {
    color: black;
}

    </style>
</head>
<body>

<div class="super_container">

	<!-- Header -->

@include('template.navbar')

	<!-- Home -->


	<!-- Popular -->


	<!-- Register -->

	@include('template.home')

	<!-- Services -->

	<div class="services page_section">

		<div class="container">
			{{-- <div class="row">
				<div class="col">
					<div class="section_title text-center">
						<h1 class="mt-5">Student Story</h1>
					</div>
				</div>
			</div> --}}

            <div class="row services_row">
                <!-- Left Section for Images -->
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="image_container">
                        <img src="{{ asset('students_images/' . $students->images) }}" class="img-fluid" alt="Left Image">

                    </div>
                </div>
                <!-- Right Section for Information -->
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="info_container" style="color: black;">
                        <h3>Student Name: <span>{{$students->name}}</span>  <span>{{$students->qalam_id}}</span></h3>
                        <!-- Add an ID to the paragraph tag for easier targeting with JavaScript -->
                        <h4>Father Name: <span>{{$students->father_name}}</span></h4>
                        <!-- Add a unique ID to the paragraph tag for targeting -->
                        <h4>Discipline: <span>{{$students->discipline}}</span></h4>
                        <!-- Add a unique ID to the paragraph tag for targeting -->
                        <h4>Province: <span>{{$students->province}}</span></h4>
                        <!-- Add a unique ID to the paragraph tag for targeting -->
                        <h4>Gender: <span>{{$students->gender}}</span></h4>
                        <!-- Add a unique ID to the paragraph tag for targeting -->
                        <h4>Father Status: <span>{{$students->father_status}}</span></h4>
                        <!-- Add a unique ID to the paragraph tag for targeting -->
                        <h4>Father Profession: <span>{{$students->father_profession}}</span></h4>
                        <!-- Add a unique ID to the paragraph tag for targeting -->
                        <h4>Monthly Income: <span>{{$students->monthly_income}}</span></h4>
                        <!-- Add a unique ID to the paragraph tag for targeting -->
                        <br>
                        <!-- Add an ID to the paragraph tag for easier targeting with JavaScript -->
                        <p id="statement_of_purpose">"{{$students->statement_of_purpose}}"</p>
                        <!-- Add a button to toggle visibility -->
                        <button type="button" id="show_more_btn" class="btn btn-primary btn-sm">Show More</button>
                        {{-- <a href="{{url('payment')}}"  class="btn btn-primary btn-sm">Payment</a> --}}
                        <a href="{{ url('payment', ['id' => $students->id]) }}" class="btn btn-primary btn-sm">Payment</a>
                    </div>
                </div>

            </div>

		</div>
	</div>

	<!-- Testimonials -->



	<!-- Events -->

    @include('template.event')
	<!-- Footer -->

    @include('template.footer')

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const paragraph = document.getElementById('statement_of_purpose');
            const btn = document.getElementById('show_more_btn');
            const fullText = paragraph.innerText;

            // Hide the full text initially
            paragraph.innerText = fullText.substring(0, 100) + '...';
            btn.innerText = 'Show More';

            // Toggle visibility of full text when the button is clicked
            btn.addEventListener('click', function() {
                if (paragraph.innerText === fullText) {
                    paragraph.innerText = fullText.substring(0, 100) + '...';
                    btn.innerText = 'Show More';
                } else {
                    paragraph.innerText = fullText;
                    btn.innerText = 'Show Less';
                }
            });
        });
    </script>
</body>
</html>
