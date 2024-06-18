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



       <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="row">

            </div>

            <div class="row">

                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Entire Degree Support Education</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table mb-0 text-dark">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Program</th>
                                            <th>Degree</th>
                                            <th>Seats</th>
                                            <th>Total Amount</th>
                                            <th>Donor Name</th>
                                            <th>Donor Email</th>
                                            <th>Phone</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($entiredegree as $item)
                                        <tr>
                                            <td>{{$item->id}}</td>
                                            <td>{{$item->program}}</td>
                                            <td>{{$item->degree}}</td>
                                            <td>{{$item->seats}}</td>
                                            <td>{{$item->totalAmount}}</td>
                                            <td>{{$item->donor_name}}</td>
                                            <td>{{$item->donor_email}}</td>
                                            <td>{{$item->phone}}</td>
                                            <td>{{$item->payments_status}}</td>

                                        </tr>
                                        @endforeach
                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>



       @include('layouts.footer')



    </div>

    <!-- Required vendors -->
   @include('layouts.script')

</body>

</html>
