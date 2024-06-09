<!DOCTYPE html>
<html lang="en">
<head>
    <title>One Year</title>
    @include('template.head')
    <style>
        .btn-container {
            display: flex;
            justify-content: center;
            gap: 10px;
        }
        input.form-control {
            color: black;
        }
        input.form-control::placeholder {
            color: black;
            opacity: 1;
        }
        select.form-control {
            color: black;
        }
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

            <!-- Programs Section -->
            @foreach ($programs as $program)
            <div class="container mt-5">
                <div class="row">
                    <div class="col-12">
                        <ul class="list-group list-group-flush text-dark btn-container">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center">
                                    <h3>{{ $program->name }} ({{ $program->level }})</h3>
                                </div>
                            </li>
                            <div class="card card-body mt-3">
                                <h4 class="text-dark">Detailed Breakdown for {{ $program->name }}:</h4>
                                <div class="form-group">
                                    <label for="select{{ $program->id }}">Select Options:</label>
                                    <select id="select{{ $program->id }}" class="form-control">
                                        @foreach ($program->fees as $fee)
                                        <option value="{{ $fee->amount }}">{{ $fee->duration }}: {{ number_format($fee->amount, 0) }} PKR</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="total-amount mt-3 text-center">
                                    Total Amount ({{ $program->name }}): <span id="totalAmount{{ $program->id }}">0</span> PKR
                                </div>

                                <div class="form-group mt-3">
                                    <input type="checkbox" id="additionalExpenses{{ $program->id }}" value="240000">
                                    <label for="additionalExpenses{{ $program->id }}">Include mess and hostel expenses (240,000 PKR)</label>
                                </div>
                                <div class="btn-container d-flex justify-content-center gap-2 mt-3">
                                    <a href="{{ url('Make_a_Pledge') }}" class="btn btn-success">Make a Pledge</a>
                                    <a href="{{ url('payment') }}" class="btn btn-primary">Pay Now</a>
                                </div>
                            </div>
                        </ul>
                    </div>
                </div>
            </div>
            @endforeach
            <!-- End of Programs Section -->

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
        @foreach ($programs as $program)
        const select{{ $program->id }} = document.getElementById('select{{ $program->id }}');
        const additionalExpensesCheckbox{{ $program->id }} = document.getElementById('additionalExpenses{{ $program->id }}');
        const totalAmount{{ $program->id }} = document.getElementById('totalAmount{{ $program->id }}');

        function calculateTotal{{ $program->id }}() {
            let total = parseInt(select{{ $program->id }}.value);
            if (additionalExpensesCheckbox{{ $program->id }}.checked) {
                total += parseInt(additionalExpensesCheckbox{{ $program->id }}.value);
            }
            totalAmount{{ $program->id }}.textContent = total + ' PKR';
        }

        select{{ $program->id }}.addEventListener('change', calculateTotal{{ $program->id }});
        additionalExpensesCheckbox{{ $program->id }}.addEventListener('change', calculateTotal{{ $program->id }});

        calculateTotal{{ $program->id }}();
        @endforeach
    });
</script>

</body>
</html>
