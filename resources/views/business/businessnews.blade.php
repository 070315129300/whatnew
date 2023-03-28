@include('css');
@include('navbar')

<div class="container">
    <div class="row">
        <div class="col-12">
            advert
        </div>

    </div>
</div>
{{--advert can stay here--}}

<div class="container mt-5">
    <div class="row">
        <div class="col-12" id="main">
            {{--            main side start--}}
            <div id="mainsideses">
                <div class="row">
                    <div class="col-12 mb-3">
                        <h4>Business</h4>
                        <hr>
                    </div>

                    <div class="row mt-2">
                        @foreach($user as $users)
                            <div class="col-6 borders" >
                                <img src="businessimage/{{$users->image}}" alt="lifestyle" width="100%" height="250px"><br>
                                <button class="mt-3">business</button>
                                <br>
                                <span>{{$users->title}}</span><br>
                                <span>{{$users->date}}</span>
                            </div>
                        @endforeach

                        @foreach($user as $users)
                            <div class="col-6 borders" >
                                <img src="businessimage/{{$users->image}}" alt="lifestyle" width="100%" height="250px"><br>
                                <button class="mt-3">business</button>
                                <br>
                                <span>{{$users->title}}</span><br>
                                <span>{{$users->date}}</span>
                            </div>
                        @endforeach

                        @foreach($user as $users)
                            <div class="col-6 borders" >
                                <img src="businessimage/{{$users->image}}" alt="lifestyle" width="100%" height="250px"><br>
                                <button class="mt-3">business</button>
                                <br>
                                <span>{{$users->title}}</span><br>
                                <span>{{$users->date}}</span>
                            </div>
                        @endforeach

                        @foreach($user as $users)
                            <div class="col-6 borders" >
                                <img src="businessimage/{{$users->image}}" alt="lifestyle" width="100%" height="250px"><br>
                                <button class="mt-3">business</button>
                                <br>
                                <span>{{$users->title}}</span><br>
                                <span>{{$users->date}}</span>
                            </div>
                        @endforeach

                        @foreach($user as $users)
                            <div class="col-6 borders" >
                                <img src="businessimage/{{$users->image}}" alt="lifestyle" width="100%" height="250px"><br>
                                <button class="mt-3">business</button>
                                <br>
                                <span>{{$users->title}}</span><br>
                                <span>{{$users->date}}</span>
                            </div>
                        @endforeach

                        @foreach($user as $users)
                            <div class="col-6 borders" >
                                <img src="businessimage/{{$users->image}}" alt="lifestyle" width="100%" height="250px"><br>
                                <button class="mt-3">business</button>
                                <br>
                                <span>{{$users->title}}</span><br>
                                <span>{{$users->date}}</span>
                            </div>
                        @endforeach

                    </div>
                </div>



            </div>

            {{--  end main here          --}}


            {{--            wait here pleas side bar right start here--}}
            <div id="side-bar-right">
                <div class="row">
                    <div class="col-12 mb-3">
                        Most popular
                    </div>
                    <div class="row mt-5">
                        <div class="col-12">
                            <p>1</p>
                            <p>2</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            advert only
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

@include('footer')
