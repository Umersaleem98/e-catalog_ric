<!DOCTYPE html>
<html lang="en">
<head>
    <title>Four Year</title>
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
                @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
                <div class="col">
                    <div class="section_title text-center">
                        <h1 class="text-dark">Adopt a Scholar</h1>
                    </div>
                </div>
            </div>

            <!-- Center Tabs Navigation -->
            <div class="d-flex justify-content-center">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="undergraduate-tab" data-bs-toggle="tab" data-bs-target="#undergraduate" type="button" role="tab" aria-controls="undergraduate" aria-selected="true" style="background-color: #004476 ; color:white" >Undergraduate</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="postgraduate-tab" data-bs-toggle="tab" data-bs-target="#postgraduate" type="button" role="tab" aria-controls="postgraduate" aria-selected="false" style="background-color: #004476; color:white">Postgraduate</button>
                    </li>
                </ul>
            </div>

            <!-- Tabs Content -->
            <div class="tab-content" id="myTabContent">
                <!-- Undergraduate Tab -->
                <div class="tab-pane fade show active" id="undergraduate" role="tabpanel" aria-labelledby="undergraduate-tab">
                    <div class="row mt-5">
                        <div class="col-12">
                            <!-- Add your undergraduate content here -->
                            <!-- Example form structure -->


                            <form action="{{url('endowmentsupportentireyear')}}" method="post">
                                @csrf
                                <h3 class="text-dark text-center mb-4">Detailed Breakdown for UG:</h3>
                                <div class="form-check">
                                    <label class="form-check-label" for="make_a_pledge">Make a Pledge</label>
                                    <input class="form-check-input ml-3" name="payments_status" type="radio" id="ug_make_a_pledge" value="make_a_pledge">
                                    <label class="form-check-label ml-4" for="paynow">Paynow</label>
                                    <input class="form-check-input ml-3" name="payments_status" type="radio" id="ug_paynow" value="Paynow">
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="text" name="program" id="" value="UG" hidden>
                                        <div class="form-group">
                                            <label for="ugDegree">Select Degree:</label>
                                            <select id="ugDegree" name="degree" class="form-control">
                                                <option value="">Select Degree</option>
                                                @foreach ($undergraduate as $degree)
                                                    <option value="{{ $degree->fee }}" data-degree-name="{{ $degree->degree }}">{{ $degree->degree }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="ugQuantity">No of seats:</label>
                                            <input type="number" id="ugQuantity" name="seats" class="form-control" value="1" min="1">
                                        </div>
                                    </div>
                                    <div class="form-group ml-3">
                                        <input type="checkbox" id="ugAdditionalExpenses" value="275000">
                                        <label for="ugAdditionalExpenses">Include mess and hostel expenses (275,000 PKR)</label>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-6 additional-field" id="ugAdditionalFieldContainer" style="display: none;">
                                        <div class="form-group">
                                            <label for="ugSelectedDegree">Selected Degree:</label>
                                            <input type="text" id="ugSelectedDegree" name="degree_name" class="form-control" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="ugTotalAmount">Total Amount (UG):</label>
                                        <input type="text" id="ugTotalAmount" name="totalAmount" class="form-control" readonly>
                                    </div>
                                </div>
                                <div id="donorInfo">
                                    <h4 class="text-dark mt-4">Donor Information:</h4>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="donor_name">Name:</label>
                                            <input type="text" id="donor_name" name="donor_name" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="donor_email">Email:</label>
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
                            <form action="{{url('endowmentsupportentireyear')}}" method="post">
                                @csrf
                                <h3 class="text-dark text-center mb-4">Detailed Breakdown for PG:</h3>
                                <div class="form-check">
                                    <label class="form-check-label" for="make_a_pledge">Make a Pledge</label>
                                    <input class="form-check-input ml-3" name="payments_status" type="radio" id="pg_make_a_pledge" value="make_a_pledge">
                                    <label class="form-check-label ml-4" for="paynow">Paynow</label>
                                    <input class="form-check-input ml-3" name="payments_status" type="radio" id="pg_paynow" value="Paynow">
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="text" name="program" id="" value="PG" hidden>
                                        <div class="form-group">
                                            <label for="pgDegree">Select Degree:</label>
                                            <select id="pgDegree" name="degree" class="form-control">
                                                <option value="">Select Degree</option>
                                                @foreach ($postgraduate as $degree)
                                                    <option value="{{ $degree->fee }}" data-degree-name="{{ $degree->degree }}">{{ $degree->degree }}</option>
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
                                <div id="donorInfo">
                                    <h4 class="text-dark mt-4">Donor Information:</h4>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="donor_name">Name:</label>
                                            <input type="text" id="donor_name" name="donor_name" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="donor_email">Email:</label>
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
    document.addEventListener('DOMContentLoaded', function() {
        const ugDegreeSelect = document.getElementById('ugDegree');
        const ugAdditionalFieldContainer = document.getElementById('ugAdditionalFieldContainer');
        const ugAdditionalExpensesCheckbox = document.getElementById('ugAdditionalExpenses');
        const ugQuantityInput = document.getElementById('ugQuantity');
        const ugTotalAmountInput = document.getElementById('ugTotalAmount');
        const ugSelectedDegreeInput = document.getElementById('ugSelectedDegree');

        function calculateUgTotal() {
            let ugTotal = (parseFloat(ugDegreeSelect.value) || 0) * parseFloat(ugQuantityInput.value);
            if (ugAdditionalExpensesCheckbox.checked) {
                ugTotal += parseFloat(ugAdditionalExpensesCheckbox.value) * parseFloat(ugQuantityInput.value);
            }
            ugTotalAmountInput.value = ugTotal.toFixed(2) + ' PKR';
        }

        function toggleUgAdditionalField() {
            if (ugDegreeSelect.value) {
                ugAdditionalFieldContainer.style.display = 'block';
                ugSelectedDegreeInput.value = ugDegreeSelect.options[ugDegreeSelect.selectedIndex].dataset.degreeName;
            } else {
                ugAdditionalFieldContainer.style.display = 'none';
                ugSelectedDegreeInput.value = '';
            }
        }

        ugDegreeSelect.addEventListener('change', function() {
            calculateUgTotal();
            toggleUgAdditionalField();
        });
        ugAdditionalExpensesCheckbox.addEventListener('change', calculateUgTotal);
        ugQuantityInput.addEventListener('input', calculateUgTotal);

        // Initialize calculation and field visibility
        calculateUgTotal();
        toggleUgAdditionalField();
    });
</script>


<script>
    document.addEventListener('DOMContentLoaded', function() {
        const pgDegreeSelect = document.getElementById('pgDegree');
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

        function updatePgSelectedDegree() {
            const selectedDegree = pgDegreeSelect.options[pgDegreeSelect.selectedIndex];
            const degreeName = selectedDegree.dataset.degreeName;
            pgSelectedDegreeInput.value = degreeName || '';
        }

        pgDegreeSelect.addEventListener('change', function() {
            calculatePgTotal();
            updatePgSelectedDegree();
        });

        pgAdditionalExpensesCheckbox.addEventListener('change', calculatePgTotal);
        pgQuantityInput.addEventListener('input', calculatePgTotal);

        calculatePgTotal();
        updatePgSelectedDegree();
    });
</script>


</body>
</html>
