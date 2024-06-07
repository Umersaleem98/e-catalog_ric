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

            <!-- Breakdown Heading -->
            <div class="row mt-5">
                <div class="col-12">
                    <h1 class="text-center text-dark mb-3">Breakdown</h1>
                </div>
            </div>

            <!-- Undergraduate Students Section -->
            <div class="container mt-5">
                <div class="row">
                    <div class="col-12">
                        <ul class="list-group list-group-flush text-dark btn-container"> <!-- Added btn-container class -->
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center">
                                    <h3>Undergraduate Students (UG)</h3>
                                </div>
                            </li>
                            <div class="card card-body mt-3">
                                <h4 class="text-dark">Detailed Breakdown for UG:</h4>
                                <div class="form-group">
                                    <label for="ugSelect">Select Options:</label>
                                    <select id="ugSelect" class="form-control">
                                        <option value="300000">Tuition: 300,000 PKR</option>
                                    </select>
                                </div>

                                <div class="total-amount mt-3 text-center">
                                    Total Amount (UG): <span id="ugTotalAmount">0</span> PKR
                                </div>

                                <div class="form-group mt-3">
                                    <input type="checkbox" id="additionalExpenses" value="240000">
                                    <label for="additionalExpenses">Include mess and hostel expenses (240,000 PKR)</label>
                                </div>
                                <div class="btn-container d-flex justify-content-center gap-2 mt-3">
                                    <a href="{{url('Make_a_Pledge')}}" class="btn btn-success">Make a Pledge</a>
                                    <a href="{{url('payment')}}" class="btn btn-primary">Pay Now</a>
                                </div>
                            </div>
                        </ul>
                    </div>
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
                                    <label for="pgTuition">Programs</label>
                                    <select id="pgTuition" class="form-control" name="pgTuition">
                                        <option value="0" selected disabled>Select PRograms Amount</option>
                                        <option value="210000">Engineering /IT, Bio Sciences, programs</option>
                                        <option value="700800">MS HRM, MS Logistics & Supply Chain Management, MS Innovation & Entrepreneurship</option>
                                        <option value="793800">Business Studies (MBA)</option>
                                        <option value="100570">Business Studies (EMBA)</option>
                                        <option value="73800">Engineering Management & Construction Engineering Management</option>
                                        <option value="488800">Architecture & Social sciences</option>
                                    </select>
                                </li>

                                <div class="total-amount text-center">
                                    Total Amount (PG): <span id="pgTotalAmount">0</span> PKR
                                </div>

                                <li class="list-group-item">
                                    <input type="checkbox" id="messHostelExpenses" value="259000">
                                    <label for="messHostelExpenses">Include Mess and Hostel Expenses (PKR 259,000)</label>
                                </li>
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
    document.addEventListener('DOMContentLoaded', function() {
        const ugSelect = document.getElementById('ugSelect');
        const additionalExpensesCheckbox = document.getElementById('additionalExpenses');
        const ugTotalAmount = document.getElementById('ugTotalAmount');

        function calculateTotal() {
            let total = parseInt(ugSelect.value);
            if (additionalExpensesCheckbox.checked) {
                total += parseInt(additionalExpensesCheckbox.value);
            }
            ugTotalAmount.textContent = total + ' PKR';
        }

        ugSelect.addEventListener('change', calculateTotal);
        additionalExpensesCheckbox.addEventListener('change', calculateTotal);

        calculateTotal();
    });
    </script>



<script>
    document.addEventListener('DOMContentLoaded', (event) => {
        const pgTuitionSelect = document.getElementById('pgTuition');
        const messHostelCheckbox = document.getElementById('messHostelExpenses');
        const pgTotalAmountSpan = document.getElementById('pgTotalAmount');

        function updateTotalAmount() {
            let totalAmount = 0;
            const tuitionAmount = parseInt(pgTuitionSelect.value) || 0;
            const messHostelAmount = messHostelCheckbox.checked ? parseInt(messHostelCheckbox.value) : 0;
            totalAmount = tuitionAmount + messHostelAmount;
            pgTotalAmountSpan.textContent = totalAmount;
        }

        pgTuitionSelect.addEventListener('change', updateTotalAmount);
        messHostelCheckbox.addEventListener('change', updateTotalAmount);
    });
    </script>


</body>
</html>
