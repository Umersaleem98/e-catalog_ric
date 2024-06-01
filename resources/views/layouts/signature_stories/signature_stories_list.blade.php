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
                                <h4 class="card-title">Signature Stories List</h4>
                            </div>
                            <div class="card-body col-lg-8">
                                <table class="table table-bordered">
                                    <tr>
                                        <th>Id</th>
                                        <th>Title</th>
                                        <th>Content</th>
                                        <th>Images</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                    @foreach ($SignatureStories as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->title }}</td>
                                        <td>{{ $item->content }}</td>
                                        <td>
                                            @if ($item->images)
                                                <img src="{{ asset('signature_storie_images/'.$item->images) }}" alt="Image" style="width: 50px; height:50px;">
                                            @else
                                                No Image
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ url('signature_stories_edit', $item->id) }}" class="btn btn-primary">Edit</a>
                                        </td>
                                        <td>
                                            <a href="{{ url('signature_stories_delete', $item->id) }}" class="btn btn-danger">Edit</a>
                                        </td>

                                    </tr>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                        {{ $SignatureStories->links() }}
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
