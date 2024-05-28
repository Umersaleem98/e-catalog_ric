<!DOCTYPE html>
<html lang="en">
<head>
    @include('template.head')
</head>
<body>

<div class="super_container">

	<!-- Header -->

@include('template.navbar')

<div class="home">
    <div class="home_background_container prlx_parent">

        <div class="hero_slide_background" style="background-image: url('{{ asset('templates/images/teachers_background.jpg') }}')"></div>
    </div>
    <div class="home_content  bg-transparent">
        {{-- <h1 class="display-1">Select Project for Funds</h1> --}}
        {{-- <span>Student Stories</span> --}}
    </div>
</div>


<div class="events page_section">
    <div class="container">

        <div class="row">
            <div class="col">
                <div class="section_title text-center">
                    <h1 class="">Funds for {{$project_category->project_name}}</h1>
                </div>
            </div>
        </div>
<hr>
<div class="container mt-5">
    <!-- First Section -->
    <div class="row mb-4">
        <div class="col-md-3">
            <img src="{{ asset('templates/images/teacher_1.jpg') }}" class="img-fluid" alt="Responsive image">
        </div>
        <div class="col-md-9 d-flex align-items-center">
            <div>
                <br>
                <h1 class="text-center">{{$project_category->project_name}}</h1>
                <p>{{$project_category->description}}</p>
                <div class="text-center">
                    {{-- <a href="{{url('donate_for_hostal')}}" class="btn btn-primary">Donate for Hostal</a> --}}
                    <a href="{{ url('payments_project', ['id' => $project_category->id]) }}" class="btn btn-primary">Donate for Hostal</a>
                </div>
            </div>
        </div>
    </div>
</div>
    </div>
</div>

	<!-- Footer -->

    @include('template.footer')
</body>
</html>
