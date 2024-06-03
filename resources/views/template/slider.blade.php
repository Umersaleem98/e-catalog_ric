<style>
    .container-fluid {
    background-color: #1A1A1A;
    /* padding: 50px 0; */
}

.hero_box {
    opacity: 0;
    transform: translateX(-100%);
    transition: all 0.5s ease-out;
}

.hero_box.right {
    transform: translateX(100%);
}

.hero_box.visible {
    opacity: 1;
    transform: translateX(0);
}

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
                        <h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut" style="color: #EFA500">Transformative Education </h1>
                    </div>
                </div>
            </div>

            <!-- Hero Slide -->
            <div class="hero_slide">
                <div class="hero_slide_background" style="background-image: url('{{ asset('templates/images/ghi.jpg') }}')"></div>
                <div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
                    <div class="hero_slide_content text-center mt-5">
                        <h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut" style="color: #EFA500">Creating Impact for a Better Tomorrow </h1>
                    </div>
                </div>
            </div>

            <!-- Hero Slide -->
            <div class="hero_slide">
                <div class="hero_slide_background" style="background-image: url('{{ asset('templates/images/def.jpg') }}')"></div>
                <div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
                    <div class="hero_slide_content text-center mt-5">
                        <h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut" style="color: #EFA500">Empower Minds, Shape Futures </h1>
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
        <div class="col-12 col-sm-6 col-md-4 ">
            <div class="hero_box left d-flex flex-row align-items-center justify-content-start">
                <a href="{{url('student_stories')}}"> <img src="{{ asset('templates/images/professor.svg') }}" style="color: #EFA500" class="svg" alt="">
                 <div class="hero_box_content">
                     <h2 class="hero_box_title" style="color: #EFA500">Support a Scholar</h2>
                     <a href="{{url('student_stories')}}" class="hero_box_link" hidden style="color: #EFA500">View More</a>
                 </div></a>
             </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 ">
            <div class="hero_box right d-flex flex-row align-items-center justify-content-start">
                <a href="{{url('select_project')}}"> <img src="{{ asset('templates/images/earth-globe.svg') }}" style="color: #EFA500" class="svg" alt="">
                 <div class="hero_box_content">
                     <h2 class="hero_box_title" style="color: #EFA500">Fund a Project</h2>
                     <a href="{{url('select_project')}}" class="hero_box_link" hidden style="color: #EFA500">View More</a>
                 </div></a>
             </div>
        </div>
    </div>
</div>


 <script>
   document.addEventListener('DOMContentLoaded', () => {
    const heroBoxes = document.querySelectorAll('.hero_box');

    const observerOptions = {
        root: null,
        rootMargin: '0px',
        threshold: 0.1
    };

    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
            } else {
                entry.target.classList.remove('visible');
            }
        });
    }, observerOptions);

    heroBoxes.forEach(box => {
        observer.observe(box);
    });
});

</script>
