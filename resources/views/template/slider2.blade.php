<style>
    @keyframes popIn {
        0% {
            transform: scale(0.5);
            opacity: 0;
        }
        100% {
            transform: scale(1);
            opacity: 1;
        }
    }
    .btn {
        font-weight: bold;
    }
    .hero_slide {
        position: relative;
        overflow: hidden;
    }
    .video_bg {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        z-index: -1;
    }
    .video_overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5); /* Adjust the transparency here */
        z-index: 0;
    }
</style>

<div class="container-fluid">
    <div class="hero_slider_container">
        <video class="video_bg" autoplay muted loop>
            <source src="{{ asset('templates/videos/video2.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <div class="video_overlay"></div> <!-- Overlay added here -->
        <div class="hero_slider owl-carousel">

            <!-- Additional slides -->

            <div class="hero_slide">
                <div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
                    <div class="hero_slide_content text-center mt-5">
                        <h1 class="display-4 font-weight-bold text-warning" data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut">Empower Minds, Shape Futures</h1>
                        <div class="hero_slide_buttons mt-3">
                            <a href="{{url('endowment_model')}}" class="btn btn-warning btn-lg m-2 display-3" data-animation-in="popIn" style="animation: popIn 0.5s forwards; animation-delay: 0.3s;">Giving Avenues</a>
                            <a href="{{url('student_stories')}}" class="btn btn-warning btn-lg m-2 display-3" data-animation-in="popIn" style="animation: popIn 0.5s forwards; animation-delay: 0.3s;">Awardee Profile</a>
                            <a href="{{url('select_project')}}" class="btn btn-warning btn-lg m-2 display-3" data-animation-in="popIn" style="animation: popIn 0.5s forwards; animation-delay: 0.3s;">Fund a Project</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- More slides can be added here in the same format -->
            <div class="hero_slide">
                <div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
                    <div class="hero_slide_content text-center mt-5">
                        <h1 class="display-4 font-weight-bold text-warning" data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut">Innovative Solutions</h1>
                        <div class="hero_slide_buttons mt-3">
                            <a href="{{url('endowment_model')}}" class="btn btn-warning btn-lg m-2 display-3" data-animation-in="popIn" style="animation: popIn 0.5s forwards; animation-delay: 0.3s;">Giving Avenues</a>
                            <a href="{{url('student_stories')}}" class="btn btn-warning btn-lg m-2 display-3" data-animation-in="popIn" style="animation: popIn 0.5s forwards; animation-delay: 0.3s;">Awardee Profile</a>
                            <a href="{{url('select_project')}}" class="btn btn-warning btn-lg m-2 display-3" data-animation-in="popIn" style="animation: popIn 0.5s forwards; animation-delay: 0.3s;">Fund a Project</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero_slide">
                <div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
                    <div class="hero_slide_content text-center mt-5">
                        <h1 class="display-4 font-weight-bold text-warning" data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut">Sustainable Development</h1>
                        <div class="hero_slide_buttons mt-3">
                            <a href="{{url('endowment_model')}}" class="btn btn-warning btn-lg m-2 display-3" data-animation-in="popIn" style="animation: popIn 0.5s forwards; animation-delay: 0.3s;">Giving Avenues</a>
                            <a href="{{url('student_stories')}}" class="btn btn-warning btn-lg m-2 display-3" data-animation-in="popIn" style="animation: popIn 0.5s forwards; animation-delay: 0.3s;">Awardee Profile</a>
                            <a href="{{url('select_project')}}" class="btn btn-warning btn-lg m-2 display-3" data-animation-in="popIn" style="animation: popIn 0.5s forwards; animation-delay: 0.3s;">Fund a Project</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navigation arrows (optional) -->

        {{-- <div class="hero_slider_left hero_slider_nav trans_200"><span class="trans_200">prev</span></div>
        <div class="hero_slider_right hero_slider_nav trans_200"><span class="trans_200">next</span></div> --}}

    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const heroBoxes = document.querySelectorAll('.hero_box');
        const heroSlider = document.querySelector('.hero_slider');
        const heroSlides = document.querySelectorAll('.hero_slide');

        const observerOptions = {
            root: null,
            rootMargin: '0px',
            threshold: 0.1
        };

        const observer = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                    const buttons = entry.target.querySelectorAll('.button[data-animation-in]');
                    buttons.forEach(button => {
                        const animationIn = button.getAttribute('data-animation-in');
                        button.style.animationName = animationIn;
                    });
                } else {
                    entry.target.classList.remove('visible');
                }
            });
        }, observerOptions);

        heroBoxes.forEach(box => {
            observer.observe(box);
        });

        heroSlides.forEach(slide => {
            observer.observe(slide);
        });

        // Add event listener to the Owl Carousel slider
        heroSlider.addEventListener('changed.owl.carousel', (event) => {
            const currentSlide = event.item.index;
            const buttons = heroSlides[currentSlide].querySelectorAll('.button[data-animation-in]');
            buttons.forEach(button => {
                const animationIn = button.getAttribute('data-animation-in');
                button.style.animationName = animationIn;
            });
        });
    });
</script>
