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
                        <h1 class="text-dark">Perpetual Seat in Your Name
                            </h1>
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
                        <button class="nav-link active" id="undergraduate-tab" data-bs-toggle="tab" data-bs-target="#undergraduate" type="button" role="tab" aria-controls="undergraduate" aria-selected="true" style="background-color: #FFB606; color:white" >Undergraduate</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="postgraduate-tab" data-bs-toggle="tab" data-bs-target="#postgraduate" type="button" role="tab" aria-controls="postgraduate" aria-selected="false" style="background-color: #FFB606; color:white">Postgraduate</button>
                    </li>
                    {{-- <li class="nav-item" role="presentation">
                        <button class="nav-link" id="phd-tab" data-bs-toggle="tab" data-bs-target="#phd" type="button" role="tab" aria-controls="postgraduate" aria-selected="false" style="background-color: #FFB606; color:white">PhD</button>
                    </li> --}}
                </ul>
            </div>

            <!-- Tabs Content -->
            <div class="tab-content" id="myTabContent">
                <!-- Undergraduate Tab -->
                <div class="tab-pane fade show active" id="undergraduate" role="tabpanel" aria-labelledby="undergraduate-tab">
                    <div class="container">
                        <div class="row">
                            {{-- single endowment  --}}
                            <div class="col-md-6 mt-5">
                                <form action="{{url('perpetualseatyourname')}}" method="post">
                                    @csrf
                                    <h3 class="text-dark text-center mb-4">Single Endowment for UG:</h3>
                                    <div class="row">

                                        <div class="col-md-6">
                                            <input type="text" name="program" value="UG" hidden>
                                            <input type="text" name="endowment_type" value="Single_endowment" hidden>
                                            <div class="form-group">
                                                <label for="degree">Select Options:</label>
                                                <select id="degree" name="degree" class="form-control form-control-sm">
                                                    <option value="">Select Degree</option>
                                                    @foreach ($undergraduate as $degree)
                                                        <option value="{{ $degree->fee }}">{{ $degree->degree }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="no_of_seat">No of seats:</label>
                                                <input type="number" id="no_of_seat" name="seats" class="form-control form-control-sm" value="1" min="1">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-check mb-3">
                                                <input type="checkbox" id="additionalExpenses" value="240000" class="form-check-input">
                                                <label for="additionalExpenses" class="form-check-label">Include mess and hostel expenses (240,000 PKR)</label>
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
                                                        <label for="donor_name">Donor Name:</label>
                                                        <input type="text" id="donor_name" name="donor_name" class="form-control form-control-sm" required>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="donor_email">Donor Email:</label>
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
                                    </div>
                                    <input type="submit" name="submit" class="btn btn-primary mt-3">
                                </form>
                            </div>
                            {{-- Circular endowment --}}

                            {{-- <div class="col-md-6"> --}}
                                <div class="col-md-6 mt-5">
                                    <form action="{{url('perpetualseatyourname')}}" method="post">
                                        @csrf
                                        <h3 class="text-dark text-center mb-4">Circular Endowment for UG:</h3>
                                        <div class="row">

                                            <div class="col-md-6">
                                                <input type="text" name="program" value="UG" hidden>
                                                <input type="text" name="endowment_type" value="Circular_endowment" hidden>
                                                <div class="form-group">
                                                    <label for="circular_ugDegree">Select Options:</label>
                                                    <select id="circular_ugDegree" name="degree" class="form-control form-control-sm">
                                                        <option value="">Select Degree</option>
                                                        @foreach ($undergraduate as $degree)
                                                            <option value="{{ $degree->fee }}">{{ $degree->degree }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="circular_ugNoOfSeat">No of seats:</label>
                                                    <input type="number" id="circular_ugNoOfSeat" name="seats" class="form-control form-control-sm" value="1" min="1">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-check mb-3">
                                                    <input type="checkbox" id="circular_ugAdditionalExpenses" value="240000" class="form-check-input">
                                                    <label for="circular_ugAdditionalExpenses" class="form-check-label">Include mess and hostel expenses (240,000 PKR)</label>
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
                                                            <label for="circular_ugDonorName">Donor Name:</label>
                                                            <input type="text" id="circular_ugDonorName" name="donor_name" class="form-control form-control-sm" required>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="circular_ugDonorEmail">Donor Email:</label>
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
                                        </div>
                                        <input type="submit" name="submit" class="btn btn-primary mt-3">
                                    </form>


                                </div>
                            {{-- </div> --}}
                        </div>
                    </div>
                </div>
                <!-- Postgraduate Tab -->
                <div class="tab-pane fade" id="postgraduate" role="tabpanel" aria-labelledby="postgraduate-tab">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 mt-5">
                                <form action="{{url('perpetualseatyourname')}}" method="post">
                                    @csrf
                                    <h3 class="text-dark text-center mb-3">Single Endowment for PG:</h3>                                    <div class="row">
                                        <input type="text" name="program" value="PG" hidden>
                                        <input type="text" name="endowment_type" value="single endownment" hidden>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="pgDegree">Select Options:</label>
                                                <select id="pgDegree" name="degree" class="form-control form-control-sm">
                                                    <option value="">Select Degree</option>
                                                    @foreach ($postgraduate as $pgDegree)
                                                        <option value="{{ $pgDegree->fee }}">{{ $pgDegree->degree }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="pgQuantity">No of seats:</label>
                                                <input type="number" id="pgQuantity" name="seats" class="form-control form-control-sm" value="1" min="1">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group form-check">
                                                <input type="checkbox" id="pgAdditionalExpenses" value="240000" class="form-check-input">
                                                <label for="pgAdditionalExpenses" class="form-check-label">Include mess and hostel expenses (240,000 PKR)</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="pgTotalAmount">Total Amount (PG):</label>
                                                <input type="text" id="pgTotalAmount" name="totalAmount" class="form-control form-control-sm" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="donorInfo1">
                                        <h4 class="text-dark mt-3">Donor Information:</h4>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="donor_name">Donor Name:</label>
                                                    <input type="text" id="donor_name" name="donor_name" class="form-control form-control-sm">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="donor_email">Donor Email:</label>
                                                    <input type="email" id="donor_email" name="donor_email" class="form-control form-control-sm">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="phone">Phone:</label>
                                                    <input type="text" id="phone" name="phone" class="form-control form-control-sm">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" name="payments_status" type="radio" id="make_a_pledge" value="Make a Pledge">
                                        <label class="form-check-label" for="make_a_pledge">Make a Pledge</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" name="payments_status" type="radio" id="paynow" value="Paynow">
                                        <label class="form-check-label" for="paynow">Pay now</label>
                                    </div>
                                    <input type="submit" name="submit" class="btn btn-primary">
                                </form>

                            </div>
                            <div class="col-md-6 mt-5">

                                <form action="{{url('perpetualseatyourname')}}" method="post">
                                    @csrf
                                    <h3 class="text-dark text-center mb-3">Circular Endowment for PG:</h3>
                                    <div class="row">
                                        <input type="text" name="program" value="PG" hidden>
                                        <input type="text" name="endowment_type" value="circular endowment" hidden>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="circularPgDegree">Select Options:</label>
                                                <select id="circularPgDegree" name="degree" class="form-control form-control-sm">
                                                    <option value="">Select Degree</option>
                                                    @foreach ($postgraduate as $pgDegree)
                                                        <option value="{{ $pgDegree->fee }}">{{ $pgDegree->degree }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="circularPgQuantity">No of seats:</label>
                                                <input type="number" id="circularPgQuantity" name="seats" class="form-control form-control-sm" value="1" min="1">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group form-check">
                                                <input type="checkbox" id="circularPgAdditionalExpenses" value="240000" class="form-check-input">
                                                <label for="circularPgAdditionalExpenses" class="form-check-label">Include mess and hostel expenses (240,000 PKR)</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="circularPgTotalAmount">Total Amount (PG):</label>
                                                <input type="text" id="circularPgTotalAmount" name="totalAmount" class="form-control form-control-sm" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="donorInfo1">
                                        <h4 class="text-dark mt-3">Donor Information:</h4>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="donor_name">Donor Name:</label>
                                                    <input type="text" id="donor_name" name="donor_name" class="form-control form-control-sm">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="donor_email">Donor Email:</label>
                                                    <input type="email" id="donor_email" name="donor_email" class="form-control form-control-sm">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="phone">Phone:</label>
                                                    <input type="text" id="phone" name="phone" class="form-control form-control-sm">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" name="payments_status" type="radio" id="make_a_pledge" value="Make a Pledge">
                                        <label class="form-check-label" for="make_a_pledge">Make a Pledge</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" name="payments_status" type="radio" id="paynow" value="Paynow">
                                        <label class="form-check-label" for="paynow">Pay now</label>
                                    </div>
                                    <input type="submit" name="submit" class="btn btn-primary">
                                </form>

                                <!-- JavaScript for Circular Endowment Form -->


                            </div>
                        </div>
                    </div>
                </div>

                {{-- <div class="tab-pane fade" id="phd" role="tabpanel" aria-labelledby="phd-tab">
                    <h1>PHD</h1>
                </div> --}}
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
    const additionalExpensesCheckbox = document.getElementById('additionalExpenses');
    const quantityInput = document.getElementById('no_of_seat');
    const totalAmountInput = document.getElementById('totalAmount');

    function calculateTotal() {
        let total = (parseFloat(degreeSelect.value) || 0) * parseFloat(quantityInput.value || 1);
        if (additionalExpensesCheckbox.checked) {
            total += parseFloat(additionalExpensesCheckbox.value) * parseFloat(quantityInput.value || 1);
        }
        totalAmountInput.value = total.toFixed(2) + ' PKR';
    }

    degreeSelect.addEventListener('change', calculateTotal);
    additionalExpensesCheckbox.addEventListener('change', calculateTotal);
    quantityInput.addEventListener('input', calculateTotal);

    calculateTotal(); // Initial calculation on page load
});

</script>
{{-- postgraduate  --}}
<script>
    document.addEventListener('DOMContentLoaded', function() {
    const degreeSelect = document.getElementById('pgDegree');
    const additionalExpensesCheckbox = document.getElementById('pgAdditionalExpenses');
    const quantityInput = document.getElementById('pgQuantity');
    const totalAmountInput = document.getElementById('pgTotalAmount');

    function calculateTotal() {
        let total = (parseFloat(degreeSelect.value) || 0) * parseFloat(quantityInput.value || 1);
        if (additionalExpensesCheckbox.checked) {
            total += parseFloat(additionalExpensesCheckbox.value) * parseFloat(quantityInput.value || 1);
        }
        totalAmountInput.value = total.toFixed(2) + ' PKR';
    }

    degreeSelect.addEventListener('change', calculateTotal);
    additionalExpensesCheckbox.addEventListener('change', calculateTotal);
    quantityInput.addEventListener('input', calculateTotal);

    calculateTotal(); // Initial calculation on page load
});

</script>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Get necessary DOM elements for Circular Endowment form
        const circularPgDegreeSelect = document.getElementById("circularPgDegree");
        const circularPgQuantityInput = document.getElementById("circularPgQuantity");
        const circularPgAdditionalExpensesCheckbox = document.getElementById("circularPgAdditionalExpenses");
        const circularPgTotalAmountInput = document.getElementById("circularPgTotalAmount");

        // Function to calculate total amount for Circular Endowment form
        function calculateCircularEndowmentTotal() {
            // Get selected degree fee for Circular Endowment
            const selectedCircularPgDegreeFee = circularPgDegreeSelect.value;

            // Get number of seats for Circular Endowment
            const numberOfCircularPgSeats = parseInt(circularPgQuantityInput.value);

            // Calculate total amount for Circular Endowment
            let totalCircularPgAmount = selectedCircularPgDegreeFee * numberOfCircularPgSeats;

            // Add additional expenses for Circular Endowment if checkbox is checked
            if (circularPgAdditionalExpensesCheckbox.checked) {
                totalCircularPgAmount += 240000; // Adding 240,000 PKR for mess and hostel expenses
            }

            // Update total amount input field for Circular Endowment
            circularPgTotalAmountInput.value = totalCircularPgAmount;
        }

        // Event listeners for input changes for Circular Endowment form
        circularPgDegreeSelect.addEventListener("change", calculateCircularEndowmentTotal);
        circularPgQuantityInput.addEventListener("input", calculateCircularEndowmentTotal);
        circularPgAdditionalExpensesCheckbox.addEventListener("change", calculateCircularEndowmentTotal);

        // Initial calculation on page load for Circular Endowment form
        calculateCircularEndowmentTotal();
    });
