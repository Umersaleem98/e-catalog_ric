<!DOCTYPE html>
<html lang="en">
<head>
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
                    <h1 class="">About Us</h1>
                </div>
            </div>
        </div>
        <div class="container mt-3">
            <div class="row">
                <div class="col-md-6 mb-3">
                    <form action="submit_contact_form.php" method="POST">
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
                    <img src="{{ asset('templates/images/charity.jpg') }}" alt="Image 1" class="img-fluid rounded" style="max-width: 100%;">
                </div>

            </div>
        </div>
    </section>
    <br>
</main>



    @include('template.footer')

</body>
</html>
