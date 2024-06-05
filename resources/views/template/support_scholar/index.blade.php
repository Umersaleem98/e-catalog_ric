<!DOCTYPE html>
<html lang="en">
<head>
    <title>Students Stories</title>
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

       /* Style for input text color */
       input.form-control {
            color: black;
        }

        /* Style for placeholder text color */
        input.form-control::placeholder {
            color: black;
            opacity: 1; /* Override default opacity */
        }

        select.form-control {
        color: black;
    }

    /* Style for select option text color */
    select.form-control option {
        color: black;
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

	@include('template.home')

	<!-- Teachers -->

	<div class="teachers page_section">
        <div class="container">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <form action="{{ url('student_stories') }}" method="GET" id="filterForm">
                            <div class="row">
                                <div class="col-md-3 mb-3">
                                    <select name="gender" id="genderFilter" class="form-control" aria-label="Select Gender">
                                        <option value="all" selected>All Genders</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                    </select>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <select name="province" id="provinceFilter" class="form-control" aria-label="Select Province">
                                        <option value="all" selected>All Provinces</option>
                                        <option value="Punjab">Punjab</option>
                                        <option value="sindh">Sindh</option>
                                        <!-- Add more options for provinces -->
                                    </select>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <select name="discipline" id="disciplineFilter" class="form-control" aria-label="Select Discipline">
                                        <option value="all" selected>All Disciplines</option>
                                        <option value="Engineering & IT">Engineering & IT</option>
                                        <option value="Bio Sciences">Bio Sciences</option>
                                        <option value="Biotechnology">Biotechnology</option>
                                        <option value="Architecture">Architecture</option>
                                        <!-- Add more options for disciplines -->
                                    </select>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <button type="submit" class="btn btn-primary">Filter</button>
                                </div>
                            </div>

                        </form>

                    </div>
                </div>
            </div>


            <div class="row mt-3">
                <!-- Teacher -->
                @foreach ($students as $item)
                <div class="col-lg-3 teacher" data-gender="{{ $item->gender }}">
                    <div class="card">
                        <div class="card_img">
                            <div class="card_plus trans_200 text-center"><a href="">+</a></div>
                            <div class="card_plus trans_200 text-center"><a href="{{ url('student_stories_indiviual', ['id' => $item->id]) }}">+</a></div>
                            <img class="card-img-top trans_200" src="{{ asset('students_images/' . $item->images) }}" alt="Teacher Image" style="filter: blur(10px); max-height: 250px;">
                        </div>

                        <div class="card-body text-center">
                            <div class="card-title"><a href="#">{{$item->name}}</a></div>
                            <div class="card-text text-dark mb-2">{{$item->father_name}}</div>
                            <div class="card-text text-dark mb-2">{{$item->gender}}</div>
                            <div class="card-text text-dark mb-2">{{$item->province}}</div>
                            {{-- <div class="teacher_social">
                                <ul class="menu_social">
                                    <li class="menu_social_item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li class="menu_social_item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li class="menu_social_item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                </ul>
                            </div> --}}
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

       {{-- Pagination links --}}

        </div>
        <nav aria-label="Page navigation \">
            <ul class="pagination pagination-sm justify-content-center">
                {{-- Pagination Elements --}}
                @foreach ($students->links()->elements[0] as $page => $url)
                    @if ($page == $students->currentPage())
                        <li class="page-item active" aria-current="page"><span class="page-link">{{ $page }}</span></li>
                    @else
                        <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            </ul>
        </nav>
    </div>


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

<script>
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
