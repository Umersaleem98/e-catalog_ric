<!DOCTYPE html>
<html lang="en">
<head>
    <title>Select Projects</title>
    @include('template.head')
    <style>
        h1,h2, h3, h4,h5{
            color: black;
        }
        p{
            color: black;
        }
        #abc{
            background-color: gray;


        }
        #abcd{
            background-color: lightgrey;

        }
    </style>
</head>
<body>

<div class="super_container">

	<!-- Header -->

@include('template.navbar')

@include('template.home')


<div class="container mt-5">
    <div class="row">
        <div class="col">
            <div class="section_title text-center">
                <h1 class="">Support a Journey</h1>
            </div>
        </div>
    </div>
    <br>
    <div class="row">

        <div class="col-md-6" id="abc">
            <h2 class="text-center bg-primary">
                Why Invest in Girl’s Hostel?
            </h2>
            <hr>
            <p class="text-light">
                The construction of a girls' hostel at our university is a pivotal step toward fostering an inclusive, safe, and supportive educational environment. By providing secure and affordable accommodation, we ensure that female students from diverse backgrounds can pursue their academic goals without the added stress of finding suitable housing. This initiative not only promotes gender equity but also enhances the overall academic performance and well-being of our students. Investing in this project means investing in the future leaders, innovators, and professionals who will drive our society forward. We invite you to join us in this transformative endeavor, creating lasting impact and empowering the next generation of women scholars.
            </p>
        </div>
        <div class="col-md-6 border" id="abcd">
            <h2 class="text-center  bg-primary">
                Why Invest in a Mosque?
            </h2>
            <hr>
            <p>
                Investing in the construction of a mosque at NUST offers a unique opportunity to foster spiritual growth and community cohesion among our diverse student body. Supporting this project means contributing to the holistic development of our students, promoting values of peace, understanding, and unity. By building a mosque, you are investing in the moral and ethical foundation of future leaders, ensuring they have the spiritual support needed to thrive in their academic and personal lives. Your generosity will leave a legacy, enriching the lives of countless students by keeping them connected to their core values as Muslims and ensure a harmonious campus environment.
            </p>
        </div>
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
                <img src="{{ asset('project_category/' . $item->project_image) }}" class="card-img-top rounded" alt="{{ $item->project_name }} image">
                <div class="card-body">
                    <h2 class="card-title text-dark text-center">{{ $item->project_name }}</h2>
                    <p class="card-text text-dark">{{ $item->description }}</p>
                </div>
                <div class="card-footer">
                    <a href="{{ url('fund_project', ['id' => $item->id]) }}" class="btn btn-primary">Go somewhere</a>
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
