@include('css');
@include('navbar')

<div class="container">
    <div class="row">
        <div class="col-12">
            Welcome to video gallery
        </div>
    </div>
    <div class="row">
        <div class="col-4">

            <video controls autoplay muted width="400">
                <source src='videos/video2.mp4' type='video/mp4'>
            </video>
            <p>drake call me on </p>
        </div>

        <div class="col-4">

            <video controls autoplay muted width="400">
                <source src='videos/video1.mp4' type='video/mp4'>
            </video>
            <p>drake call me on </p>
        </div>

{{--        @foreach($users as $users)--}}
{{--        <div class="col-4">--}}


{{--            <video controls autoplay muted width="400">--}}
{{--                <source src="whatnewvideo/{{$users->video}}" type='video/mp4'>--}}
{{--            </video>--}}
{{--            <p>{{$users->body}} </p>--}}
{{--            <p>{{$users->date}}</p>--}}
{{--        </div>--}}
{{--        @endforeach--}}



    </div>
</div>
