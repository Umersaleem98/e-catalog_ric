<!DOCTYPE html>
<html lang="en">
<head>
    <title>One Year</title>
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
                        <h1 class="text-dark">Support a Degree for 1 Year</h1>
                    </div>
                </div>
            </div>

            <!-- Fee Breakdown Heading -->
            <div class="row mt-5">
                <div class="col-12">
                    <h1 class="text-center text-dark mb-3">Fee Breakdown</h1>
                </div>
            </div>

            <!-- Undergraduate Students Section -->
            <div class="row mt-2">
                <div class="col-12">
                    <ul class="list-group list-group-flush text-dark btn-container"> <!-- Added btn-container class -->
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <div class="d-flex align-items-center">
                                {{-- <img src="{{ asset('templates/endowment_model/images1.jpg') }}" alt="" class="heading-image"> --}}
                                <h3>Undergraduate Students (UG)</h3>
                            </div>
                        </li>
                        <div class="card card-body mt-3">
                            <h4 class="text-dark">Detailed Fee Breakdown for UG:</h4>
                            <ul class="list-group list-group-flush text-dark">
                                <li class="list-group-item">
                                    <input type="checkbox" id="ugTuition" name="ugTuition" value="200000">
                                    <label for="ugTuition">Tuition: 200,000 PKR</label>
                                </li>
                                <li class="list-group-item">
                                    <input type="checkbox" id="ugAccommodation" name="ugAccommodation" value="50000">
                                    <label for="ugAccommodation">Accommodation: 50,000 PKR</label>
                                </li>
                                <div class="total-amount">
                                    Total Amount (UG): <span id="ugTotalAmount">0</span> PKR
                                </div>
                                <!-- Use a "plus" icon for adding a card -->
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

            <!-- Postgraduate Students Section -->
            <div class="row mt-2">
                <div class="col-12">
                    <ul class="list-group list-group-flush text-dark btn-container"> <!-- Added btn-container class -->
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <div class="d-flex align-items-center">
                                <img src="{{ asset('templates/endowment_model/images2.jpg') }}" alt="" class="heading-image">
                                <h3>Postgraduate Students (PG)</h3>
                            </div>
                        </li>
                        <div class="card card-body mt-3">
                            <h4 class="text-dark">Detailed Fee Breakdown for PG:</h4>
                            <ul class="list-group list-group-flush text-dark">
                                <li class="list-group-item">
                                    <input type="checkbox" id="pgTuition" name="pgTuition" value="250000">
                                    <label for="pgTuition">Tuition: 250,000 PKR</label>
                                </li>
                                <li class="list-group-item">
                                    <input type="checkbox" id="pgAccommodation" name="pgAccommodation" value="60000">
                                    <label for="pgAccommodation">Accommodation: 60,000 PKR</label>
                                </li>
                                <div class="total-amount">
                                    Total Amount (PG): <span id="pgTotalAmount">0</span> PKR
                                </div>
                                <!-- Use a "plus" icon for adding a card -->
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
            <!-- End of Postgraduate Students Section -->
        </div>
    </div>

    <!-- Footer -->
    @include('template.footer')
</div>

<!-- Bootstrap Bundle with Popper -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<script>
    $(document).ready(function() {
        $('input[name="ugTuition"], input[name="ugAccommodation"]').change(function() {
            var ugTotal = 0;
            $('input[name="ugTuition"]:checked, input[name="ugAccommodation"]:checked').each(function() {
                ugTotal += parseInt($(this).val());
            });
            $('#ugTotalAmount').text(ugTotal);
        });

        $('input[name="pgTuition"], input[name="pgAccommodation"]').change(function() {
            var pgTotal = 0;
            $('input[name="pgTuition"]:checked, input[name="pgAccommodation"]:checked').each(function() {
                pgTotal += parseInt($(this).val());
            });
            $('#pgTotalAmount').text(pgTotal);
        });
    });
</script>

</body>
</html>
