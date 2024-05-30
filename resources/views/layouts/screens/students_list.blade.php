<!DOCTYPE html>
<html class="loading bordered-layout" lang="en" data-layout="bordered-layout" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
   @include('layouts.css')
</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="">

    <!-- BEGIN: Header-->
    @include('layouts.navbar')



    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
    @include('layouts.sidebar')
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
   {{-- @include('layouts.content') --}}
    <!-- END: Content-->

    <div class="sidenav-overlay">

    </div>
    <div class="drag-target">
    </div>



    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>

        <div class="container my-5">

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


            <table class="table table-bordered table-hover table-sm">
                <thead class="thead-dark">
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
            </table>
        </div>


    </div>




    <!-- BEGIN: Footer-->

  @include('layouts.footer')
    <!-- END: Footer-->


<!-- BEGIN: Vendor JS -->

@include('layouts.script')

</body>
<!-- END: Body-->

</html>
