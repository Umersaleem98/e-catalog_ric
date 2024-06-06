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
        input.form-control {
            color: black;
        }

        /* Style for placeholder text color */
        input.form-control::placeholder {
            color: black;
            opacity: 1; /* Override default opacity */
        }

        select.form-control {
        color: black;
    }

    /* Style for select option text color */
    select.form-control option {
        color: black;
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
                                            <label for="ugTuitionLeft">Tuition:</label>
                                            <select id="ugTuitionLeft" name="ugTuitionLeft" class="form-control">
                                                <option value="4000000">40,00,000 PKR</option>
                                            </select>
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
                                            <label for="ugTuitionRight">Tuition:</label>
                                            <select id="ugTuitionRight" name="ugTuitionRight" class="form-control">
                                                <option value="5000000">50,00,000 (5) Million PKR</option>
                                            </select>
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
                                            <label for="pgTuitionLeft">Tuition:</label>
                                            <select id="pgTuitionLeft" name="pgTuitionLeft" class="form-control">
                                                <option value="3000000">30,00,000 PKR</option>
                                            </select>
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
                                            <label for="pgTuitionRight">Tuition:</label>
                                            <select id="pgTuitionRight" name="pgTuitionRight" class="form-control">
                                                <option value="6000000">60,00,000 PKR</option>
                                            </select>
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
                                            <label for="phdTuitionLeft">Tuition:</label>
                                            <select id="phdTuitionLeft" name="phdTuitionLeft" class="form-control">
                                                <option value="5000000">50,00,000 PKR</option>
                                            </select>
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
                                            <label for="phdTuitionRight">Tuition:</label>
                                            <select id="phdTuitionRight" name="phdTuitionRight" class="form-control">
                                                <option value="12000000">120,00,000 PKR</option>
                                            </select>
                                        </li>
                                        <div class="total-amount">
                                            Total Amount: <span id="phdTotalAmountRight">0</span> PKR
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
    document.addEventListener("DOMContentLoaded", function() {
    const ugTuitionLeftSelect = document.getElementById('ugTuitionLeft');
    const ugTotalAmountLeftSpan = document.getElementById('ugTotalAmountLeft');
    const ugTuitionRightSelect = document.getElementById('ugTuitionRight');
    const ugTotalAmountRightSpan = document.getElementById('ugTotalAmountRight');

    // Function to update the total amount for Single Endowment UG
    function updateUGTotalAmountLeft() {
        const selectedValue = parseInt(ugTuitionLeftSelect.value);
        ugTotalAmountLeftSpan.textContent = selectedValue.toLocaleString('en-US') + " PKR";
    }

    // Function to update the total amount for Circular Endowment UG
    function updateUGTotalAmountRight() {
        const selectedValue = parseInt(ugTuitionRightSelect.value);
        ugTotalAmountRightSpan.textContent = selectedValue.toLocaleString('en-US') + " PKR";
    }

    // Add event listeners to the select elements
    ugTuitionLeftSelect.addEventListener('change', updateUGTotalAmountLeft);
    ugTuitionRightSelect.addEventListener('change', updateUGTotalAmountRight);

    // Initialize total amounts on page load
    updateUGTotalAmountLeft();
    updateUGTotalAmountRight();
});

</script>
{{-- // post grauate --}}
<script>
document.addEventListener("DOMContentLoaded", function() {
    const ugTuitionLeftSelect = document.getElementById('ugTuitionLeft');
    const ugTotalAmountLeftSpan = document.getElementById('ugTotalAmountLeft');
    const ugTuitionRightSelect = document.getElementById('ugTuitionRight');
    const ugTotalAmountRightSpan = document.getElementById('ugTotalAmountRight');

    const pgTuitionLeftSelect = document.getElementById('pgTuitionLeft');
    const pgTotalAmountLeftSpan = document.getElementById('pgTotalAmountLeft');
    const pgTuitionRightSelect = document.getElementById('pgTuitionRight');
    const pgTotalAmountRightSpan = document.getElementById('pgTotalAmountRight');

    // Function to update the total amount for Single Endowment UG
    function updateUGTotalAmountLeft() {
        const selectedValue = parseInt(ugTuitionLeftSelect.value);
        ugTotalAmountLeftSpan.textContent = selectedValue.toLocaleString('en-US') + " PKR";
    }

    // Function to update the total amount for Circular Endowment UG
    function updateUGTotalAmountRight() {
        const selectedValue = parseInt(ugTuitionRightSelect.value);
        ugTotalAmountRightSpan.textContent = selectedValue.toLocaleString('en-US') + " PKR";
    }

    // Function to update the total amount for Single Endowment PG
    function updatePGTotalAmountLeft() {
        const selectedValue = parseInt(pgTuitionLeftSelect.value);
        pgTotalAmountLeftSpan.textContent = selectedValue.toLocaleString('en-US') + " PKR";
    }

    // Function to update the total amount for Circular Endowment PG
    function updatePGTotalAmountRight() {
        const selectedValue = parseInt(pgTuitionRightSelect.value);
        pgTotalAmountRightSpan.textContent = selectedValue.toLocaleString('en-US') + " PKR";
    }

    // Add event listeners to the select elements
    ugTuitionLeftSelect.addEventListener('change', updateUGTotalAmountLeft);
    ugTuitionRightSelect.addEventListener('change', updateUGTotalAmountRight);
    pgTuitionLeftSelect.addEventListener('change', updatePGTotalAmountLeft);
    pgTuitionRightSelect.addEventListener('change', updatePGTotalAmountRight);

    // Initialize total amounts on page load
    updateUGTotalAmountLeft();
    updateUGTotalAmountRight();
    updatePGTotalAmountLeft();
    updatePGTotalAmountRight();
});

</script>
{{-- phd students  --}}

<script>
   document.addEventListener("DOMContentLoaded", function() {
    const phdTuitionLeftSelect = document.getElementById('phdTuitionLeft');
    const phdTotalAmountLeftSpan = document.getElementById('phdTotalAmountLeft');
    const phdTuitionRightSelect = document.getElementById('phdTuitionRight');
    const phdTotalAmountRightSpan = document.getElementById('phdTotalAmountRight');

    // Function to update the total amount for Single Endowment PhD
    function updatePhdTotalAmountLeft() {
        const selectedValue = parseInt(phdTuitionLeftSelect.value);
        phdTotalAmountLeftSpan.textContent = selectedValue.toLocaleString('en-US') + " PKR";
    }

    // Function to update the total amount for Circular Endowment PhD
    function updatePhdTotalAmountRight() {
        const selectedValue = parseInt(phdTuitionRightSelect.value);
        phdTotalAmountRightSpan.textContent = selectedValue.toLocaleString('en-US') + " PKR";
    }

    // Add event listeners to the select elements
    phdTuitionLeftSelect.addEventListener('change', updatePhdTotalAmountLeft);
    phdTuitionRightSelect.addEventListener('change', updatePhdTotalAmountRight);

    // Initialize total amounts on page load
    updatePhdTotalAmountLeft();
    updatePhdTotalAmountRight();
});

</script>
</body>
</html>
