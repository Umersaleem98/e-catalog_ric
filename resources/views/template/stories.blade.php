<style>
    .pagination li.active a {
        background-color: #007bff;
        border-color: #007bff;
        color: white;
    }
    .pagination li a:hover {
        background-color: #0056b3;
        border-color: #0056b3;
        color: white;
    }
</style>


<div class="popular page_section" style="margin-top:-30px">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section_title text-center">
                    <h1>Transformative Tales</h1>
                </div>
            </div>
        </div>

        <div class="row course_boxes" style="margin-top: -20px">
            <div class="col-lg-12 course_box mt-5">
                <div class="card col-12">
                    {{-- <video src="{{ asset('templates/videos/video.mp4') }}" loop class="w-100">
                        Your browser does not support the video tag.
                    </video> --}}

                    <video width="100%" height="500px" loop controls autoplay muted style="object-fit: cover;">
                        <source src="{{ asset('templates/videos/video.mp4') }}" type="video/mp4">
                        {{-- <source src="movie.ogg" type="video/ogg"> --}}
                        Your browser does not support the video tag.
                      </video>
                </div>
            </div>
        </div>

    </div>
</div>
