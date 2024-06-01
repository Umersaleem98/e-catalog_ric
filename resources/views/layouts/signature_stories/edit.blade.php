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
                                <h4 class="card-title">Edit Signature Stories</h4>
                            </div>
                            <div class="card-body col-lg-8">
                                <form action="{{ url('signature_stories_update', ['id' => $SignatureStories->id]) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @csrf
                                    <div class="form-group">
                                        <label for="title">Title</label>
                                        <input type="text" class="form-control" id="title" value="{{ $SignatureStories->title }}" name="title" placeholder="Enter title">
                                    </div>
                                    <div class="form-group">
                                        <label for="content">Content</label>
                                        <textarea class="form-control" id="content" name="content" rows="3" placeholder="Enter content">{{ $SignatureStories->content }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="image">Images</label>
                                        <input type="file" class="form-control-file" id="image" name="images">
                                        @if ($SignatureStories->images)
                                            <img src="{{ asset('images/'.$SignatureStories->images) }}" alt="Image" style="max-width: 100px; margin-top: 10px;">
                                        @else
                                            <span>No Image</span>
                                        @endif
                                    </div>
                                    <button type="submit" class="btn btn-primary">Update</button>
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
