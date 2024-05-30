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



    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <!-- Dashboard Ecommerce Starts -->
                <section id="dashboard-ecommerce">

                    {{-- hhhhhh --}}
                    <div class="row match-height">
                        <!-- Company Table Card -->
                        <div class="col-lg-12 col-12">
                            <div class="card card-company-table">
                                <div class="card-body p-0">
                                    <div class="container my-5">
                                        <div class="row">
                                            <div class="col-12">
                                                <h2>Create Student</h2>

                                                @if (session('success'))
                                                <div class="alert alert-success">
                                                    {{ session('success') }}
                                                </div>
                                                @endif

                                                <form action="{{ url('students_store') }}" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="name">Name</label>
                                                                <input type="text" name="name" class="form-control" id="name" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="father_name">Father Name</label>
                                                                <input type="text" name="father_name" class="form-control" id="father_name"
                                                                    required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="institution">Institution</label>
                                                                <input type="text" name="institution" class="form-control" id="institution"
                                                                    required>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="discipline">Discipline</label>
                                                                <input type="text" name="discipline" class="form-control" id="discipline"
                                                                    required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="scholarship_name">Scholarship Name</label>
                                                                <input type="text" name="scholarship_name" class="form-control" id="scholarship_name"
                                                                    required>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="donor_name">Donor Name</label>
                                                                <input type="text" name="donor_name" class="form-control" id="donor_name"
                                                                    required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="province">Province</label>
                                                                <input type="text" name="province" class="form-control" id="province"
                                                                    required>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="gender">Gender</label>
                                                                <input type="text" name="gender" class="form-control" id="gender"
                                                                    required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="program">Program</label>
                                                                <input type="text" name="program" class="form-control" id="program"
                                                                    required>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="degree">Degree</label>
                                                                <input type="text" name="degree" class="form-control" id="degree"
                                                                    required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="year_of_admission">Year of Admission</label>
                                                                <input type="number" name="year_of_admission" class="form-control" id="year_of_admission"
                                                                    required>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="father_status">Father Status</label>
                                                                <input type="text" name="father_status" class="form-control" id="father_status"
                                                                    required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="father_profession">Father Profession</label>
                                                                <input type="text" name="father_profession" class="form-control" id="father_profession"
                                                                    required>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="monthly_income">Monthly Income</label>
                                                                <input type="number" step="0.01" name="monthly_income" class="form-control" id="monthly_income"
                                                                    required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="statement_of_purpose">Statement of Purpose</label>
                                                                <textarea name="statement_of_purpose" class="form-control" id="statement_of_purpose"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="images">Images</label>
                                                                <input type="file" name="images" class="form-control" id="images">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                     </div>
                   </div>
                 </div>
            </div>
        </div>
    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                        </div>
                        <!--/ Company Table










    <!-- BEGIN: Footer-->

  @include('layouts.footer')
    <!-- END: Footer-->


<!-- BEGIN: Vendor JS -->

@include('layouts.script')

</body>
<!-- END: Body-->

</html>
