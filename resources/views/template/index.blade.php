<!DOCTYPE html>
<html lang="en">
<head>
    @include('template.head')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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
			<h1>Students Stories</h1>
		</div>
	</div>

	<!-- Teachers -->

	<div class="teachers page_section">
        <div class="container">
            <div class="col-md-3">
                <form action="{{ url('student_stories') }}" method="GET">
                    <select name="gender" id="genderFilter" class="form-select" aria-label="Default select example">
                        <option value="all" selected>Show All</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                    <button type="submit" class="btn btn-primary mt-3">Filter</button>
                </form>
            </div>

            <div class="row mt-3">
                <!-- Teacher -->
                @foreach ($students as $item)
                <div class="col-lg-4 teacher" data-gender="{{ $item->gender }}">
                    <div class="card">
                        <div class="card_img">
                            <div class="card_plus trans_200 text-center"><a href="">+</a></div>
                            <div class="card_plus trans_200 text-center"><a href="{{ url('student_stories_indiviual', ['id' => $item->id]) }}">+</a></div>
                            <img class="card-img-top trans_200" src="{{ asset('templates/images/teacher_1.jpg') }}" alt="Teacher Image">
                        </div>

                        <div class="card-body text-center">
                            <div class="card-title"><a href="#">{{$item->name}}</a></div>
                            <div class="card-text">{{$item->father_name}}</div>
                            <div class="card-text">{{$item->gender}}</div>
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
                @endforeach
            </div>
        </div>
    </div>

<br>
<br>
        <nav aria-label="Page navigation mt-4">
            <ul class="pagination pagination-sm justify-content-center">
                {{-- Previous Page Link --}}
                @if ($students->onFirstPage())
                    <li class="page-item disabled" aria-disabled="true">
                        <span class="page-link">Previous</span>
                    </li>
                @else
                    <li class="page-item">
                        <a class="page-link" href="{{ $students->previousPageUrl() }}" rel="prev" aria-label="Previous">&laquo;</a>
                    </li>
                @endif

                {{-- Pagination Elements --}}
                @foreach ($students->links()->elements[0] as $page => $url)
                    @if ($page == $students->currentPage())
                        <li class="page-item active" aria-current="page"><span class="page-link">{{ $page }}</span></li>
                    @else
                        <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach

                {{-- Next Page Link --}}
                @if ($students->hasMorePages())
                    <li class="page-item">
                        <a class="page-link" href="{{ $students->nextPageUrl() }}" rel="next" aria-label="Next">&raquo;</a>
                    </li>
                @else
                    <li class="page-item disabled" aria-disabled="true">
                        <span class="page-link">Next</span>
                    </li>
                @endif
            </ul>
        </nav>
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

<<script>
    document.addEventListener('DOMContentLoaded', function() {
        const genderFilter = document.getElementById('genderFilter');
        const teachers = document.querySelectorAll('.teacher');

        genderFilter.addEventListener('change', function() {
            const selectedGender = genderFilter.value;

            teachers.forEach(function(teacher) {
                const teacherGender = teacher.getAttribute('data-gender');

                if (selectedGender === 'all' || selectedGender === teacherGender) {
                    teacher.closest('.teacher').style.display = 'block';
                } else {
                    teacher.closest('.teacher').style.display = 'none';
                }
            });
        });
    });
</script>
</body>
</html>
