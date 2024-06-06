<!DOCTYPE html>
<html lang="en">
<head>
    <title>perpetual seat</title>
    @include('template.head')

    <style>
        /* Your CSS styles here */
        .btn-container {
            display: flex;
            justify-content: center;
            gap: 10px; /* Adjust the gap as needed */
        }
        .card-body p {
            font-size: 1.2em; /* Increase font size */
            color: #333; /* Darken text color */
            line-height: 1.6;
        }
        .alert p {
            font-size: 1.2em; /* Increase font size */
            color: #333; /* Darken text color */
            line-height: 1.6;
            margin: 0; /* Remove default margin */
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
                        <h1 class="text-dark">Create a Perpetual Seat in Your Name</h1>
                    </div>
                </div>
            </div>

            <!-- Breakdown Heading -->
            <div class="row mt-5">
                <div class="col-lg-6">
                    <!-- Left Part -->
                    <div class="row mt-2">
                        <div class="col-12">
                            <ul class="list-group list-group-flush text-dark btn-container">
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <div class="d-flex align-items-center">
                                        <h3 class="pl-3">Single Endowment for Undergraduate Students (UG)</h3>
                                    </div>
                                </li>
                                <div class="card card-body mt-3">
                                    <h4 class="text-dark">Detailed Breakdown for UG:</h4>
                                    <ul class="list-group list-group-flush text-dark">
                                        <li class="list-group-item">
                                            <input type="checkbox" id="ugTuitionLeft" name="ugTuitionLeft" value="4000000">
                                            <label for="ugTuitionLeft">Tuition: 40,00,000 Million PKR</label>
                                        </li>
                                        <div class="total-amount">
                                            Total Amount (UG): <span id="ugTotalAmountLeft">0</span> PKR
                                        </div>
                                        <li class="btn-container d-flex justify-content-center gap-2">
                                            <a href="{{url('Make_a_Pledge')}}" class="btn btn-success">Make a Pledge</a>
                                            <a href="{{url('payment')}}" class="btn btn-primary">Pay Now</a>
                                        </li>
                                    </ul>
                                </div>
                            </ul>
                        </div>
                    </div>
                    <!-- End of Left Part -->
                </div>
                <div class="col-lg-6">
                    <!-- Right Part -->
                    <div class="row mt-2">
                        <div class="col-12">
                            <ul class="list-group list-group-flush text-dark btn-container">
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <div class="d-flex align-items-center">
                                        <h3 class="pl-3">Circular Endowment for Undergraduate Students (UG)</h3>
                                    </div>
                                </li>
                                <div class="card card-body mt-3">
                                    <h4 class="text-dark">Detailed Breakdown for UG:</h4>
                                    <ul class="list-group list-group-flush text-dark">
                                        <li class="list-group-item">
                                            <input type="checkbox" id="ugTuitionRight" name="ugTuitionRight" value="5000000">
                                            <label for="ugTuitionRight">Tuition: 50,00,000  (5)Million PKR</label>
                                        </li>
                                        <div class="total-amount">
                                            Total Amount (UG): <span id="ugTotalAmountRight">0</span> PKR
                                        </div>
                                        <li class="btn-container d-flex justify-content-center gap-2">
                                            <a href="{{url('Make_a_Pledge')}}" class="btn btn-success">Make a Pledge</a>
                                            <a href="{{url('payment')}}" class="btn btn-primary">Pay Now</a>
                                        </li>
                                    </ul>
                                </div>
                            </ul>
                        </div>
                    </div>
                    <!-- End of Right Part -->
                </div>
            </div>

            <!-- End of Breakdown Section -->
            <div class="container mt-3">
                <div class="row justify-content-center">
                    <h2 class="text-center">Postgraduate</h2>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-6">
                    <!-- Left Part -->
                    <div class="row mt-2">
                        <div class="col-12">
                            <ul class="list-group list-group-flush text-dark btn-container">
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <div class="d-flex align-items-center">
                                        <h3 class="pl-3">Single Endowment for Postgraduate Students (PG)</h3>
                                    </div>
                                </li>
                                <div class="card card-body mt-3">
                                    <h4 class="text-dark">Detailed Breakdown for PG:</h4>
                                    <ul class="list-group list-group-flush text-dark">
                                        <li class="list-group-item">
                                            <input type="checkbox" id="pgTuitionLeft" name="pgTuitionLeft" value="3000000">
                                            <label for="pgTuitionLeft">Tuition: 30,00,000 PKR</label>
                                        </li>
                                        <div class="total-amount">
                                            Total Amount (PG): <span id="pgTotalAmountLeft">0</span> PKR
                                        </div>
                                        <li class="btn-container d-flex justify-content-center gap-2">
                                            <a href="{{url('Make_a_Pledge')}}" class="btn btn-success">Make a Pledge</a>
                                            <a href="{{url('payment')}}" class="btn btn-primary">Pay Now</a>
                                        </li>
                                    </ul>
                                </div>
                            </ul>
                        </div>
                    </div>
                    <!-- End of Left Part -->
                </div>
                <div class="col-lg-6">
                    <!-- Right Part -->
                    <div class="row mt-2">
                        <div class="col-12">
                            <ul class="list-group list-group-flush text-dark btn-container">
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <div class="d-flex align-items-center">
                                        <h3 class="pl-3">Circular Endowment for Postgraduate Students (PG)</h3>
                                    </div>
                                </li>
                                <div class="card card-body mt-3">
                                    <h4 class="text-dark">Detailed Breakdown for PG:</h4>
                                    <ul class="list-group list-group-flush text-dark">
                                        <li class="list-group-item">
                                            <input type="checkbox" id="pgTuitionRight" name="pgTuitionRight" value="6000000">
                                            <label for="pgTuitionRight">Tuition: 60,00,000 PKR</label>
                                        </li>
                                        <div class="total-amount">
                                            Total Amount (PG): <span id="pgTotalAmountRight">0</span> PKR
                                        </div>
                                        <li class="btn-container d-flex justify-content-center gap-2">
                                            <a href="{{url('Make_a_Pledge')}}" class="btn btn-success">Make a Pledge</a>
                                            <a href="{{url('payment')}}" class="btn btn-primary">Pay Now</a>
                                        </li>
                                    </ul>
                                </div>
                            </ul>
                        </div>
                    </div>
                    <!-- End of Right Part -->
                </div>
            </div>




            <div class="container mt-3">
                <div class="row justify-content-center">
                    <h2 class="text-center">PhD Students</h2>
                </div>
            </div>


            <div class="row mt-5">
                <div class="col-lg-6">
                    <!-- Left Part -->
                    <div class="row mt-2">
                        <div class="col-12">
                            <ul class="list-group list-group-flush text-dark btn-container">
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <div class="d-flex align-items-center">
                                        <h3 class="pl-3">Single Endowment for PhD Students</h3>
                                    </div>
                                </li>
                                <div class="card card-body mt-3">
                                    <h4 class="text-dark">Detailed Breakdown for PhD:</h4>
                                    <ul class="list-group list-group-flush text-dark">
                                        <li class="list-group-item">
                                            <input type="checkbox" id="phdTuitionLeft" name="phdTuitionLeft" value="5000000">
                                            <label for="phdTuitionLeft">Tuition: 50,00,000 PKR</label>
                                        </li>
                                        <div class="total-amount">
                                            Total Amount: <span id="phdTotalAmountLeft">0</span> PKR
                                        </div>
                                        <li class="btn-container d-flex justify-content-center gap-2">
                                            <a href="{{url('Make_a_Pledge')}}" class="btn btn-success">Make a Pledge</a>
                                            <a href="{{url('payment')}}" class="btn btn-primary">Pay Now</a>
                                        </li>
                                    </ul>
                                </div>
                            </ul>
                        </div>
                    </div>
                    <!-- End of Left Part -->
                </div>
                <div class="col-lg-6">
                    <!-- Right Part -->
                    <div class="row mt-2">
                        <div class="col-12">
                            <ul class="list-group list-group-flush text-dark btn-container">
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <div class="d-flex align-items-center">
                                        <h3 class="pl-3">Circular Endowment for PhD Students</h3>
                                    </div>
                                </li>
                                <div class="card card-body mt-3">
                                    <h4 class="text-dark">Detailed Breakdown for PhD:</h4>
                                    <ul class="list-group list-group-flush text-dark">
                                        <li class="list-group-item">
                                            <input type="checkbox" id="phdTuitionRight" name="phdTuitionRight" value="12000000">
                                            <label for="phdTuitionRight">Tuition: 120,00,000 Million PKR</label>
                                        </li>
                                        <div class="total-amount">
                                            Total Amount (UG): <span id="phdTotalAmountRight">0</span> PKR
                                        </div>
                                        <li class="btn-container d-flex justify-content-center gap-2">
                                            <a href="{{url('Make_a_Pledge')}}" class="btn btn-success">Make a Pledge</a>
                                            <a href="{{url('payment')}}" class="btn btn-primary">Pay Now</a>
                                        </li>
                                    </ul>
                                </div>
                            </ul>
                        </div>
                    </div>
                    <!-- End of Right Part -->
                </div>
            </div>


        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-info shadow-sm">
                    <p>
                        An additional contribution of 2 million PKR is available to donors who wish to sponsor the hostel and messing expenses too, which can be combined with any of the aforementioned scholarship proposals.
                    </p>
                </div>
            </div>
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
        // Calculate total amount for left part
        $('input[name="ugTuitionLeft"]').change(function() {
            var ugTotalLeft = 0;
            $('input[name="ugTuitionLeft"]:checked').each(function() {
                ugTotalLeft += parseInt($(this).val());
            });
            $('#ugTotalAmountLeft').text(ugTotalLeft);
        });

        // Calculate total amount for right part
        $('input[name="ugTuitionRight"]').change(function() {
            var ugTotalRight = 0;
            $('input[name="ugTuitionRight"]:checked').each(function() {
                ugTotalRight += parseInt($(this).val());
            });
            $('#ugTotalAmountRight').text(ugTotalRight);
        });
    });



    $(document).ready(function() {
        // Calculation for Single Endowment (PG)
        $('input[name="pgTuitionLeft"]').change(function() {
            var pgTotalLeft = 0;
            $('input[name="pgTuitionLeft"]:checked').each(function() {
                pgTotalLeft += parseInt($(this).val());
            });
            $('#pgTotalAmountLeft').text(pgTotalLeft);
        });

        // Calculation for Circular Endowment (PG)
        $('input[name="pgTuitionRight"]').change(function() {
            var pgTotalRight = 0;
            $('input[name="pgTuitionRight"]:checked').each(function() {
                pgTotalRight += parseInt($(this).val());
            });
            $('#pgTotalAmountRight').text(pgTotalRight);
        });
    });


    $(document).ready(function() {
        // Calculation for Single Endowment (PhD)
        $('input[name="phdTuitionLeft"]').change(function() {
            var phdTotalLeft = 0;
            $('input[name="phdTuitionLeft"]:checked').each(function() {
                phdTotalLeft += parseInt($(this).val());
            });
            $('#phdTotalAmountLeft').text(phdTotalLeft);
        });

        // Calculation for Circular Endowment (PhD)
        $('input[name="phdTuitionRight"]').change(function() {
            var phdTotalRight = 0;
            $('input[name="phdTuitionRight"]:checked').each(function() {
                phdTotalRight += parseInt($(this).val());
            });
            $('#phdTotalAmountRight').text(phdTotalRight);
        });
    });

</script>

</body>
</html>