</script>



   <!-- JavaScript for Circular Endowment Form -->
   <script>
    document.addEventListener("DOMContentLoaded", function () {
        const circular_ugDegreeSelect = document.getElementById("circular_ugDegree");
        const circular_ugNoOfSeatInput = document.getElementById("circular_ugNoOfSeat");
        const circular_ugAdditionalExpensesCheckbox = document.getElementById("circular_ugAdditionalExpenses");
        const circular_ugTotalAmountInput = document.getElementById("circular_ugTotalAmount");

        function calculateCircularUGTotalAmount() {
            const selectedCircularUGDegreeFee = circular_ugDegreeSelect.value;
            const numberOfCircularUGSeats = parseInt(circular_ugNoOfSeatInput.value);
            let totalCircularUGAmount = selectedCircularUGDegreeFee * numberOfCircularUGSeats;

            if (circular_ugAdditionalExpensesCheckbox.checked) {
                totalCircularUGAmount += 240000;
            }

            circular_ugTotalAmountInput.value = totalCircularUGAmount;
        }

        circular_ugDegreeSelect.addEventListener("change", calculateCircularUGTotalAmount);
        circular_ugNoOfSeatInput.addEventListener("input", calculateCircularUGTotalAmount);
        circular_ugAdditionalExpensesCheckbox.addEventListener("change", calculateCircularUGTotalAmount);

        calculateCircularUGTotalAmount();
    });
</script>
</body>
</html>
