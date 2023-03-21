@include('css');
@include('navbar')

<div class="container">
    <div class="row">
        <div class="col-12">
            Welcome to video gallery
        </div>
    </div>
    <div class="row">
        <div class="col-3">
            <video controls autoplay muted width="250">
                <source src='videos/video2.mp4' type='video/mp4'>
            </video>
            <br>
            <span>drake call me on </span>
            <span>12 march 2023</span>
        </div>

        <div class="col-3">

            <video controls autoplay muted width="250">
                <source src='videos/video1.mp4' type='video/mp4'>
            </video>
            <br>
            <span>drake call me on </span>
            <span>12 march 2023</span>
        </div>






    </div>
</div>

@include('footer')
