<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contact us</title>
    @include('template.head')
    <style>

    </style>
</head>
<body>

<div class="super_container">

	<!-- Header -->

@include('template.navbar')



	<!-- Home -->

@include('template.home')

<main>
    <section id="contact-form" class="container mt-1">
        <div class="row mt-5">
            <div class="col">
                <div class="section_title text-center">
                    <h1 class="">Contact Us</h1>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-info" role="alert">
                        If you're interested in learning more about impactful work and how you and your friends can contribute to this nation-building endeavor, please feel free to send a message, and our Gift Officers will get back to you!
                    </div>
                </div>
            </div>
        </div>


        <div class="container mt-3">
            <div class="row">
                <div class="col-md-6 mb-3">
                    <form action="{{url('contactus')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name">Your Name</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>

                        <div class="form-group">
                            <label for="email">Your Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>

                        <div class="form-group">
                            <label for="phone">Your Phone</label>
                            <input type="tel" class="form-control" id="phone" name="phone" required>
                        </div>

                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">Send Message</button>
                    </form>
                </div>
                <div class="col-md-6 d-flex align-items-center justify-content-center">
                    <img src="{{ asset('templates/contact_us/contact_us.jpg') }}" alt="Image 1" class="img-fluid rounded" style="max-width: 100%; max-height: 500px;">
                </div>

            </div>
        </div>
    </section>
    <br>
</main>



    @include('template.footer')

</body>
</html>
