<!DOCTYPE html>
<html lang="en">
<head>
    @include('template.head')
    <style>
        .custom-img-fluid {
            width: 100%;
            height: auto;
            max-height: 600px; /* Increase max-height as needed */
            object-fit: cover; /* Ensure image covers the area */
        }
        .text-section {
            margin-top: 20px;
        }
    </style>
</head>
<body>

<div class="super_container">

    <!-- Header -->
    @include('template.navbar')

    @include('template.home')

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
                    <div class="col-md-12">
                        <img src="{{ asset('project_category/boyes_hotel_2.png') }}" class="custom-img-fluid" alt="Responsive image">
                    </div>
                    <div class="col-md-12 text-section">
                        <h1 class="text-center">{{$project_category->project_name}}</h1>
                        <p>{{$project_category->description}}</p>
                        <div class="text-center">
                            <a href="{{ url('payments_project', ['id' => $project_category->id]) }}" class="btn btn-primary">Donate for Hostal</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    @include('template.footer')

</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
