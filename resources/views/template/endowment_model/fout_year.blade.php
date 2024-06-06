<!DOCTYPE html>
<html lang="en">
<head>
    <title>4 Year</title>
    @include('template.head')
    <style>
        /* Your CSS styles here */
        .btn-container {
            display: flex;
            justify-content: center;
            gap: 10px; /* Adjust the gap as needed */
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
                        <h1 class="text-dark">Support the Entire degree program</h1>
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
                                <h3>Undergraduate Students (UG)</h3>
                            </div>
                        </li>
                        <div class="card card-body mt-3">
                            <h4 class="text-dark">Detailed Breakdown for UG:</h4>
                            <ul class="list-group list-group-flush text-dark">
                                <li class="list-group-item">
                                    <label for="ugTuition">Tuition:</label>
                                    <select id="ugTuition" class="form-control" name="ugTuition">
                                        <option value="1500000">15,00,000 PKR</option>
                                    </select>
                                </li>
                                <div class="total-amount">
                                    Total Amount (UG): <span id="ugTotalAmount">0</span> PKR
                                </div>
                                <!-- Use a "plus" icon for adding a card -->
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
                    <ul class="list-group list-group-flush text-dark btn-container">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <div class="d-flex align-items-center">
                                <img src="{{ asset('templates/endowment_model/images2.jpg') }}" alt="" class="heading-image">
                                <h3>Postgraduate Students (PG)</h3>
                            </div>
                        </li>
                        <div class="card card-body mt-3">
                            <h4 class="text-dark">Detailed Breakdown for PG:</h4>
                            <ul class="list-group list-group-flush text-dark">
                                <li class="list-group-item">
                                    <label for="pgTuition">Tuition</label>
                                    <select id="pgTuition" class="form-control" name="pgTuition">
                                        <option value="0" selected disabled>Select Tuition Amount</option>
                                        <option value="210000">Engineering /IT, Bio Sciences, programs
                                        </option>
                                        <option value="700800">MS HRM, MS Logistics & Supply Chain Management, MS Innovation & Entrepreneurship
                                        </option>
                                        <option value="793800">Business Studies (MBA)
                                        </option>
                                        <option value="100570">Business Studies (EMBA)
                                        </option>
                                        <option value="73800 ">Engineering Management & Construction Engineering Management
                                        </option>
                                        <option value="488800">Architecture & Social sciences
                                        </option>

                                    </select>
                                </li>
                                <div class="total-amount">
                                    Total Amount (PG): <span id="pgTotalAmount">0</span> PKR
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

            <!-- End of Postgraduate Students Section -->
            <div class="row mt-2">
                <div class="col-12">
                    <ul class="list-group list-group-flush text-dark btn-container">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <div class="d-flex align-items-center">
                                <img src="{{ asset('templates/endowment_model/images2.jpg') }}" alt="" class="heading-image">
                                <h3>PhD Students</h3>
                            </div>
                        </li>
                        <div class="card card-body mt-3">
                            <h4 class="text-dark">Detailed Breakdown for PhD:</h4>
                            <ul class="list-group list-group-flush text-dark">
                                <li class="list-group-item">
                                    <label for="phdTuition">Tuition:</label>
                                    <select id="phdTuition" name="phdTuition" class="form-control">
                                        <option value="250000">250,000 PKR</option>
                                    </select>
                                </li>
                                <div class="total-amount">
                                    Total Amount (PhD): <span id="phdTotalAmount">0</span> PKR
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
    const ugTuitionSelect = document.getElementById('ugTuition');
    const ugTotalAmountSpan = document.getElementById('ugTotalAmount');

    // Function to update the total amount
    function updateTotalAmount() {
        const selectedValue = parseInt(ugTuitionSelect.value);
        ugTotalAmountSpan.textContent = selectedValue.toLocaleString('en-US');
    }

    // Add event listener to the select element
    ugTuitionSelect.addEventListener('change', updateTotalAmount);

    // Initialize total amount on page load
    updateTotalAmount();
});

</script>


<script>
    $(document).ready(function() {
        function calculateTotalPG() {
            var pgTotal = 0;
            var tuition = parseInt($('#pgTuition').val());
            var accommodation = parseInt($('#pgAccommodation').val());
            if (!isNaN(tuition)) {
                pgTotal += tuition;
            }
            if (!isNaN(accommodation)) {
                pgTotal += accommodation;
            }
            $('#pgTotalAmount').text(pgTotal);
        }

        $('#pgTuition, #pgAccommodation').change(function() {
            calculateTotalPG();
        });
    });
</script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
    const ugTuitionSelect = document.getElementById('ugTuition');
    const ugTotalAmountSpan = document.getElementById('ugTotalAmount');
    const phdTuitionSelect = document.getElementById('phdTuition');
    const phdTotalAmountSpan = document.getElementById('phdTotalAmount');

    // Function to update the total amount for UG
    function updateUGTotalAmount() {
        const selectedValue = parseInt(ugTuitionSelect.value);
        ugTotalAmountSpan.textContent = selectedValue.toLocaleString('en-US') + " PKR";
    }

    // Function to update the total amount for PhD
    function updatePhdTotalAmount() {
        const selectedValue = parseInt(phdTuitionSelect.value);
        phdTotalAmountSpan.textContent = selectedValue.toLocaleString('en-US') + " PKR";
    }

    // Add event listeners to the select elements
    ugTuitionSelect.addEventListener('change', updateUGTotalAmount);
    phdTuitionSelect.addEventListener('change', updatePhdTotalAmount);

    // Initialize total amounts on page load
    updateUGTotalAmount();
    updatePhdTotalAmount();
});

</script>

</body>
</html>
