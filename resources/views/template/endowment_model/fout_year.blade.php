<!DOCTYPE html>
<html lang="en">
<head>
    <title>One Year</title>
    @include('template.head')
    <style>
        .btn-details {
            width: 150px;
        }
        .heading-image {
            max-width: 100px; /* Adjust size as needed */
            margin-right: 15px;
        }
    </style>
</head>
<body>

<div class="super_container">
    <!-- Header -->
    @include('template.navbar')
    @include('template.home')

    <div class="events page_section">
        <div class="container">
            <div class="row mb-5">
                <div class="col">
                    <div class="section_title text-center">
                        <h1 class="text-dark">Support a Degree for 4 Year</h1>
                    </div>
                </div>
            </div>

            <!-- Fee Breakdown Heading -->
            <div class="row mt-5">
                <div class="col-12">
                    <h1 class="text-center text-dark mb-3">Fee Breakdown</h1>
                </div>
            </div>

            <!-- Fee Breakdown Section -->
            <div class="row mt-2">
                <div class="col-12">
                    <ul class="list-group list-group-flush text-dark">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <div class="d-flex align-items-center">
                                <img src="{{ asset('templates/endowment_model/images1.jpg') }}" alt="" class="heading-image">
                                <h3>Undergraduate Students (UG)</h3>
                            </div>
                            <button class="btn btn-primary btn-details" type="button" data-bs-toggle="collapse" data-bs-target="#ugFeeDetails" aria-expanded="false" aria-controls="ugFeeDetails">
                                More Details
                            </button>
                        </li>
                        <div class="collapse mt-3" id="ugFeeDetails">
                            <div class="card card-body">
                                <h4 class="text-dark">Detailed Fee Breakdown for UG:</h4>
                                <ul class="list-group list-group-flush text-dark">
                                    <li class="list-group-item">Tuition: 200,000 PKR</li>
                                    <li class="list-group-item">Accommodation: 50,000 PKR</li>
                                    <li class="list-group-item">Books and Materials: 30,000 PKR</li>
                                    <li class="list-group-item">Other Fees: 20,000 PKR</li>
                                    <li>
                                        <a href="#" class="btn btn-success">Make a Pledge</a>
                                        <a href="#" class="btn btn-primary">Pay Now</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <div class="d-flex align-items-center">
                                <img src="{{ asset('templates/endowment_model/images1.jpg') }}" alt="" class="heading-image">
                                <h3>Postgraduate Students (PG)</h3>
                            </div>
                            <button class="btn btn-primary btn-details" type="button" data-bs-toggle="collapse" data-bs-target="#pgFeeDetails" aria-expanded="false" aria-controls="pgFeeDetails">
                                More Details
                            </button>
                        </li>
                        <div class="collapse mt-3" id="pgFeeDetails">
                            <div class="card card-body">
                                <h4 class="text-dark">Detailed Fee Breakdown for PG:</h4>
                                <ul class="list-group list-group-flush text-dark">
                                    <li class="list-group-item">Tuition: 200,000 PKR</li>
                                    <li class="list-group-item">Accommodation: 50,000 PKR</li>
                                    <li class="list-group-item">Books and Materials: 30,000 PKR</li>
                                    <li class="list-group-item">Other Fees: 20,000 PKR</li>
                                    <li>
                                        <a href="#" class="btn btn-success">Make a Pledge</a>
                                        <a href="#" class="btn btn-primary">Pay Now</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </ul>
                </div>
            </div>
            <!-- End of Fee Breakdown Section -->
        </div>
    </div>

    <!-- Footer -->
    @include('template.footer')
</div>

<!-- Bootstrap Bundle with Popper -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

</body>
</html>
