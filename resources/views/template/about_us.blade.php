<!DOCTYPE html>
<html lang="en">
<head>
    <title>About Us</title>
    @include('template.head')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
<div class="super_container">
    <!-- Header -->
    @include('template.navbar')
    <!-- Home -->
    <div class="home">
        <div class="home_background_container prlx_parent">
            <div class="hero_slide_background" style="background-image: url('{{ asset('templates/images/teachers_background.jpg') }}')"></div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center mt-5" style="color:black">About Us</h1>
            </div>
        </div>
    </div>
    <!-- About Section -->
    <div class="about-section" style="border-top: 1px solid black; border-bottom: 1px solid black">
        <div class="container">
            <div class="row">
                <!-- Left Section for Images -->
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="image-container">
                        <img src="{{ asset('templates/images/teacher_1.jpg') }}" alt="Image 1">
                    </div>
                </div>
                <!-- Right Section for Content -->
                <div class="col-lg-8 col-md-8 col-sm-12">
                    <div class="content-container">
                        <h2>The Legacy of Change in a Nutshell &nbsp;&nbsp;&nbsp;<span onclick="toggleContent()"><i class="fa-solid fa-plus" id="icon1"></i><i class="fa-solid fa-minus" id="icon1-minus" style="display:none;"></i></span></h2>
                        <p>
                            For more than 30 years NUST has been deploying scientific and technological innovation to meet the greater challenges of our age by translating world-leading academic research into commercial, scalable innovations that can respond to complex societal problems. To do that, NUST skims the cream of the brilliance Pakistan produces and trains those brilliant minds to produce top-class innovation and research. Unfortunately, the economic landscape of Pakistan does not allow for many of those bright minds to afford higher education.  Our aim is to not only become the driving force of Pakistan’s knowledge economy but at the heart of our objective lies the very dream of turning NUST into a need-blind university. 
                        </p>
                        <div class="more-content">
                            <p>
                                To rise to the challenge, NUST strategically initiated the NUST Trust Fund (NTF) in 2012. Since its inception, NTF has dedicated itself to provide essential financial support for the university's mission—advancing cutting-edge research, supporting teaching and learning, developing world-class infrastructure, and financing scholarships for deserving students. 
                                <br>
                                <br>
                                In tandem, the University Advancement Office serves as a dynamic resource mobilization hub, fostering partnerships and collaborations to propel the university's developmental projects. At its core, the office champions equity, diversity, and inclusion (EDI), ensuring that every aspiring mind, irrespective of background, can script their unique journey within our diverse university community.
                            </p>

                        </div>
                        {{-- <a class="read-more" onclick="toggleContent()">Read More</a> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- New Section with Image on the Right -->
    <div class="about-section" style="border-top: 1px solid black; border-bottom: 1px solid black">
        <div class="container">
            <div class="row">
                <!-- Left Section for Content -->
                <div class="col-lg-8 col-md-8 col-sm-12">
                    <div class="content-container">
                        <h2>What is the University Advancement Office?</h2>
                        <p>
                            For 8 years the University Advancement Office (UAO) has helped open collaborative avenues to make an impact. The word impact, though, has never meant as much – or as many different things – as it does now. With inflation having hit the country hard and 40% of the population below the poverty line, we feel duty-bound to fight harder than ever against all odds to bring in more funds, so the financial struggles of the deserving students do not keep them from NUST.

                            <br>
                            <br>
                            Through our various programs and initiatives, we strive to create an inclusive and supportive community that values diversity and empowers individuals to reach their full potential. Join us in our journey to make a difference in the world through education and innovation.
                        </p>
                    </div>
                </div>
                <!-- Right Section for Images -->
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="image-container">
                        <img src="{{ asset('templates/images/advancement-office.jpg') }}" alt="Image 2">
                    </div>
                </div>
            </div>
        </div>
    </div>
<!------ Include the above in your HEAD tag ---------->
<!-- Team -->
<br>
<section id="team" class="pb-5">
    <div class="container">
        <h5 class="section-title h1" style="color:black">OUR TEAM</h5>
        <div class="row">
            <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" >
                    <div class="mainflip flip-0">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid mt-3" src="{{ asset('templates/images/teacher_1.jpg') }}"></p>
                                    <h4 class="card-title">Mohamed
</h4>
                                    <p class="card-text">This is basic card with image on top, title, description and button.</p>
                                    <a href="#"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title">Yousef</h4>
                                    <p class="card-text">This is basic card with image on top, title, description and button.This is </p>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fa fa-skype"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fa fa-google"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./Team member -->
            <!-- Team member -->


        </div>
    </div>
</section>
<!-- Team -->

</div>

<br>


@include('template.footer')

<script>
    function toggleContent() {
        var moreContent = document.querySelector('.more-content');
        var iconPlus = document.getElementById('icon1');
        var iconMinus = document.getElementById('icon1-minus');
        var linkIconPlus = document.getElementById('link-icon1');
        var linkIconMinus = document.getElementById('link-icon1-minus');

        if (moreContent.style.display === "none" || moreContent.style.display === "") {
            moreContent.style.display = "block";
            iconPlus.style.display = "none";
            iconMinus.style.display = "inline";
            linkIconPlus.style.display = "none";
            linkIconMinus.style.display = "inline";
        } else {
            moreContent.style.display = "none";
            iconPlus.style.display = "inline";
            iconMinus.style.display = "none";
            linkIconPlus.style.display = "inline";
            linkIconMinus.style.display = "none";
        }
    }

    function toggleContent2() {
        var moreContent2 = document.querySelector('.more-content-2');
        var iconPlus2 = document.getElementById('icon2');
        var iconMinus2 = document.getElementById('icon2-minus');
        var linkIconPlus2 = document.getElementById('link-icon2');
        var linkIconMinus2 = document.getElementById('link-icon2-minus');

        if (moreContent2.style.display === "none" || moreContent2.style.display === "") {
            moreContent2.style.display = "block";
            iconPlus2.style.display = "none";
            iconMinus2.style.display = "inline";
            linkIconPlus2.style.display = "none";
            linkIconMinus2.style.display = "inline";
        } else {
            moreContent2.style.display = "none";
            iconPlus2.style.display = "inline";
            iconMinus2.style.display = "none";
            linkIconPlus2.style.display = "inline";
            linkIconMinus2.style.display = "none";
        }
    }
</script>



</body>
</html>
