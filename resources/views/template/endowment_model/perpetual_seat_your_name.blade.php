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

            <!-- Fee Breakdown Heading -->
            <div class="row mt-5">

                <div class="col-lg-6">
                    <!-- Left Part -->
                    <div class="row mt-2">
                        <div class="col-12">
                            <ul class="list-group list-group-flush text-dark btn-container"> <!-- Added btn-container class -->
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <div class="d-flex align-items-center">
                                        {{-- <img src="{{ asset('templates/endowment_model/images1.jpg') }}" alt="" class="heading-image"> --}}
                                        <h3 class="pl-3">Single Endowment for Undergraduate Students (UG)</h3>
                                    </div>
                                </li>
                                <div class="card card-body mt-3">
                                    <h4 class="text-dark">Detailed Fee Breakdown for UG:</h4>
                                    <ul class="list-group list-group-flush text-dark">
                                        <li class="list-group-item">
                                            <input type="checkbox" id="ugTuition" name="ugTuition" value="4000000">
                                            <label for="ugTuition">Tuition: 40,00,000 Million PKR</label>
                                        </li>
                                        <li class="list-group-item">
                                            <input type="checkbox" id="ugAccommodation" name="ugAccommodation" value="50000">
                                            <label for="ugAccommodation">Accommodation: 50,000 PKR</label>
                                        </li>
                                        <div class="total-amount">
                                            Total Amount (UG): <span id="ugTotalAmount">0</span> PKR
                                        </div>
                                        <!-- Use a "plus" icon for adding a card -->
                                        <!-- Use Bootstrap utility classes to center the buttons and add a gap -->
                                        <li class="btn-container d-flex justify-content-center gap-4 mt-4">
                                            <a href="{{url('payments_project')}}" class="btn btn-success">Make a Pledge</a>
                                            <a href="{{url('payments_project')}}" class="btn btn-primary">Pay Now</a>
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
                            <ul class="list-group list-group-flush text-dark btn-container"> <!-- Added btn-container class -->
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <div class="d-flex align-items-center">
                                        {{-- <img src="{{ asset('templates/endowment_model/images1.jpg') }}" alt="" class="heading-image"> --}}
                                        <h3 class="pl-3">Circular Endowment for Undergraduate Students (UG)</h3>
                                    </div>
                                </li>
                                <div class="card card-body mt-3">
                                    <h4 class="text-dark">Detailed Fee Breakdown for UG:</h4>
                                    <ul class="list-group list-group-flush text-dark">
                                        <li class="list-group-item">
                                            <input type="checkbox" id="ugTuition" name="ugTuition" value="4000000">
                                            <label for="ugTuition">Tuition: 40,00,000 Million PKR</label>
                                        </li>
                                        <li class="list-group-item">
                                            <input type="checkbox" id="ugAccommodation" name="ugAccommodation" value="50000">
                                            <label for="ugAccommodation">Accommodation: 50,000 PKR</label>
                                        </li>
                                        <div class="total-amount">
                                            Total Amount (UG): <span id="ugTotalAmount">0</span> PKR
                                        </div>
                                        <!-- Use a "plus" icon for adding a card -->
                                        <!-- Use Bootstrap utility classes to center the buttons and add a gap -->
                                        <li class="btn-container d-flex justify-content-center gap-4 mt-4">
                                            <a href="{{url('payments_project')}}" class="btn btn-success">Make a Pledge</a>
                                            <a href="{{url('payments_project')}}" class="btn btn-primary">Pay Now</a>
                                        </li>

                                    </ul>
                                </div>
                            </ul>
                        </div>
                    </div>
                    <!-- End of Right Part -->
                </div>
            </div>
            <!-- End of Fee Breakdown Section -->
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
                            <ul class="list-group list-group-flush text-dark btn-container"> <!-- Added btn-container class -->
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <div class="d-flex align-items-center">
                                        {{-- <img src="{{ asset('templates/endowment_model/images1.jpg') }}" alt="" class="heading-image"> --}}
                                        <h3 class="pl-3">Single Endowment for Postgraduate Students (UG)</h3>
                                    </div>
                                </li>
                                <div class="card card-body mt-3">
                                    <h4 class="text-dark">Detailed Fee Breakdown for UG:</h4>
                                    <ul class="list-group list-group-flush text-dark">
                                        <li class="list-group-item">
                                            <input type="checkbox" id="ugTuition" name="ugTuition" value="4000000">
                                            <label for="ugTuition">Tuition: 40,00,000 Million PKR</label>
                                        </li>
                                        <li class="list-group-item">
                                            <input type="checkbox" id="ugAccommodation" name="ugAccommodation" value="50000">
                                            <label for="ugAccommodation">Accommodation: 50,000 PKR</label>
                                        </li>
                                        <div class="total-amount">
                                            Total Amount (UG): <span id="ugTotalAmount">0</span> PKR
                                        </div>
                                        <!-- Use a "plus" icon for adding a card -->
                                        <!-- Use Bootstrap utility classes to center the buttons and add a gap -->
                                        <li class="btn-container d-flex justify-content-center gap-4 mt-4">
                                            <a href="{{url('payments_project')}}" class="btn btn-success">Make a Pledge</a>
                                            <a href="{{url('payments_project')}}" class="btn btn-primary">Pay Now</a>
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
                            <ul class="list-group list-group-flush text-dark btn-container"> <!-- Added btn-container class -->
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <div class="d-flex align-items-center">
                                        {{-- <img src="{{ asset('templates/endowment_model/images1.jpg') }}" alt="" class="heading-image"> --}}
                                        <h3 class="pl-3">Circular Endowment for Postgraduate Students (UG)</h3>
                                    </div>
                                </li>
                                <div class="card card-body mt-3">
                                    <h4 class="text-dark">Detailed Fee Breakdown for UG:</h4>
                                    <ul class="list-group list-group-flush text-dark">
                                        <li class="list-group-item">
                                            <input type="checkbox" id="ugTuition" name="ugTuition" value="4000000">
                                            <label for="ugTuition">Tuition: 40,00,000 Million PKR</label>
                                        </li>
                                        <li class="list-group-item">
                                            <input type="checkbox" id="ugAccommodation" name="ugAccommodation" value="50000">
                                            <label for="ugAccommodation">Accommodation: 50,000 PKR</label>
                                        </li>
                                        <div class="total-amount">
                                            Total Amount (UG): <span id="ugTotalAmount">0</span> PKR
                                        </div>
                                        <!-- Use a "plus" icon for adding a card -->
                                        <!-- Use Bootstrap utility classes to center the buttons and add a gap -->
                                        <li class="btn-container d-flex justify-content-center gap-4 mt-4">
                                            <a href="{{url('payments_project')}}" class="btn btn-success">Make a Pledge</a>
                                            <a href="{{url('payments_project')}}" class="btn btn-primary">Pay Now</a>
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
                            <ul class="list-group list-group-flush text-dark btn-container"> <!-- Added btn-container class -->
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <div class="d-flex align-items-center">
                                        {{-- <img src="{{ asset('templates/endowment_model/images1.jpg') }}" alt="" class="heading-image"> --}}
                                        <h3 class="pl-3">Single Endowment for PhD Students</h3>
                                    </div>
                                </li>
                                <div class="card card-body mt-3">
                                    <h4 class="text-dark">Detailed Fee Breakdown for UG:</h4>
                                    <ul class="list-group list-group-flush text-dark">
                                        <li class="list-group-item">
                                            <input type="checkbox" id="ugTuition" name="ugTuition" value="4000000">
                                            <label for="ugTuition">Tuition: 40,00,000 Million PKR</label>
                                        </li>
                                        <li class="list-group-item">
                                            <input type="checkbox" id="ugAccommodation" name="ugAccommodation" value="50000">
                                            <label for="ugAccommodation">Accommodation: 50,000 PKR</label>
                                        </li>
                                        <div class="total-amount">
                                            Total Amount (UG): <span id="ugTotalAmount">0</span> PKR
                                        </div>
                                        <!-- Use a "plus" icon for adding a card -->
                                        <!-- Use Bootstrap utility classes to center the buttons and add a gap -->
                                        <li class="btn-container d-flex justify-content-center gap-4 mt-4">
                                            <a href="{{url('payments_project')}}" class="btn btn-success">Make a Pledge</a>
                                            <a href="{{url('payments_project')}}" class="btn btn-primary">Pay Now</a>
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
                            <ul class="list-group list-group-flush text-dark btn-container"> <!-- Added btn-container class -->
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <div class="d-flex align-items-center">
                                        {{-- <img src="{{ asset('templates/endowment_model/images1.jpg') }}" alt="" class="heading-image"> --}}
                                        <h3 class="pl-3">Circular Endowment for PhD Students</h3>
                                    </div>
                                </li>
                                <div class="card card-body mt-3">
                                    <h4 class="text-dark">Detailed Fee Breakdown for UG:</h4>
                                    <ul class="list-group list-group-flush text-dark">
                                        <li class="list-group-item">
                                            <input type="checkbox" id="ugTuition" name="ugTuition" value="4000000">
                                            <label for="ugTuition">Tuition: 40,00,000 Million PKR</label>
                                        </li>
                                        <li class="list-group-item">
                                            <input type="checkbox" id="ugAccommodation" name="ugAccommodation" value="50000">
                                            <label for="ugAccommodation">Accommodation: 50,000 PKR</label>
                                        </li>
                                        <div class="total-amount">
                                            Total Amount (UG): <span id="ugTotalAmount">0</span> PKR
                                        </div>
                                        <!-- Use a "plus" icon for adding a card -->
                                        <!-- Use Bootstrap utility classes to center the buttons and add a gap -->
                                        <li class="btn-container d-flex justify-content-center gap-4 mt-4">
                                            <a href="{{url('payments_project')}}" class="btn btn-success">Make a Pledge</a>
                                            <a href="{{url('payments_project')}}" class="btn btn-primary">Pay Now</a>
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

    <!-- Footer -->
    @include('template.footer')
</div>

<!-- Bootstrap Bundle with Popper -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<script>
    $(document).ready(function() {
        $('input[name="ugTuition"], input[name="ugAccommodation"]').change(function() {
            var ugTotal = 0;
            $('input[name="ugTuition"]:checked, input[name="ugAccommodation"]:checked').each(function() {
                ugTotal += parseInt($(this).val());
            });
            $('#ugTotalAmount').text(ugTotal);
        });

        $('input[name="pgTuition"], input[name="pgAccommodation"]').change(function() {
            var pgTotal = 0;
            $('input[name="pgTuition"]:checked, input[name="pgAccommodation"]:checked').each(function() {
                pgTotal += parseInt($(this).val());
            });
            $('#pgTotalAmount').text(pgTotal);
        });
    });
</script>

</body>
</html>
