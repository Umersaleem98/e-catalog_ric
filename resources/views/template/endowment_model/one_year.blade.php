<!DOCTYPE html>
<html lang="en">
<head>
    <title>One Year</title>
    @include('template.head')
    <style>
        .btn-details {
            width: 150px;
        }
        .heading-image {
            max-width: 100px; /* Adjust size as needed */
            margin-right: 15px;
        }
        .btn-container {
            display: flex;
            justify-content: center;
            gap: 10px; /* Adjust the gap as needed */
        }
        .total-amount {
            margin-top: 10px;
        }
        .add-card-icon {
            font-size: 20px;
            color: green;
            margin-right: 5px;
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

            <!-- Fee Breakdown Heading -->
            <div class="row mt-5">
                <div class="col-12">
                    <h1 class="text-center text-dark mb-3">Fee Breakdown</h1>
                </div>
            </div>

            <!-- Fee Breakdown Section -->
            <div class="row mt-2">
                <div class="col-12">
                    <ul class="list-group list-group-flush text-dark">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <div class="d-flex align-items-center">
                                <img src="{{ asset('templates/endowment_model/images1.jpg') }}" alt="" class="heading-image">
                                <h3>Undergraduate Students (UG)</h3>
                            </div>
                        </li>
                        <div class="card card-body mt-3">
                            <h4 class="text-dark">Detailed Fee Breakdown for UG:</h4>
                            <ul class="list-group list-group-flush text-dark">
                                <li class="list-group-item">
                                    <input type="checkbox" id="tuition" name="tuition" value="200000">
                                    <label for="tuition">Tuition: 200,000 PKR</label>
                                </li>
                                <li class="list-group-item">
                                    <input type="checkbox" id="accommodation" name="accommodation" value="50000">
                                    <label for="accommodation">Accommodation: 50,000 PKR</label>
                                </li>
                                <div class="total-amount">
                                    Total Amount: <span id="totalAmount">0</span> PKR
                                </div>
                                <!-- Use a "plus" icon for adding a card -->
                                <li class="btn-container">
                                    <span class="add-card-icon">+</span>
                                    <a href="#" class="btn btn-success">Make a Pledge</a>
                                    <a href="#" class="btn btn-primary">Pay Now</a>
                                </li>
                            </ul>

                        </div>
                    </ul>
                </div>
            </div>
            <!-- End of Fee Breakdown Section -->
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
        $('input[type="checkbox"]').change(function() {
            var total = 0;
            $('input[type="checkbox"]:checked').each(function() {
                total += parseInt($(this).val());
            });
            $('#totalAmount').text(total);
        });
    });
</script>

</body>
</html>
