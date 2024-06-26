<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
<title>Support Scholor payment list</title>

 @include('admin.head')

<style>
    body, table, th, td {
    color: #000; /* Black color */
}
</style>
</head>


  <body class="navbar-fixed sidebar-fixed" id="body">
    <script>
      NProgress.configure({ showSpinner: false });
      NProgress.start();
    </script>


    <div id="toaster"></div>
    <div class="wrapper">
      @include('admin.sidebar')
      <div class="page-wrapper">
        @include('admin.header')

        <div class="content-wrapper">
            <div class="content">
                    <!-- Top Statistics -->
                  <!-- Table Product -->
                  <div class="row">
                    <div class="col-12">
                      <div class="card card-default">
                        <div class="card-header">
                          <h2>Support Scholor payment list</h2>

                        </div>
                        <div class="card-body">
                          <table id="productsTable" class="table table-hover table-product" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Student Name</th>
                                    <th>Donor Name</th>
                                    <th>Donor Email</th>
                                    <th>Duration</th>
                                    <th>Amount</th>
                                    <th>Prove</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($support_payment as $item)
                                <tr>
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->student_name}}</td>
                                    <td>{{$item->donor_name}}</td>
                                    <td>{{$item->donor_email}}</td>
                                    <td>{{$item->duration}} year</td>
                                    <td>{{$item->amount}}</td>
                                    <td>{{$item->prove}}</td>

                                </tr>
                                @endforeach
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
    </div>

                    <!-- Card Offcanvas -->


                    @include('admin.script')
  </body>
</html>
