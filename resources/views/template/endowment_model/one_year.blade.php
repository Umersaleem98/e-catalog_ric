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
        .total-amount{
            font-size: 20px;
        }
        .form-group {
            display: flex;
            align-items: center;
            margin-bottom: 10px; /* Adjust margin as needed */
        }
        .form-group label {
            margin-right: 10px; /* Adjust margin as needed */
        }
        /* Adjust the input width and margin */
        .form-group input,
        .form-group select {
            flex: 1; /* Take up remaining space */
            margin-right: 10px; /* Adjust margin as needed */
        }
        label{
            color: black;
        }
        .btn{
            background-color: #004476;
            color: white;
        }
        .custom-tab {
            background-color: #004476;
            color: white;
        }
        .custom-tab.active {
            background-color: orange !important;
            color: white !important;
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
                        <h1 class="text-dark">Sponsor One Year Education</h1>
                    </div>
                </div>
            </div>
            @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
            <!-- Center Tabs Navigation -->
            <div class="d-flex justify-content-center">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link custom-tab active" id="undergraduate-tab" data-bs-toggle="tab" data-bs-target="#undergraduate" type="button" role="tab" aria-controls="undergraduate" aria-selected="true" style="background-color: #004476; color:white" >Undergraduate</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link custom-tab" id="postgraduate-tab" data-bs-toggle="tab" data-bs-target="#postgraduate" type="button" role="tab" aria-controls="postgraduate" aria-selected="false" style="background-color: #004476; color:white">Postgraduate</button>
                    </li>
                </ul>
            </div>

            <!-- Tabs Content -->
            <div class="tab-content" id="myTabContent">
                <!-- Undergraduate Tab -->
                <div class="tab-pane fade show active" id="undergraduate" role="tabpanel" aria-labelledby="undergraduate-tab">
                    <div class="row mt-5 ">
                        <div class="col-12">
                            <!-- Add your undergraduate content here -->
                            <!-- Example form structure -->
                            <form action="{{url('endowmentsupportoneyear')}}" method="post" class="">
                                @csrf
                                <h3 class="text-dark text-center mb-4">Detailed Breakdown for UG:</h3>
                                <div class="form-check">
                                    <input class="form-check-input ml-3" name="payments_status" type="radio" id="make_a_pledge" value="make_a_pledge">
                                    <label class="form-check-label ml-3" for="make_a_pledge">Make a Pledge</label>
                                    <input class="form-check-input ml-3" name="payments_status" type="radio" id="paynow" value="Paynow">
                                    <label class="form-check-label ml-4" for="paynow">Pay Now</label>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="text" name="program" id="program" value="UG" hidden>
                                        <div class="form-group">
                                            <label for="degree">Select Degree:</label>
                                            <select id="degree" name="degree" class="form-control">
                                                <option value="">Select Degree</option>
                                                @foreach ($undergraduate as $degree)
                                                    <option value="{{ $degree->fee }}" data-degree-name="{{ $degree->degree }}">{{ $degree->degree }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="no_of_seat">No of seats:</label>
                                            <input type="number" id="no_of_seat" name="seats" class="form-control" value="1" min="1">
                                        </div>
                                    </div>
                                    <div class="form-group ml-3">
                                        <input type="checkbox" id="additionalExpenses" value="275000">
                                        <label for="additionalExpenses">Include mess and hostel expenses (275,000 PKR)</label>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-6 additional-field" id="additionalFieldContainer" style="display: none;">
                                        <div class="form-group">
                                            <label for="selectedDegree">Selected Degree:</label>
                                            <input type="text" id="selectedDegree" name="degree_name" class="form-control" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="totalAmount">Total Amount (UG):</label>
                                        <input type="text" id="totalAmount" name="totalAmount" class="form-control" readonly>
                                    </div>
                                </div>
                                <div id="donorInfo" style="">
                                    <h4 class="text-dark mt-4">Donor Information:</h4>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="donor_name">Name:</label>
                                            <input type="text" id="donor_name" name="donor_name" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="donor_email"> Email:</label>
                                            <input type="email" id="donor_email" name="donor_email" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="phone">Phone:</label>
                                            <input type="text" id="phone" name="phone" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                                <input type="submit" name="submit" class="btn btn-primary">
                            </form>


                        </div>
                    </div>
                </div>
                <!-- Postgraduate Tab -->


                <div class="tab-pane fade" id="postgraduate" role="tabpanel" aria-labelledby="postgraduate-tab">
                    <div class="row mt-5">
                        <div class="col-12">
                            <form action="{{url('endowmentsupportoneyear')}}" method="post">
                                @csrf
                                <h3 class="text-dark text-center mb-4">Detailed Breakdown for PG:</h3>
                                <div class="form-check">
                                    <input class="form-check-input ml-3" name="payments_status" type="radio" id="pg_make_a_pledge" value="make_a_pledge">
                                    <label class="form-check-label ml-3" for="pg_make_a_pledge">Make a Pledge</label>
                                    <input class="form-check-input ml-3" name="payments_status" type="radio" id="pg_paynow" value="Paynow">
                                    <label class="form-check-label ml-4" for="pg_paynow">Pay Now</label>
                                </div>
                                <br>
                                <div class="row">
                                    <input type="text" name="program" value="PG" hidden id="">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="pgDegree">Select Degree:</label>
                                            <select id="pgDegree" name="degree" class="form-control">
                                                <option value="">Select Degree</option>
                                                @foreach ($postgraduate as $pgDegree)
                                                    <option value="{{ $pgDegree->fee }}" data-degree-name="{{ $pgDegree->degree }}">{{ $pgDegree->degree }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="pgQuantity">No of seats:</label>
                                            <input type="number" id="pgQuantity" name="seats" class="form-control" value="1" min="1">
                                        </div>
                                    </div>
                                    <div class="form-group ml-3">
                                        <input type="checkbox" id="pgAdditionalExpenses" value="275000">
                                        <label for="pgAdditionalExpenses">Include mess and hostel expenses (275,000 PKR)</label>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-6 additional-field" id="pgAdditionalFieldContainer" style="display: none;">
                                        <div class="form-group">
                                            <label for="pgSelectedDegree">Selected Degree:</label>
                                            <input type="text" id="pgSelectedDegree" name="degree_name" class="form-control" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="pgTotalAmount">Total Amount (PG):</label>
                                        <input type="text" id="pgTotalAmount" name="totalAmount" class="form-control" readonly>
                                    </div>
                                </div>
                                <div id="donorInfo1">
                                    <h4 class="text-dark mt-4">Donor Information:</h4>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="donor_name">Name:</label>
                                            <input type="text" id="donor_name" name="donor_name" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="donor_email">Email:</label>
                                            <input type="email" id="donor_email" name="donor_email" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="phone">Phone:</label>
                                            <input type="text" id="phone" name="phone" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <input type="submit" name="submit" class="btn btn-primary">
                            </form>
                        </div>
                    </div>
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

{{-- <script>
    document.addEventListener('DOMContentLoaded', function() {
        const programSelect = document.getElementById('program');
        const additionalExpensesCheckbox = document.getElementById('additionalExpenses');
        const quantityInput = document.getElementById('no_of_seat');
        const totalAmountInput = document.getElementById('totalAmount');

        function calculateTotal() {
            let total = (parseFloat(programSelect.value) || 0) * parseFloat(quantityInput.value);
            if (additionalExpensesCheckbox.checked) {
                total += parseFloat(additionalExpensesCheckbox.value) * parseFloat(quantityInput.value);
            }
            totalAmountInput.value = total.toFixed(2) + ' PKR';
        }

        programSelect.addEventListener('change', calculateTotal);
        additionalExpensesCheckbox.addEventListener('change', calculateTotal);
        quantityInput.addEventListener('input', calculateTotal);

        calculateTotal();
    });
</script> --}}

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const degreeSelect = document.getElementById('degree');
        const additionalFieldContainer = document.getElementById('additionalFieldContainer');
        const additionalExpensesCheckbox = document.getElementById('additionalExpenses');
        const quantityInput = document.getElementById('no_of_seat');
        const totalAmountInput = document.getElementById('totalAmount');
        const selectedDegreeInput = document.getElementById('selectedDegree');

        function calculateTotal() {
            let total = (parseFloat(degreeSelect.value) || 0) * parseFloat(quantityInput.value);
            if (additionalExpensesCheckbox.checked) {
                total += parseFloat(additionalExpensesCheckbox.value) * parseFloat(quantityInput.value);
            }
            totalAmountInput.value = total.toFixed(2) + ' PKR';
        }

        function toggleAdditionalField() {
            if (degreeSelect.value) {
                additionalFieldContainer.style.display = 'block';
                selectedDegreeInput.value = degreeSelect.options[degreeSelect.selectedIndex].dataset.degreeName;
            } else {
                additionalFieldContainer.style.display = 'none';
                selectedDegreeInput.value = '';
            }
        }

        degreeSelect.addEventListener('change', function() {
            calculateTotal();
            toggleAdditionalField();
        });
        additionalExpensesCheckbox.addEventListener('change', calculateTotal);
        quantityInput.addEventListener('input', calculateTotal);

        // Initialize calculation and field visibility
        calculateTotal();
        toggleAdditionalField();
    });
</script>
{{--
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const pgDegreeSelect = document.getElementById('pgDegree');
        const pgAdditionalExpensesCheckbox = document.getElementById('pgAdditionalExpenses');
        const pgQuantityInput = document.getElementById('pgQuantity');
        const pgTotalAmountInput = document.getElementById('pgTotalAmount');

        function calculatePgTotal() {
            let pgTotal = (parseInt(pgDegreeSelect.value) || 0) * parseInt(pgQuantityInput.value);
            if (pgAdditionalExpensesCheckbox.checked) {
                pgTotal += parseInt(pgAdditionalExpensesCheckbox.value) * parseInt(pgQuantityInput.value);
            }
            pgTotalAmountInput.value = pgTotal + ' PKR';
        }

        pgDegreeSelect.addEventListener('change', calculatePgTotal);
        pgAdditionalExpensesCheckbox.addEventListener('change', calculatePgTotal);
        pgQuantityInput.addEventListener('input', calculatePgTotal);

        calculatePgTotal();
    });


</script> --}}
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const pgDegreeSelect = document.getElementById('pgDegree');
        const pgAdditionalFieldContainer = document.getElementById('pgAdditionalFieldContainer');
        const pgAdditionalExpensesCheckbox = document.getElementById('pgAdditionalExpenses');
        const pgQuantityInput = document.getElementById('pgQuantity');
        const pgTotalAmountInput = document.getElementById('pgTotalAmount');
        const pgSelectedDegreeInput = document.getElementById('pgSelectedDegree');

        function calculatePgTotal() {
            let pgTotal = (parseFloat(pgDegreeSelect.value) || 0) * parseFloat(pgQuantityInput.value);
            if (pgAdditionalExpensesCheckbox.checked) {
                pgTotal += parseFloat(pgAdditionalExpensesCheckbox.value) * parseFloat(pgQuantityInput.value);
            }
            pgTotalAmountInput.value = pgTotal.toFixed(2) + ' PKR';
        }

        function togglePgAdditionalField() {
            if (pgDegreeSelect.value) {
                pgAdditionalFieldContainer.style.display = 'block';
                pgSelectedDegreeInput.value = pgDegreeSelect.options[pgDegreeSelect.selectedIndex].dataset.degreeName;
            } else {
                pgAdditionalFieldContainer.style.display = 'none';
                pgSelectedDegreeInput.value = '';
            }
        }

        pgDegreeSelect.addEventListener('change', function() {
            calculatePgTotal();
            togglePgAdditionalField();
        });
        pgAdditionalExpensesCheckbox.addEventListener('change', calculatePgTotal);
        pgQuantityInput.addEventListener('input', calculatePgTotal);

        // Initialize calculation and field visibility
        calculatePgTotal();
        togglePgAdditionalField();
    });
</script>

</body>
</html>
