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
                                    <label class="form-check-label" for="make_a_pledge">
                                        Make a Pledge
                                    </label>
                                    <input class="form-check-input ml-3" name="payments_status" type="radio" name="options" id="option2" value="option2">
                                    <label class="form-check-label ml-4" for="make_a_pledge">
                                        Paynow
                                    </label>
                                    <input class="form-check-input ml-3" name="payments_status" type="radio" name="options" id="option2" value="Paynow">

                                </div>
                                <br>

                                <div class="row">

                                    <div class="col-md-6">
                                        <input type="text" name="program" id="" value="UG" hidden>
                                        <div class="form-group">
                                            <label for="program">Select Options:</label>
                                            <select id="program" name="degree" class="form-control">
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
                                            <input type="number" id="no_of_seat" name="seats" class="form-control" value="1" min="1">
                                        </div>
                                    </div>
                                        <div class="form-group">
                                            <input type="checkbox" id="additionalExpenses" value="240000">
                                            <label for="additionalExpenses">Include mess and hostel expenses (240,000 PKR)</label>
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
                                        <label for="donor_name">Donor Name:</label>
                                        <input type="text" id="donor_name" name="donor_name" class="form-control" required>
                                    </div>
                                   </div>

                                   <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="donor_email">Donor Email:</label>
                                        <input type="email" id="donor_email" name="donor_email" class="form-control" required>
                                    </div>
                                   </div>
                                   <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="phone">Phone:</label>
                                        <input type="text" id="phone" name="phone" class="form-control" required>
                                    </div>

                                   </div>
                                <div class="col-md-6">

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
                                <h3 class="text-dark text-center">Detailed Breakdown for PG:</h3>
                                <div class="form-check">
                                    <label class="form-check-label" for="make_a_pledge">
                                        Make a Pledge
                                    </label>
                                    <input class="form-check-input ml-3" name="payments_status" type="radio"  id="option2" value="male_a_pledge">
                                    <label class="form-check-label ml-4" for="make_a_pledge">
                                        Paynow
                                    </label>
                                    <input class="form-check-input ml-3" name="payments_status" type="radio"  id="option2" value="Paynow">

                                </div>
                                <br>

                                <div class="row">
                                    <input type="text" name="program" value="PG" hidden id="">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="pgDegree">Select Options:</label>
                                            <select id="pgDegree" name="degree" class="form-control">
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
                                            <input type="number" id="pgQuantity" name="seats" class="form-control" value="1" min="1">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="checkbox" id="pgAdditionalExpenses" value="240000">
                                        <label for="pgAdditionalExpenses">Include mess and hostel expenses (240,000 PKR)</label>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="pgTotalAmount">Total Amount (PG):</label>
                                        <input type="text" id="pgTotalAmount" name="totalAmount" class="form-control" readonly>
                                    </div>
                                </div>
                                <div id="donorInfo1" style=";">
                                    <h4 class="text-dark mt-4">Donor Information:</h4>
                                   <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="donor_name">Donor Name:</label>
                                        <input type="text" id="donor_name" name="donor_name" class="form-control">
                                    </div>
                                   </div>

                                   <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="donor_email">Donor Email:</label>
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

                                {{-- <div class="form-check">
                                    <label class="form-check-label" for="make_a_pledge">
                                        Make a Pledge
                                    </label>
                                    <input class="form-check-input ml-3" name="payments_status" type="radio" name="options" id="option2" value="option2">
                                    <label class="form-check-label ml-4" for="make_a_pledge">
                                        Paynow
                                    </label>
                                    <input class="form-check-input ml-3" name="payments_status" type="radio" name="options" id="option2" value="Paynow">

                                </div> --}}
                                <input type="submit" name="submit" class="btn  btn-primary">
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
</script>

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


</script>

</body>
</html>
