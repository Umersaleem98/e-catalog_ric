<!DOCTYPE html>
<html lang="en">
<head>
    @include('template.head')
</head>
<body>

<div class="super_container">

	<!-- Header -->

@include('template.navbar')

<div class="home">
    <div class="home_background_container prlx_parent">

        <div class="hero_slide_background" style="background-image: url('{{ asset('templates/images/teachers_background.jpg') }}')"></div>
    </div>
    <div class="home_content  bg-transparent">
        {{-- <h1 class="display-1">Select Project for Funds</h1> --}}
        {{-- <span>Student Stories</span> --}}
    </div>
</div>


<div class="events page_section">
    <div class="container">

        <div class="row">
            <div class="col">
                <div class="section_title text-center">
                    <h1 class="">Payment Form</h1>
                </div>
            </div>
        </div>
<hr>

    <!-- Payment Form -->
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <form>
                <div class="form-group">
                    <label for="roomCount">Select Number of Rooms:</label>
                    <select class="form-control" id="roomCount" name="roomCount" onchange="calculateTotal()">
                        <option value="10">10 Rooms</option>
                        <option value="20">20 Rooms</option>
                        <option value="30">30 Rooms</option>
                        <option value="40">40 Rooms</option>
                        <option value="50">50 Rooms</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="totalCost">Total Cost:</label>
                    <input type="text" class="form-control" id="totalCost" name="totalCost" readonly>
                </div>
                <button type="submit" class="btn btn-success btn-block">Proceed to Payment</button>
            </form>
        </div>
    </div>
</div>

    </div>
</div>

	<!-- Footer -->

    @include('template.footer')

    <script>
        function calculateTotal() {
            var roomCount = document.getElementById("roomCount").value;
            var costPerRoom = 20000; // Cost per room
            var totalCost = roomCount * costPerRoom;
            document.getElementById("totalCost").value = totalCost;
        }
    </script>
</body>
</html>
