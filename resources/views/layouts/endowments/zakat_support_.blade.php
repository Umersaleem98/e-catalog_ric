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
                        <div class="card-header text-center">
                            <h4 class="card-title text-center">Zakat Support Education</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table mb-0 text-dark">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Payment Type</th>
                                            <th>Donor Name</th>
                                            <th>Donor Email</th>
                                            <th>Phone</th>
                                            <th>Duration</th>
                                            <th>Amount</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($zakat_support as $item)
                                        <tr>
                                            <td>{{$item->id}}</td>
                                            <td>{{$item->payment_type}}</td>
                                            <td>{{$item->donor_name}}</td>
                                            <td>{{$item->donor_email}}</td>
                                            <td>{{$item->phone}}</td>
                                            <td>{{$item->duration}}</td>
                                            <td>{{$item->amount}}</td>

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
