<!DOCTYPE html>
<html lang="en">
<head>
    <title>Perpetual Seat</title>
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
        .total-amount {
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
        label {
            color: black;
        }
        .btn {
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
                <div class="col">
                    <div class="section_title text-center">
                        <h1 class="text-dark">Endowment: Gift a Perpetual Impact</h1>
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
                        <button class="nav-link active" id="single-endowment-ug-tab" data-bs-toggle="tab" data-bs-target="#single-endowment-ug" type="button" role="tab" aria-controls="single-endowment-ug" aria-selected="true" style="background-color: #004476; color:white">Single Endowment (UG)</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="circular-endowment-ug-tab" data-bs-toggle="tab" data-bs-target="#circular-endowment-ug" type="button" role="tab" aria-controls="circular-endowment-ug" aria-selected="false" style="background-color: #004476; color:white">Circular Endowment (UG)</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="single-endowment-pg-tab" data-bs-toggle="tab" data-bs-target="#single-endowment-pg" type="button" role="tab" aria-controls="single-endowment-pg" aria-selected="false" style="background-color: #004476; color:white">Single Endowment (PG)</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="circular-endowment-pg-tab" data-bs-toggle="tab" data-bs-target="#circular-endowment-pg" type="button" role="tab" aria-controls="circular-endowment-pg" aria-selected="false" style="background-color: #004476; color:white">Circular Endowment (PG)</button>
                    </li>

                </ul>
            </div>

            <!-- Tabs Content -->
            <div class="tab-content" id="myTabContent">
                <!-- Single Endowment UG Tab Content -->
                <div class="tab-pane fade show active" id="single-endowment-ug" role="tabpanel" aria-labelledby="single-endowment-ug-tab">
                    <h3 class="text-center text-dark mt-4">Single Endowment (UG)</h3>
                    <div class="col-md-12 mt-5">
                        <form action="{{url('perpetualseatyourname')}}" method="post">
                            @csrf
                            {{-- <h3 class="text-dark text-center mb-4">Single Endowment for UG:</h3> --}}
                            <div class="col-12 mt-3">
                                <div class="form-check">
                                    <input class="form-check-input" name="payments_status" type="radio" id="make_a_pledge" value="Make a Pledge">
                                    <label class="form-check-label" for="make_a_pledge">Make a Pledge</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" name="payments_status" type="radio" id="paynow" value="Paynow">
                                    <label class="form-check-label" for="paynow">Pay now</label>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" name="program" value="UG" hidden>
                                    <input type="text" name="endowment_type" value="Single_endowment" hidden>
                                    <div class="form-group">
                                        <label for="degree">Select Options:</label>
                                        <select id="degree" name="degree" class="form-control form-control-sm">
                                            <option value="">Select Degree</option>
                                            @foreach ($undergraduate as $degree)
                                                <option value="{{ $degree->fee }}" data-degree-name="{{ $degree->degree }}">{{ $degree->degree }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <input type="hidden" id="degree_name" name="degree_name">
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="no_of_seat">No of seats:</label>
                                        <input type="number" id="no_of_seat" name="seats" class="form-control form-control-sm" value="1" min="1">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-check mb-3">
                                        <input type="checkbox" id="additionalExpenses" value="275000" class="form-check-input">
                                        <label for="additionalExpenses" class="form-check-label">Include mess and hostel expenses (275,000 PKR)</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="totalAmount">Total Amount (UG):</label>
                                        <input type="text" id="totalAmount" name="totalAmount" class="form-control form-control-sm" readonly>
                                    </div>
                                </div>
                                <div id="donorInfo" class="col-12">
                                    <h4 class="text-dark mt-3">Donor Information:</h4>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="donor_name">Name:</label>
                                                <input type="text" id="donor_name" name="donor_name" class="form-control form-control-sm" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="donor_email">Email:</label>
                                                <input type="email" id="donor_email" name="donor_email" class="form-control form-control-sm" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="phone">Phone:</label>
                                                <input type="text" id="phone" name="phone" class="form-control form-control-sm" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <input type="submit" name="submit" class="btn btn-primary mt-3">
                        </form>

                    </div>
                </div>

                <!-- Circular Endowment UG Tab Content -->
                <div class="tab-pane fade" id="circular-endowment-ug" role="tabpanel" aria-labelledby="circular-endowment-ug-tab">
                    <h3 class="text-center text-dark mt-4">Circular Endowment (UG)</h3>
                    <div class="col-md-12 mt-5">
                        <form action="{{url('perpetualseatyourname')}}" method="post">
                            @csrf
                            {{-- <h3 class="text-dark text-center mb-4">Circular Endowment for UG:</h3> --}}
                            <div class="col-12 mt-3">
                                <div class="form-check">
                                    <input class="form-check-input" name="payments_status" type="radio" id="circular_ugMakeAPledge" value="Make a Pledge">
                                    <label class="form-check-label" for="circular_ugMakeAPledge">Make a Pledge</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" name="payments_status" type="radio" id="circular_ugPayNow" value="Paynow">
                                    <label class="form-check-label" for="circular_ugPayNow">Pay now</label>
                                </div>
                            </div>
                            <br>

                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" name="program" value="UG" hidden>
                                    <input type="text" name="endowment_type" value="Circular_endowment" hidden>
                                    <div class="form-group">
                                        <label for="circular_ugDegree">Select Options:</label>
                                        <select id="circular_ugDegree" name="degree" class="form-control form-control-sm">
                                            <option value="">Select Degree</option>
                                            @foreach ($undergraduate as $degree)
                                                <option value="{{ $degree->fee }}" data-degree-name="{{ $degree->degree }}">{{ $degree->degree }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <input type="hidden" id="circular_ugDegreeName" name="degree_name">
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="circular_ugNoOfSeat">No of seats:</label>
                                        <input type="number" id="circular_ugNoOfSeat" name="seats" class="form-control form-control-sm" value="1" min="1">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-check mb-3">
                                        <input type="checkbox" id="circular_ugAdditionalExpenses" value="275000" class="form-check-input">
                                        <label for="circular_ugAdditionalExpenses" class="form-check-label">Include mess and hostel expenses (275,000 PKR)</label>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="circular_ugTotalAmount">Total Amount (UG):</label>
                                        <input type="text" id="circular_ugTotalAmount" name="totalAmount" class="form-control form-control-sm" readonly>
                                    </div>
                                </div>
                                <div id="circular_ugDonorInfo" class="col-12">
                                    <h4 class="text-dark mt-3">Donor Information:</h4>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="circular_ugDonorName">Name:</label>
                                                <input type="text" id="circular_ugDonorName" name="donor_name" class="form-control form-control-sm" required>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="circular_ugDonorEmail">Email:</label>
                                                <input type="email" id="circular_ugDonorEmail" name="donor_email" class="form-control form-control-sm" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="circular_ugPhone">Phone:</label>
                                                <input type="text" id="circular_ugPhone" name="phone" class="form-control form-control-sm" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <input type="submit" name="submit" class="btn btn-primary mt-3">
                        </form>

                    </div>
                    <!-- Add more content as needed -->
                </div>

                <!-- Single Endowment PG Tab Content -->
                <div class="tab-pane fade" id="single-endowment-pg" role="tabpanel" aria-labelledby="single-endowment-pg-tab">
                    <h3 class="text-center text-dark mt-4">Single Endowment (PG)</h3>
                    <div class="col-md-12 mt-5">

                        <form action="{{url('perpetualseatyourname')}}" method="post">
                            @csrf
                            {{-- <h3 class="text-dark text-center mb-4">Single Endowment for PG:</h3> --}}
                            <div class="col-12 mt-3">
                                <div class="form-check">
                                    <input class="form-check-input" name="payments_status" type="radio" id="single_pgMakeAPledge" value="Make a Pledge">
                                    <label class="form-check-label" for="single_pgMakeAPledge">Make a Pledge</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" name="payments_status" type="radio" id="single_pgPayNow" value="Paynow">
                                    <label class="form-check-label" for="single_pgPayNow">Pay now</label>
                                </div>
                            </div>
                            <br>

                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" name="program" value="PG" hidden>
                                    <input type="text" name="endowment_type" value="Single_endowment" hidden>
                                    <div class="form-group">
                                        <label for="single_pgDegree">Select Options:</label>
                                        <select id="single_pgDegree" name="degree" class="form-control form-control-sm">
                                            <option value="">Select Degree</option>
                                            @foreach ($postgraduate as $pgDegree)
                                                <option value="{{ $pgDegree->fee }}" data-degree-name="{{ $pgDegree->degree }}">{{ $pgDegree->degree }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <input type="hidden" id="single_pgDegreeName" name="degree_name">
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="single_pgNoOfSeat">No of seats:</label>
                                        <input type="number" id="single_pgNoOfSeat" name="seats" class="form-control form-control-sm" value="1" min="1">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-check mb-3">
                                        <input type="checkbox" id="single_pgAdditionalExpenses" value="275000" class="form-check-input">
                                        <label for="single_pgAdditionalExpenses" class="form-check-label">Include mess and hostel expenses (275,000 PKR)</label>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="single_pgTotalAmount">Total Amount (PG):</label>
                                        <input type="text" id="single_pgTotalAmount" name="totalAmount" class="form-control form-control-sm" readonly>
                                    </div>
                                </div>
                                <div id="single_pgDonorInfo" class="col-12">
                                    <h4 class="text-dark mt-3">Donor Information:</h4>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="single_pgDonorName">Name:</label>
                                                <input type="text" id="single_pgDonorName" name="donor_name" class="form-control form-control-sm" required>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="single_pgDonorEmail">Email:</label>
                                                <input type="email" id="single_pgDonorEmail" name="donor_email" class="form-control form-control-sm" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="single_pgPhone">Phone:</label>
                                                <input type="text" id="single_pgPhone" name="phone" class="form-control form-control-sm" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <input type="submit" name="submit" class="btn btn-primary mt-3">
                        </form>
                    </div>
                    <!-- Add more content as needed -->
                </div>

                <!-- Circular Endowment PG Tab Content -->
                <div class="tab-pane fade" id="circular-endowment-pg" role="tabpanel" aria-labelledby="circular-endowment-pg-tab">
                    <h3 class="text-center text-dark mt-4">Circular Endowment (PG)</h3>
                    <div class="col-md-12 mt-5">

                        <form action="{{url('perpetualseatyourname')}}" method="post">
                            @csrf
                            {{-- <h3 class="text-dark text-center mb-4">Circular Endowment for PG:</h3> --}}
                            <div class="col-12 mt-3">
                                <div class="form-check">
                                    <input class="form-check-input" name="payments_status" type="radio" id="circular_pgMakeAPledge" value="Make a Pledge">
                                    <label class="form-check-label" for="circular_pgMakeAPledge">Make a Pledge</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" name="payments_status" type="radio" id="circular_pgPayNow" value="Paynow">
                                    <label class="form-check-label" for="circular_pgPayNow">Pay now</label>
                                </div>
                            </div>
                            <br>

                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" name="program" value="PG" hidden>
                                    <input type="text" name="endowment_type" value="Circular_endowment" hidden>
                                    <div class="form-group">
                                        <label for="circular_pgDegree">Select Options:</label>
                                        <select id="circular_pgDegree" name="degree" class="form-control form-control-sm">
                                            <option value="">Select Degree</option>
                                            @foreach ($postgraduate as $pgDegree)
                                                <option value="{{ $pgDegree->fee }}" data-degree-name="{{ $pgDegree->degree }}">{{ $pgDegree->degree }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <input type="hidden" id="circular_pgDegreeName" name="degree_name">
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="circular_pgNoOfSeat">No of seats:</label>
                                        <input type="number" id="circular_pgNoOfSeat" name="seats" class="form-control form-control-sm" value="1" min="1">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-check mb-3">
                                        <input type="checkbox" id="circular_pgAdditionalExpenses" value="275000" class="form-check-input">
                                        <label for="circular_pgAdditionalExpenses" class="form-check-label">Include mess and hostel expenses (275,000 PKR)</label>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="circular_pgTotalAmount">Total Amount (PG):</label>
                                        <input type="text" id="circular_pgTotalAmount" name="totalAmount" class="form-control form-control-sm" readonly>
                                    </div>
                                </div>
                                <div id="circular_pgDonorInfo" class="col-12">
                                    <h4 class="text-dark mt-3">Donor Information:</h4>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="circular_pgDonorName">Name:</label>
                                                <input type="text" id="circular_pgDonorName" name="donor_name" class="form-control form-control-sm" required>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="circular_pgDonorEmail">Email:</label>
                                                <input type="email" id="circular_pgDonorEmail" name="donor_email" class="form-control form-control-sm" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="circular_pgPhone">Phone:</label>
                                                <input type="text" id="circular_pgPhone" name="phone" class="form-control form-control-sm" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <input type="submit" name="submit" class="btn btn-primary mt-3">
                        </form>


                    </div>
                    <!-- Add more content as needed -->
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
        const degreeSelect = document.getElementById('degree');
        const degreeNameInput = document.getElementById('degree_name');
        const noOfSeatInput = document.getElementById('no_of_seat');
        const totalAmountInput = document.getElementById('totalAmount');

        function calculateTotalAmount() {
            const selectedOption = degreeSelect.options[degreeSelect.selectedIndex];
            const degreeFee = parseFloat(selectedOption.value) || 0;
            const noOfSeats = parseInt(noOfSeatInput.value) || 1;
            const additionalExpenses = document.getElementById('additionalExpenses').checked ? 275000 : 0;
            const totalAmount = (degreeFee * noOfSeats) + additionalExpenses;
            totalAmountInput.value = totalAmount.toFixed(2) + ' PKR';
        }

        degreeSelect.addEventListener('change', function() {
            const selectedOption = degreeSelect.options[degreeSelect.selectedIndex];
            const degreeName = selectedOption.dataset.degreeName || '';
            degreeNameInput.value = degreeName;
            calculateTotalAmount();
        });

        noOfSeatInput.addEventListener('input', calculateTotalAmount);
        document.getElementById('additionalExpenses').addEventListener('change', calculateTotalAmount);

        calculateTotalAmount(); // Calculate total amount on initial load
    });
</script>

{{-- Circular endowment UG --}}

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const degreeSelect = document.getElementById('circular_ugDegree');
        const degreeNameInput = document.getElementById('circular_ugDegreeName');
        const noOfSeatInput = document.getElementById('circular_ugNoOfSeat');
        const totalAmountInput = document.getElementById('circular_ugTotalAmount');

        function calculateTotalAmount() {
            const selectedOption = degreeSelect.options[degreeSelect.selectedIndex];
            const degreeFee = parseFloat(selectedOption.value) || 0;
            const noOfSeats = parseInt(noOfSeatInput.value) || 1;
            const additionalExpenses = document.getElementById('circular_ugAdditionalExpenses').checked ? 275000 : 0;
            const totalAmount = (degreeFee * noOfSeats) + additionalExpenses;
            totalAmountInput.value = totalAmount.toFixed(2) + ' PKR';
        }

        degreeSelect.addEventListener('change', function() {
            const selectedOption = degreeSelect.options[degreeSelect.selectedIndex];
            const degreeName = selectedOption.dataset.degreeName || '';
            degreeNameInput.value = degreeName;
            calculateTotalAmount();
        });

        noOfSeatInput.addEventListener('input', calculateTotalAmount);
        document.getElementById('circular_ugAdditionalExpenses').addEventListener('change', calculateTotalAmount);

        calculateTotalAmount(); // Calculate total amount on initial load
    });
</script>

{{-- single endowmwnt of PG --}}

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const degreeSelect = document.getElementById('single_pgDegree');
        const degreeNameInput = document.getElementById('single_pgDegreeName');
        const noOfSeatInput = document.getElementById('single_pgNoOfSeat');
        const totalAmountInput = document.getElementById('single_pgTotalAmount');

        function calculateTotalAmount() {
            const selectedOption = degreeSelect.options[degreeSelect.selectedIndex];
            const degreeFee = parseFloat(selectedOption.value) || 0;
            const noOfSeats = parseInt(noOfSeatInput.value) || 1;
            const additionalExpenses = document.getElementById('single_pgAdditionalExpenses').checked ? 275000 : 0;
            const totalAmount = (degreeFee * noOfSeats) + additionalExpenses;
            totalAmountInput.value = totalAmount.toFixed(2) + ' PKR';
        }

        degreeSelect.addEventListener('change', function() {
            const selectedOption = degreeSelect.options[degreeSelect.selectedIndex];
            const degreeName = selectedOption.dataset.degreeName || '';
            degreeNameInput.value = degreeName;
            calculateTotalAmount();
        });

        noOfSeatInput.addEventListener('input', calculateTotalAmount);
        document.getElementById('single_pgAdditionalExpenses').addEventListener('change', calculateTotalAmount);

        calculateTotalAmount(); // Calculate total amount on initial load
    });
