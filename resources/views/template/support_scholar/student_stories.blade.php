<!DOCTYPE html>
<html lang="en">
<head>
    <title>Story</title>
    @include('template.head')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
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
			<div class="row">
				<div class="col">
					<div class="section_title text-center">
						<h1 class="">Student Story</h1>
					</div>
				</div>
			</div>

            <div class="row services_row">
                <!-- Left Section for Images -->
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <div class="image_container">
                        <img src="{{ asset('students_images/' . $students->images) }}" class="img-fluid" alt="Left Image" style="height: 400px; width:100%; filter: blur(10px)">

                    </div>
                </div>
                <!-- Right Section for Information -->
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <div class="info_container" style="color: black;">
                        <h2>Student Name: <span>{{$students->name}}</span>  <span>{{$students->qalam_id}}</span></h2>
                        <!-- Add an ID to the paragraph tag for easier targeting with JavaScript -->
                        <h2>Father Name: <span>{{$students->father_name}}</span></h2>
                        <!-- Add a unique ID to the paragraph tag for targeting -->
                        <h3>Discipline: <span>{{$students->discipline}}</span></h3>
                        <!-- Add a unique ID to the paragraph tag for targeting -->
                        <h3>Province: <span>{{$students->province}}</span></h3>
                        <!-- Add a unique ID to the paragraph tag for targeting -->
                        <h3>Gender: <span>{{$students->gender}}</span></h3>
                        <!-- Add a unique ID to the paragraph tag for targeting -->
                        {{-- <h3>Father Status: <span>{{$students->father_status}}</span></h3> --}}
                        <!-- Add a unique ID to the paragraph tag for targeting -->
                        {{-- <h3>Father Profession: <span>{{$students->father_profession}}</span></h3> --}}
                        <!-- Add a unique ID to the paragraph tag for targeting -->
                        <h3>Monthly Income: <span>{{$students->monthly_income}}</span></h3>
                        <!-- Add a unique ID to the paragraph tag for targeting -->
                        <br>

                        <!-- Add an ID to the paragraph tag for easier targeting with JavaScript -->
                        <span ><img src="{{ asset('templates/images/quotation-right-mark-svgrepo-com.svg') }}" alt="" style="width:15px; height:15px; color:bluel; transform: rotate(180deg);"></span>
                        <p  class="text-dark ">{{$students->statement_of_purpose}}
                        </p>
                        <p>
                            <span class="quote"><img src="{{ asset('templates/images/quotation-right-mark-svgrepo-com.svg') }}" alt="" style="width:15px; height:15px; color:bluel; margin-left:75%; margin-top:-110px"></span>
                        </p>

                        <!-- Add a button to toggle visibility -->




                    </div>
                </div>

            </div>

		</div>
	</div>
    <div class="container-fluid" >
        <div class="row justify-content-center">
            <div class="col-12 col-sm-6 col-md-4 ">
                <div class="hero_box d-flex flex-row align-items-center justify-content-start" style="height:100px">
                    <a href="{{ url('Make_a_Pledge', ['id' => $students->id]) }}"> <img src="{{ asset('templates/images/forward-svgrepo-com.svg') }}" class="svg" alt="">
                     <div class="hero_box_content">
                         <h2 class="hero_box_title">Make a Pledge</h2>
                         <a href="{{url('student_stories')}}" class="hero_box_link"hidden>View More</a>
                     </div></a>
                 </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 ">
                <div class="hero_box d-flex flex-row align-items-center justify-content-start" style="height:100px">
                    <a href="{{ url('payment', ['id' => $students->id]) }}"> <img src="{{ asset('templates/images/bank-svgrepo-com.svg') }}" class="svg" alt="">
                     <div class="hero_box_content">
                         <h2 class="hero_box_title">Pay Now</h2>
                         <a href="{{url('select_project')}}" class="hero_box_link" hidden>View More</a>
                     </div></a>
                 </div>
            </div>
        </div>
    </div>
	<!-- Testimonials -->

<hr class="mt-5">

	<!-- Events -->

    @include('template.event')
	<!-- Footer -->

    @include('template.footer')
{{--
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
    </script> --}}
</body>
</html>
