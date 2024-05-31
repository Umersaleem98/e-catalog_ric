<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.css')

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="index.html" class="brand-logo">
                <img class="logo-abbr" src="admin/images/logo.png" alt="">
                <img class="logo-compact" src="admin/images/logo-text.png" alt="">
                <img class="brand-title" src="admin/images/logo-text.png" alt="">
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        @include('layouts.header')
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
       @include('layouts.sidebar')
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-5">
                        <form action="{{ url('students_get') }}" method="GET" class="mb-2">
                            <div class="input-group">
                                <input type="text" name="query" class="form-control" placeholder="Search...">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-primary">Search</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="row">

                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">New Orders</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                     <table class="table table-bordered table-sm text-dark">
                                        <thead>
                                            <tr>
                                                <th>Qalam ID</th>
                                                <th>Name</th>
                                                <th>Father Name</th>
                                                <th>Institution</th>
                                                <th>Discipline</th>
                                                <th>Scholarship Name</th>
                                                {{-- <th>Donor Name</th> --}}
                                                <th>Province</th>
                                                <th>Gender</th>
                                                <th>Program</th>
                                                <th>Degree</th>
                                                <th>Year of Admission</th>
                                                <th>Father Status</th>
                                                {{-- <th>financial_support</th> --}}
                                                <th>Father Profession</th>
                                                <th>Monthly Income</th>
                                                <th>Images</th>
                                                <th>Update</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tbody>
                                                <!-- Example row (replace with dynamic content) -->
                                                @foreach ($students as $item)
                                                <tr>
                                                    <td>{{$item->qalam_id}}</td>
                                                    <td>{{$item->name}}</td>
                                                    <td>{{$item->father_name}}</td>
                                                    <td>{{$item->institution}}</td>
                                                    <td>{{$item->discipline}}</td>
                                                    <td>{{$item->scholarship_name}}</td>
                                                    {{-- <td>{{$item->donor_name}}</td> --}}
                                                    <td>{{$item->province}}</td>
                                                    <td>{{$item->gender}}</td>
                                                    <td>{{$item->program}}</td>
                                                    <td>{{$item->degree}}</td>
                                                    <td>{{$item->year_of_admission}}</td>
                                                    <td>{{$item->father_status}}</td>
                                                    {{-- <td>{{$item->financial_support}}</td> --}}
                                                    <td>{{$item->father_profession}}</td>
                                                    <td>{{$item->monthly_income}}</td>
                                                    <td>
                                                        <!-- Display image if available -->
                                                        @if ($item->images)
                                                        <img src="{{ asset('students_images/' . $item->images) }}" alt="Student Image" style="max-width: 100px; max-height: 100px;">
                                                        @else
                                                        No Image Available
                                                        @endif
                                                    </td>
                                                    {{-- <td>{{$item->statement_of_purpose}}</td> --}}
                                                    <td>
                                                        <a href="{{ url('students_edit', $item->id) }}" class="btn btn-primary btn-sm">Update</a>
                                                    </td>
                                                </tr>
                                                @endforeach
                                                <!-- Add more rows as needed -->
                                            </tbody>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
       @include('layouts.footer')



    </div>

    <!-- Required vendors -->
   @include('layouts.script')

</body>

</html>
