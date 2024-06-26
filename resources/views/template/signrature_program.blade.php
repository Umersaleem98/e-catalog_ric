
<title>Signature Programs</title>
@include('template.head')
<style>
    /* Custom CSS for responsiveness */
    @media (max-width: 767px) {
        .ml-sm-5 {
            margin-left: 0 !important;
        }
    }

    p,h2{
        color: black;
    }
</style>

<div class="super_container">

<!-- Header -->
@include('template.navbar')

@include('template.home')

<div class="events page_section">
    <div class="container">
        <!-- Section Title -->
        <div class="row mb-5">
            <div class="col">
                <div class="section_title text-center">
                    <h1 class="">Signature Programs</h1>
                </div>
            </div>
        </div>

        <!-- Section 1 -->
        <div class="row align-items-center">
            <div class="col-md-5">
                <img src="{{ asset('templates/signature_program/abc.jpg') }}" alt="Image 1" style="border-radius: 5%; height:240px; width: 100%">
            </div>
            <div class="col-md-7">
                <h2 class="text-center">NUST Advisory Council for Resource Mobilization</h2>
                <p>A pioneering initiative designed to foster meaningful connections with friends and alumni of NUST. The primary objective of this innovative office is to harness the collective potential of NUST's extensive network to secure vital resources and funding. Since its inception, the Resource Mobilization Office has successfully assembled a team of three dedicated Resource Mobilization Officers (RMOs), who have played a pivotal role in expanding our outreach and establishing a strong presence in their respective regions. Through their tireless efforts, we have been able to broaden our donor base, cultivate strategic partnerships, and secure essential support for our academic and research initiatives.
                    We would like to acknowledge our RMOs on our catalog :</p>
            </div>
        </div>

        <!-- Section 2 -->
        <div class="row mt-5 align-items-center">
            <div class="col-md-5 order-md-2">
                <img src="{{ asset('templates/rmo/haami.jpg') }}" alt="Image 1" style="border-radius: 5%; height:240px">
            </div>
            <div class="col-md-7 order-md-1">
                <h2 class="text-center">Haami Club: Cultivating Empathy and Philanthropy</h2>
                <p>The Haami Club is NUST's groundbreaking student-led fundraising initiative. With a rapidly growing membership of over 150 dedicated students, this trailblazing club aims to foster a more empathetic generation by deeply instilling the values of philanthropy and mutual aid. Our exceptional team of 'Haamis' has already showcased their unwavering commitment by raising an impressive PKR 300,000 through our impactful zakat drive, Al-Musaid. This initiative aligns with NUST's greater goal of producing a generation equipped with leadership skills, ready to lead with compassion and integrity. Join us in empowering these bright minds to make a lasting difference and shape a more compassionate future.</p>
            </div>
        </div>
        <div class="row mt-5 align-items-center">
            <div class="col-md-6">
                <img src="{{ asset('templates/rmo/Alumni.jpg') }}" alt="Image 1" style="border-radius: 5%; height:240px">
            </div>
            <div class="col-md-6">
                <h2 class="text-center">The Power of Our Alumni Network
                </h2>
                <p>NUST takes immense pride in its vast body of alumni, spread across more than 70 countries. Our alumni play a crucial role in supporting the university, particularly in terms of fundraising. Alumni are vital to a university's success, as they not only provide financial support but also serve as mentors, industry connectors, and advocates for the institution. One of the most significant contributors is NUSTian USA, our largest alumni organization. Their unwavering support and generosity help ensure that NUST continues to provide exceptional education and opportunities to our students. Join us in harnessing the power of our alumni network to empower the leaders of tomorrow.</p>
            </div>
        </div>

        <!-- Section 2 -->
        <div class="row mt-5 align-items-center">
            <div class="col-md-5 order-md-2">
                <img src="{{ asset('templates/rmo/musaid.jpg') }}" alt="Image 1" style="border-radius: 5%; height:240px">
            </div>
            <div class="col-md-7 order-md-1">
                <h2 class="text-center">Al-Musaid: Supporting Bright Futures
                </h2>
                <p>In Ramadan 2024, the University Advancement Office (UAO) launched the zakat campaign "Al-Musaid," dedicated to raising essential funds for deserving students. This initiative has already successfully garnered PKR 5,775,584, highlighting UAO's unwavering commitment to providing financial support to the nation's brightest minds. Through efforts like Al-Musaid, we strive to ensure that the dream of higher education becomes a reality for all talented students, regardless of their financial backgrounds. Be a part of our mission to empower the leaders of tomorrow.</p>
            </div>
        </div>
    </div>
</div>


<!-- Footer -->
@include('template.footer')
