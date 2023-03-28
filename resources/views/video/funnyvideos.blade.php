@include('css');
@include('navbar')

<div class="container">
    <div class="row">
        <div class="col-12">
            Welcome to video gallery
        </div>
    </div>
    <div class="row">
        @foreach($user as $users)
        <div class="col-3">
            <video controls autoplay muted width="250">
                <source src='vivideo/{{$users->video}}' type='video/mp4'>
            </video>

            <br>
            <span>{{$users->title}} </span> <br>
            <span>{{$users->body}}</span>
            <span>{{$users->date}}</span>
        </div>
        @endforeach
    </div>
</div>

@include('footer')
