
    <style>
        .carousel-item {
            height: 100vh;
            min-height: 300px;
            background: no-repeat center center scroll;
            background-size: cover;
        }
        .carousel-caption {
            bottom: 50%;
            transform: translateY(50%);
        }
        .carousel-caption h1 {
            font-size: 3rem;
            font-weight: bold;
            color: yellow;
        }
        .carousel-caption p {
            font-size: 1.5rem;
            color: #FFBF39;
        }
        .carousel-caption a {
            margin-top: 1rem;
            font-size: 1rem;
            font-weight: bold;
            border-color: #FFBF39;
            color: #FFBF39;
        }
        .carousel-caption a.btn {
        margin-top: 1rem;
        font-size: 1rem;
        font-weight: bold;
        color: #000; /* Black text color */
        background-color: #FFBF39; /* Button background color */
        border-color: #FFBF39; /* Button border color */
    }

    .carousel-caption a.btn:hover {
        background-color: #FFBF39; /* Change hover background color if needed */
        color: #000; /* Change hover text color if needed */
    }
    </style>
</head>
<body>

<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
    <div class="carousel-inner">
        <div class="carousel-item active" style="background-image: url('{{ asset('templates/images/mno.jpg') }}'); ">
            <div class="carousel-caption text-center">
                <h1 style="color: #FFBF39;">The support you lend today will remodel their tomorrow</h1>
                {{-- <p>Best & free guide of responsive web design</p> --}}
                <a href="{{url('endowment_model')}}" class="btn btn-outline-light btn-lg">Scholarship Giving Avenues</a>
                <a href="{{url('student_stories')}}" class="btn btn-outline-light btn-lg">Nurture a Dream</a>
                {{-- <a href="{{url('student_stories')}}" class="btn btn-outline-light btn-lg">Nurture a Dream<br> Stories of financially challenged Students</a> --}}
                <a href="{{url('select_project')}}" class="btn btn-outline-light btn-lg">Fund a Project</a>
            </div>
        </div>
        <div class="carousel-item" style="background-image: url('{{ asset('templates/images/def.jpg') }}'); ">
            <div class="carousel-caption text-center">
                <h1 style="color: #FFBF39;">Your gift will be passed down to generations</h1>
                {{-- <p>Description for the second slide</p> --}}
                <a href="{{url('endowment_model')}}" class="btn btn-outline-light btn-lg">Scholarship Giving Avenues</a>
                <a href="{{url('student_stories')}}" class="btn btn-outline-light btn-lg">Nurture a Dream</a>
                {{-- <a href="{{url('student_stories')}}" class="btn btn-outline-light btn-lg">Nurture a Dream<br> Stories of financially challenged Students</a> --}}
                <a href="{{url('select_project')}}" class="btn btn-outline-light btn-lg">Fund a Project</a>
            </div>
        </div>
        <div class="carousel-item" style="background-image: url('{{ asset('templates/images/abc.jpg') }}');  ">
            <div class="carousel-caption text-center">
                <h1 style="color: #FFBF39;">Build a legacy of lasting change</h1>
                <a href="{{url('endowment_model')}}" class="btn btn-outline-light btn-lg">Scholarship Giving Avenues</a>
                <a href="{{url('student_stories')}}" class="btn btn-outline-light btn-lg">Nurture a Dream</a>
                {{-- <a href="{{url('student_stories')}}" class="btn btn-outline-light btn-lg">Nurture a Dream<br> Stories of financially challenged Students</a> --}}
                <a href="{{url('select_project')}}" class="btn btn-outline-light btn-lg">Fund a Project</a>
            </div>
        </div>
    </div>
</div>

<!-- Link Bootstrap JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.0-beta2/js/bootstrap.bundle.min.js"></script>

<!-- JavaScript for automatic sliding -->
<script>
    var carousel = document.getElementById('carouselExampleIndicators');
    var carouselInstance = new bootstrap.Carousel(carousel, {
        interval: 1500, // Adjusts the speed (milliseconds)
        wrap: true, // Enables continuous sliding
        keyboard: false, // Disables keyboard navigation
        pause: 'hover', // Pauses on mouse hover
        ride: 'carousel' // Autostart the carousel
    });
</script>

</body>
</html>
