<style>

</style>
<div class="home">

    <!-- Hero Slider -->
    <div class="hero_slider_container">
        <div class="hero_slider owl-carousel">

            <!-- Hero Slide -->
            <div class="hero_slide">
                <div class="hero_slide_background" style="background-image: url('{{ asset('templates/images/abc.jpg') }}')"></div>
                <div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
                    <div class="hero_slide_content text-center mt-5">
                        <h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut">Transformative Education </h1>
                    </div>
                </div>
            </div>

            <!-- Hero Slide -->
            <div class="hero_slide">
                <div class="hero_slide_background" style="background-image: url('{{ asset('templates/images/abc.jpg') }}')"></div>
                <div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
                    <div class="hero_slide_content text-center mt-5">
                        <h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut">Creating Impact for a Better Tomorrow </h1>
                    </div>
                </div>
            </div>

            <!-- Hero Slide -->
            <div class="hero_slide">
                <div class="hero_slide_background" style="background-image: url('{{ asset('templates/images/def.jpg') }}')"></div>
                <div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
                    <div class="hero_slide_content text-center mt-5">
                        <h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut">Empower Minds, Shape Futures </h1>
                    </div>
                </div>
            </div>


        </div>

        {{-- <div class="hero_slider_left hero_slider_nav trans_200"><span class="trans_200">prev</span></div>
        <div class="hero_slider_right hero_slider_nav trans_200"><span class="trans_200">next</span></div> --}}
    </div>

</div>


 <div class="container-fluid" style="background-color: #1A1A1A">
    <div class="row justify-content-center">
        <div class="col-12 col-sm-6 col-md-4 mb-3">
            <div class="hero_box d-flex flex-row align-items-center justify-content-start">
                <a href="{{url('student_stories')}}"> <img src="{{ asset('templates/images/professor.svg') }}" class="svg" alt="">
                 <div class="hero_box_content">
                     <h2 class="hero_box_title">Support a Scholar</h2>
                     <a href="{{url('student_stories')}}" class="hero_box_link">View More</a>
                 </div></a>
             </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 mb-3">
            <div class="hero_box d-flex flex-row align-items-center justify-content-start">
                <img src="{{ asset('templates/images/earth-globe.svg') }}" class="svg" alt="">
                <div class="hero_box_content">
                    <h2 class="hero_box_title">Fund a Project</h2>
                    <a href="courses.html" class="hero_box_link">View More</a>
                </div>
            </div>
        </div>
    </div>
</div>



{{-- <div class="hero_boxes">
    <div class="hero_boxes_inner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 hero_box_col">
                    <div class="hero_box d-flex flex-row align-items-center justify-content-start">
                       <a href="{{url('student_stories')}}"> <img src="{{ asset('templates/images/professor.svg') }}" class="svg" alt="">
                        <div class="hero_box_content">
                            <h2 class="hero_box_title">Support a Scholar</h2>
                            <a href="" class="hero_box_link">View More</a>
                        </div></a>
                    </div>
                </div>

                <div class="col-lg-6 hero_box_col">
                    <div class="hero_box d-flex flex-row align-items-center justify-content-start">
                        <img src="{{ asset('templates/images/earth-globe.svg') }}" class="svg" alt="">
                        <div class="hero_box_content">
                            <h2 class="hero_box_title">Fund a Project</h2>
                            <a href="courses.html" class="hero_box_link">View More</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
 --}}
