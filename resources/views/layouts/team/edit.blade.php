<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.css')
</head>

<body>

    <div id="main-wrapper">

        <!-- Nav header -->
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

        <!-- Header -->
        @include('layouts.header')

        <!-- Sidebar -->
        @include('layouts.sidebar')

        <!-- Content Body -->
        <div class="content-body">
            <div class="container-fluid">
                <div class="row">
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Update Team Member</h4>
                            </div>
                            <div class="card-body col-lg-8">
                                <form action="{{ url('update', $teams->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf

                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control" id="name" name="name" value="{{ $teams->name }}" placeholder="Enter name">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" id="email" name="email" value="{{ $teams->email }}" placeholder="Enter email">
                                    </div>
                                    <div class="form-group">
                                        <label for="designation">Designation</label>
                                        <input type="text" class="form-control" id="designation" name="designation" value="{{ $teams->designation }}" placeholder="Enter designation">
                                    </div>
                                    <div class="form-group">
                                        <label for="gender">Gender</label>
                                        <select class="form-control" id="gender" name="gender">
                                            <option value="male" {{ $teams->gender == 'male' ? 'selected' : '' }}>Male</option>
                                            <option value="female" {{ $teams->gender == 'female' ? 'selected' : '' }}>Female</option>
                                            <option value="other" {{ $teams->gender == 'other' ? 'selected' : '' }}>Other</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="phone">Phone</label>
                                        <input type="text" class="form-control" id="phone" name="phone" value="{{ $teams->phone }}" placeholder="Enter phone number">
                                    </div>
                                    <div class="form-group">
                                        <label for="image">Image</label>
                                        <input type="file" class="form-control-file" id="image" name="image">
                                        @if ($teams->image)
                                            <img src="{{ asset('team/' . $teams->image) }}" alt="Image" style="width: 50px; height:50px; margin-top: 10px;">
                                        @else
                                            No Image
                                        @endif
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        @include('layouts.footer')

    </div>

    <!-- Required vendors -->
    @include('layouts.script')

</body>

</html>
