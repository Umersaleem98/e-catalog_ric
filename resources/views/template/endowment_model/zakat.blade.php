<!DOCTYPE html>
<html lang="en">
<head>
    <title>Zakat</title>
    @include('template.head')
    <style>
        /* Your CSS styles here */
        .btn-container {
            display: flex;
            justify-content: center;
            gap: 10px; /* Adjust the gap as needed */
        }

        .h3-box {
    background-color: #f8f9fa; /* Light gray background */
    border-radius: 5px; /* Rounded corners */
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
                        <h1 class="text-dark">Zakat</h1>
                    </div>
                </div>
            </div>

            <!-- Breakdown Heading -->
            <div class="row mt-5">
                <div class="col-12">
                    <h1 class="text-center text-dark mb-3">Breakdown</h1>
                </div>
            </div>

            <!-- Undergraduate Students Section -->
            <div class="row mt-2">
                <div class="col-12">
                    <ul class="list-group list-group-flush text-dark btn-container">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <div class="d-flex align-items-center">
                                {{-- <img src="{{ asset('templates/endowment_model/images1.jpg') }}" alt="" class="heading-image"> --}}
                                {{-- <h3>Undergraduate Students </h3> --}}
                            </div>
                        </li>

                        <div class="text-center mt-3">
                            <h2>Invest Your Zakat in Deserving Students with Verified Financial Needs</h2>
                        </div>

                        <div class="card card-body">

                            <div class="h3-box my-1 p-3">
                                <h3>Zero Operational Overheads</h3>
                            </div>
                            <div class="h3-box my-1 p-3">
                                <h3>Impact Oriented Giving</h3>
                            </div>
                            <div class="h3-box my-1 p-3">
                                <h3>Shariah Compliant</h3>
                            </div>
                            <ul class="list-group list-group-flush text-dark">
                                <!-- Use Bootstrap utility classes to center the buttons and add a gap -->
                                <li class="btn-container d-flex justify-content-center gap-2">
                                    <a href="{{url('Make_a_Pledge')}}" class="btn btn-success">Make a Pledge</a>
                                    <a href="{{url('payment')}}" class="btn btn-primary">Pay Now</a>
                                </li>
                            </ul>
                        </div>
                    </ul>
                </div>
            </div>

            <!-- End of Undergraduate Students Section -->
        </div>
    </div>

    <!-- Footer -->
    @include('template.footer')
</div>

<!-- Bootstrap Bundle with Popper -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

<!-- JavaScript for calculating total amount -->

</body>
</html>