</script>


{{-- circular-endowment-pg --}}

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const degreeSelect = document.getElementById('circular_pgDegree');
        const degreeNameInput = document.getElementById('circular_pgDegreeName');
        const noOfSeatInput = document.getElementById('circular_pgNoOfSeat');
        const totalAmountInput = document.getElementById('circular_pgTotalAmount');

        function calculateTotalAmount() {
            const selectedOption = degreeSelect.options[degreeSelect.selectedIndex];
            const degreeFee = parseFloat(selectedOption.value) || 0;
            const noOfSeats = parseInt(noOfSeatInput.value) || 1;
            const additionalExpenses = document.getElementById('circular_pgAdditionalExpenses').checked ? 275000 : 0;
            const totalAmount = (degreeFee * noOfSeats) + additionalExpenses;
            totalAmountInput.value = totalAmount.toFixed(2) + ' PKR';
        }

        degreeSelect.addEventListener('change', function() {
            const selectedOption = degreeSelect.options[degreeSelect.selectedIndex];
            const degreeName = selectedOption.dataset.degreeName || '';
            degreeNameInput.value = degreeName;
            calculateTotalAmount();
        });

        noOfSeatInput.addEventListener('input', calculateTotalAmount);
        document.getElementById('circular_pgAdditionalExpenses').addEventListener('change', calculateTotalAmount);

        calculateTotalAmount(); // Calculate total amount on initial load
    });
</script>


</body>
</html>
