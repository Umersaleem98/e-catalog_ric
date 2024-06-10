<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hero Slider with Buttons</title>
    <style>
        .container-fluid {
            background-color: #1A1A1A;
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

        .button {
            display: inline-block;
            padding: 15px 25px; /* Increased padding */
            margin: 10px;
            font-size: 18px; /* Increased font size */
            color: #fff;
            background-color: #EFA500;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            cursor: pointer;
            transition: background-color 0.3s;
            opacity: 0; /* Initial state for animation */
            transform: scale(0.5); /* Initial state for animation */
        }

        .button:hover {
            background-color: #d48a00;
        }

        .hero_slide_content {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .hero_slide_buttons {
            margin-top: 20px;
        }

        .hero_slide_buttons .button[data-animation-in="popIn"] {
            animation: popIn 0.5s forwards; /* Apply the animation */
            animation-delay: 0.3s; /* Delay to sync with text animation */
        }

        .hero_slide_content h1 {
            font-size: 2.875rem; /* Increase the font size to about 46px */
            font-weight: bold; /* Make the text bold */
            white-space: nowrap; /* Ensure text stays on one line */
            overflow: hidden;
            text-overflow: ellipsis; /* Add ellipsis if text is too long */
        }
    </style>
</head>
<body>

<div class="home">
    <!-- Hero Slider -->
    <div class="hero_slider_container">
        <div class="hero_slider owl-carousel">
            <!-- Hero Slide -->
            <div class="hero_slide">
                <div class="hero_slide_background" style="background-image: url('{{ asset('templates/images/ghi.jpg') }}')"></div>
                <div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
                    <div class="hero_slide_content text-center mt-5">
                        <h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut" style="color: #EFA500">Transformative Education</h1>
                        <div class="hero_slide_buttons">
                            <a href="{{url('endowment_model')}}" class="button" data-animation-in="popIn">Endowment Model</a>
                            <a href="{{url('student_stories')}}" class="button" data-animation-in="popIn">Support a Scholar</a>
                            <a href="{{url('select_project')}}" class="button" data-animation-in="popIn">Fund a Project</a>

                        </div>
                    </div>
                </div>
            </div>
            <!-- Hero Slide -->
            <div class="hero_slide">
                <div class="hero_slide_background" style="background-image: url('{{ asset('templates/images/ijk.jpg') }}')"></div>
                <div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
                    <div class="hero_slide_content text-center mt-5">
                        <h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut" style="color: #EFA500">Creating Impact for a Better Tomorrow</h1>
                        <div class="hero_slide_buttons">
                            <a href="{{url('endowment_model')}}" class="button" data-animation-in="popIn">Endowment Model</a>
                            <a href="{{url('student_stories')}}" class="button" data-animation-in="popIn">Support a Scholar</a>
                            <a href="{{url('select_project')}}" class="button" data-animation-in="popIn">Fund a Project</a>

                        </div>
                    </div>
                </div>
            </div>
            <!-- Hero Slide -->
            <div class="hero_slide">
                <div class="hero_slide_background" style="background-image: url('{{ asset('templates/images/def.jpg') }}')"></div>
                <div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
                    <div class="hero_slide_content text-center mt-5">
                        <h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut" style="color: #EFA500">Empower Minds, Shape Futures</h1>
                        <div class="hero_slide_buttons">
                            <a href="{{url('endowment_model')}}" class="button" data-animation-in="popIn">Endowment Model</a>
                            <a href="{{url('student_stories')}}" class="button" data-animation-in="popIn">Support a Scholar</a>
                            <a href="{{url('select_project')}}" class="button" data-animation-in="popIn">Fund a Project</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navigation arrows (optional) -->
        <!--
        <div class="hero_slider_left hero_slider_nav trans_200"><span class="trans_200">prev</span></div>
        <div class="hero_slider_right hero_slider_nav trans_200"><span class="trans_200">next</span></div>
        -->
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


</body>
</html>
