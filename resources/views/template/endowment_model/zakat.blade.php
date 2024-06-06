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
                    <ul class="list-group list-group-flush text-dark btn-container"> <!-- Added btn-container class -->
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <div class="d-flex align-items-center">
                                {{-- <img src="{{ asset('templates/endowment_model/images1.jpg') }}" alt="" class="heading-image"> --}}
                                <h3>Undergraduate Students </h3>
                            </div>
                        </li>
                        <div class="card card-body mt-3">
                            <h4 class="text-dark">Detailed Breakdown:</h4>
                            <ul class="list-group list-group-flush text-dark">
                                <li class="list-group-item">
                                    <label for="ugTuition">Tuition:</label>
                                    <input type="number" id="ugTuition" name="ugTuition" value="0" placeholder="Enter tuition amount in PKR">
                                </li>
                                <div class="total-amount">
                                    Total Amount : <span id="ugTotalAmount">0</span> PKR
                                </div>
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
<script>
    $(document).ready(function() {
        // Update total amount when input values change
        $('input[name="ugTuition"], input[name="ugAccommodation"]').on('input', function() {
            var tuitionAmount = parseInt($('#ugTuition').val()) || 0;
            var accommodationAmount = parseInt($('#ugAccommodation').val()) || 0;
            var totalAmount = tuitionAmount + accommodationAmount;
            $('#ugTotalAmount').text(totalAmount);
        });
    });
</script>

</body>
</html>
