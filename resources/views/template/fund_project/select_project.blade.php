<!DOCTYPE html>
<html lang="en">
<head>
    @include('template.head')
    <style>
        h1,h2, h3, h4,h5{
            color: black;
        }
        p{
            color: black;
        }
    </style>
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
                    <h1 class="">Select Project for Funds</h1>
                </div>
            </div>
        </div>
<hr>
<div class="container mt-5">
    <div class="row">
        @foreach ($project_category as $item)
        <div class="col-md-3 mb-5">
            <div class="card">
                <img src="{{ asset('templates/images/hostel.jpg') }}" class="card-img-top" alt="Responsive image">
                <div class="card-body">
                    <h2 class="card-title text-center">{{$item->project_name}}</h2>
                    <p class="card-text">{{$item->description}}</p>
                </div>
                <div class="card-footer">
                    <a  href="{{ url('fund_project', ['id' => $item->id]) }}" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

    </div>
</div>

	<!-- Footer -->

    @include('template.footer')
</body>
</html>
