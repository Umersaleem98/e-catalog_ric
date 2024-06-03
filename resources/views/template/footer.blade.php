<footer class="footer">
    <div class="container">


        <div class="footer_content" style="margin-top: -80px">
            <div class="row">

                <!-- Footer Column - About -->
                <div class="col-lg-3 footer_col">

                    <!-- Logo -->
                    <div class="logo_container">
                        <div class="logo">
                            <!-- Use asset function for the image URL -->
                            <img src="{{ asset('templates/images/logo.png') }}" alt="" class="img-fluid" style="max-width: 80px;">
                            {{-- <span>course</span> --}}
                        </div>
                    </div>


                    <p class="footer_about_text">Transformative Education OR Creating Impact for a Better Tomorrow OR Empower Minds, Shape Futures.</p>

                </div>

                <!-- Footer Column - Menu -->

                <div class="col-lg-3 footer_col">
                    <div class="footer_column_title">Menu</div>
                    <div class="footer_column_content">
                        <ul>
                            <li class="footer_list_item"><a href="{{url('/')}}">home</a></li>
                            <li class="footer_list_item"><a href="{{url('about_us')}}">About us</a></li>
                            <li class="footer_list_item"><a href="{{url('/signrature_program')}}">Signature Program</a></li>
                            <li class="footer_list_item"><a href="{{url('/our_team')}}">Our Team</a></li>
                            <li class="footer_list_item"><a href="{{url('/contact_us')}}">contact</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Footer Column - Usefull Links -->

                <div class="col-lg-3 footer_col">
                    <div class="footer_column_title">Usefull Links</div>
                    <div class="footer_column_content">
                        <ul>
                            <li class="footer_list_item"><a href="{{url('https://nust.edu.pk/about-us')}}">NUST </a></li>
                            {{-- <li class="footer_list_item"><a href="{{url('/')}}">Testimonials</a></li> --}}
                            <li class="footer_list_item"><a href="{{url('https://advancement.nust.edu.pk/#/')}}">Advancement </a></li>
                            <li class="footer_list_item"><a href="{{url('-  https://www.linkedin.com/company/uaonust/posts/?feedView=all')}}">LinkedIn </a></li>
                          </ul>
                    </div>
                </div>

                <!-- Footer Column - Contact -->

                <div class="col-lg-3 footer_col">
                    <div class="footer_column_title">Contact</div>
                    <div class="footer_column_content">
                        <ul>
                            <li class="footer_contact_item">
                                <div class="footer_contact_icon">
                                    <!-- Use asset function for the image URL -->
                                    <img src="{{ asset('templates/images/placeholder.svg') }}" alt="Placeholder Icon">
                                </div>
                                {{-- <span> RIC Secretariat National University of Science & Technology(NUST) H12 Islamabad</span> --}}
                                <span> RIC Secretariat NUST H-12 </span>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>Islamabad</span>
                            </li>
                            <li class="footer_contact_item">
                                <div class="footer_contact_icon">
                                    <!-- Use asset function for the image URL -->
                                    <img src="{{ asset('templates/images/smartphone.svg') }}" alt="Smartphone Icon">
                                </div>
                                <span>+92 51 9085 6821</span>

                            </li>
                            <li class="footer_contact_item">
                                <div class="footer_contact_icon">
                                    <!-- Use asset function for the image URL -->
                                    <img src="{{ asset('templates/images/envelope.svg') }}" alt="Envelope Icon">
                                </div>
                                advancement.nust.edu.pk
                            </li>
                        </ul>
                    </div>
                </div>


            </div>
        </div>

        <!-- Footer Copyright -->

        <div class="footer_bar d-flex flex-column flex-sm-row align-items-center">
            <div class="footer_copyright">


        </div>

    </div>
</footer>

</div>

<script src="{{ asset('templates/js/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('templates/styles/bootstrap4/popper.js') }}"></script>
<script src="{{ asset('templates/styles/bootstrap4/bootstrap.min.js') }}"></script>
<script src="{{ asset('templates/plugins/greensock/TweenMax.min.js') }}"></script>
<script src="{{ asset('templates/plugins/greensock/TimelineMax.min.js') }}"></script>
<script src="{{ asset('templates/plugins/scrollmagic/ScrollMagic.min.js') }}"></script>
<script src="{{ asset('templates/plugins/greensock/animation.gsap.min.js') }}"></script>
<script src="{{ asset('templates/plugins/greensock/ScrollToPlugin.min.js') }}"></script>
<script src="{{ asset('templates/plugins/OwlCarousel2-2.2.1/owl.carousel.js') }}"></script>
<script src="{{ asset('templates/plugins/scrollTo/jquery.scrollTo.min.js') }}"></script>
<script src="{{ asset('templates/plugins/easing/easing.js') }}"></script>
<script src="{{ asset('templates/js/custom.js') }}"></script>
