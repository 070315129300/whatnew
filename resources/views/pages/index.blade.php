@include('css');
@include('navbar')



<div class="container">
    <div class="row">
        <div class="col-12">
            advert
        </div>
        <div class="row">
            <div class="col-7">
                <div class="banner-box" style="background-image: url('images/image2.jpg');">
                    <h4>Crazy deals</h4>
                    <h4>Smell good, it your right</h4>
                    <span>The best perfume deal at demmstore</span>
                    <button class="btn btn-outline-secondary">learn more</button>
                </div>
            </div>
            <div class="col-4">
                <div class="row">
                    <div class="col-6">
                        <div class="banner-box1" style="background-image: url('images/image2.jpg');">
                            <h4>Crazy deals</h4>
                            <h4>Smell good, it your right</h4>
                            <span>The best perfume deal at demmstore</span>
                            <button class="btn btn-outline-secondary">learn more</button>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="banner-box1" style="background-image: url('images/image2.jpg');">
                            <h4>Crazy deals</h4>
                            <h4>Smell good, it your right</h4>
                            <span>The best perfume deal at demmstore</span>
                            <button class="btn btn-outline-secondary">learn more</button>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="banner-box2" style="background-image: url('images/image2.jpg');">
                            <h4>Crazy deals</h4>
                            <h4>Smell good, it your right</h4>
                            <span>The best perfume deal at demmstore</span>
                            <button class="btn btn-outline-secondary">learn more</button>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="banner-box3" style="background-image: url('images/image2.jpg');">
                            <h4>Crazy deals</h4>
                            <h4>Smell good, it your right</h4>
                            <span>The best perfume deal at demmstore</span>
                            <button class="btn btn-outline-secondary">learn more</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
{{--advert can stay here--}}

<div class="container ">
    <div class="row">
        <div class="col-12" id="main">
            {{--            main side start--}}
            <div id="mainsideses">
                <div class="row">
{{--                    start business--}}
                    <div class="col-12">
                        <h4>Business</h4>
                        <hr>
                    </div>

                    <div class="row mt-2">
                        @foreach($business as $users)
                            <div class="col-6 borders" >
                                <img src="businessimage/{{$users->image}}" alt="lifestyle" width="100%" height="250px"><br>
                                <button class="mt-3">business</button>
                                <br>
                                <span>{{$users->title}}</span><br>
                                <span>{{$users->date}}</span>
                            </div>
                        @endforeach
                        <div class="col-6">
                            @foreach($business as $users)
                                <div class="col-12 "  id="lifestyleflex">
                                    <div id="lifestylebox1">
                                        <img src="businessimage/{{$users->image}}" alt="lifestyle" >
                                    </div>
                                    <div id="lifestylebox2">
                                        <button>business</button>
                                        <span>{{$users->title}}</span>
                                        <span>{{$users->date}}</span>
                                    </div>

                                </div>
                            @endforeach

                            @foreach($business as $users)
                                <div class="col-12 mt-2" id="lifestyleflex">
                                    <div id="lifestylebox1">
                                        <img src="businessimage/{{$users->image}}" alt="lifestyle" >
                                    </div>
                                    <div id="lifestylebox2">
                                        <button>business</button>
                                        <span>{{$users->title}}</span>
                                        <span>{{$users->date}}</span>
                                    </div>

                                </div>
                            @endforeach

                            @foreach($business as $users)
                                <div class="col-12 mt-2" id="lifestyleflex">
                                    <div id="lifestylebox1">
                                        <img src="businessimage/{{$users->image}}" alt="lifestyle" >
                                    </div>
                                    <div id="lifestylebox2">
                                        <button>business</button>
                                        <span>{{$users->title}}</span>
                                        <span>{{$users->date}}</span>
                                    </div>

                                </div>
                            @endforeach

                            @foreach($business as $users)
                                <div class="col-12 mt-2" id="lifestyleflex">
                                    <div id="lifestylebox1">
                                        <img src="businessimage/{{$users->image}}" alt="lifestyle" >
                                    </div>
                                    <div id="lifestylebox2">
                                        <button>business</button>
                                        <span>{{$users->title}}</span>
                                        <span>{{$users->date}}</span>
                                    </div>

                                </div>
                            @endforeach


                        </div>

                    </div>
                </div>

{{--                start entertainment--}}
                <div class="row">
                    <div class="col-12">
                        <h4>Entertainment</h4>
                        <hr>
                    </div>

                    <div class="row mt-2">
                        @foreach($entertainment as $users)
                            <div class="col-6 borders" >
                                <img src="entertainmentimage/{{$users->image}}" alt="lifestyle" width="100%" height="250px"><br>
                                <button class="mt-3">entertainment</button>
                                <br>
                                <span>{{$users->title}}</span><br>
                                <span>{{$users->date}}</span>
                            </div>
                        @endforeach
                        <div class="col-6">
                            @foreach($entertainment as $users)
                                <div class="col-12 "  id="lifestyleflex">
                                    <div id="lifestylebox1">
                                        <img src="entertainmentimage/{{$users->image}}" alt="lifestyle" >
                                    </div>
                                    <div id="lifestylebox2">
                                        <button>entertainment</button>
                                        <span>{{$users->title}}</span>
                                        <span>{{$users->date}}</span>
                                    </div>

                                </div>
                            @endforeach

                            @foreach($entertainment as $users)
                                <div class="col-12 mt-2" id="lifestyleflex">
                                    <div id="lifestylebox1">
                                        <img src="entertainmentimage/{{$users->image}}" alt="lifestyle" >
                                    </div>
                                    <div id="lifestylebox2">
                                        <button>entertainment</button>
                                        <span>{{$users->title}}</span>
                                        <span>{{$users->date}}</span>
                                    </div>

                                </div>
                            @endforeach

                            @foreach($entertainment as $users)
                                <div class="col-12 mt-2" id="lifestyleflex">
                                    <div id="lifestylebox1">
                                        <img src="entertainmentimage/{{$users->image}}" alt="lifestyle" >
                                    </div>
                                    <div id="lifestylebox2">
                                        <button>entertainment</button>
                                        <span>{{$users->title}}</span>
                                        <span>{{$users->date}}</span>
                                    </div>

                                </div>
                            @endforeach

                            @foreach($entertainment as $users)
                                <div class="col-12 mt-2" id="lifestyleflex">
                                    <div id="lifestylebox1">
                                        <img src="entertainmentimage/{{$users->image}}" alt="lifestyle" >
                                    </div>
                                    <div id="lifestylebox2">
                                        <button>entertainment</button>
                                        <span>{{$users->title}}</span>
                                        <span>{{$users->date}}</span>
                                    </div>

                                </div>
                            @endforeach


                        </div>

                    </div>
                </div>

{{--                start lifestyle--}}

                <div class="row">
                    <div class="col-12">
                        <h4>Lifestyle</h4>
                        <hr>
                    </div>

                    <div class="row mt-2">
                        @foreach($lifestyle as $users)
                            <div class="col-6 borders" >
                                <img src="lifestyleimage/{{$users->image}}" alt="lifestyle" width="100%" height="250px"><br>
                                <button class="mt-3">lifestyle</button>
                                <br>
                                <span>{{$users->title}}</span><br>
                                <span>{{$users->date}}</span>
                            </div>
                        @endforeach
                        <div class="col-6">
                            @foreach($lifestyle as $users)
                                <div class="col-12 "  id="lifestyleflex">
                                    <div id="lifestylebox1">
                                        <img src="lifestyleimage/{{$users->image}}" alt="lifestyle" >
                                    </div>
                                    <div id="lifestylebox2">
                                        <button>lifestyle</button>
                                        <span>{{$users->title}}</span>
                                        <span>{{$users->date}}</span>
                                    </div>

                                </div>
                            @endforeach

                            @foreach($lifestyle as $users)
                                <div class="col-12 mt-2" id="lifestyleflex">
                                    <div id="lifestylebox1">
                                        <img src="lifestyleimage/{{$users->image}}" alt="lifestyle" >
                                    </div>
                                    <div id="lifestylebox2">
                                        <button>lifestyle</button>
                                        <span>{{$users->title}}</span>
                                        <span>{{$users->date}}</span>
                                    </div>

                                </div>
                            @endforeach

                            @foreach($lifestyle as $users)
                                <div class="col-12 mt-2" id="lifestyleflex">
                                    <div id="lifestylebox1">
                                        <img src="lifestyleimage/{{$users->image}}" alt="lifestyle" >
                                    </div>
                                    <div id="lifestylebox2">
                                        <button>lifestyle</button>
                                        <span>{{$users->title}}</span>
                                        <span>{{$users->date}}</span>
                                    </div>

                                </div>
                            @endforeach

                            @foreach($lifestyle as $users)
                                <div class="col-12 mt-2" id="lifestyleflex">
                                    <div id="lifestylebox1">
                                        <img src="lifestyleimage/{{$users->image}}" alt="lifestyle" >
                                    </div>
                                    <div id="lifestylebox2">
                                        <button>lifestyle</button>
                                        <span>{{$users->title}}</span>
                                        <span>{{$users->date}}</span>
                                    </div>

                                </div>
                            @endforeach


                        </div>

                    </div>
                </div>

{{--                start travel--}}
                <div class="row">
                    <div class="col-12">
                        <h4>Travel</h4>
                        <hr>
                    </div>

                    <div class="row mt-2">
                        @foreach($travel as $users)
                            <div class="col-6 borders" >
                                <img src="travelimage/{{$users->image}}" alt="lifestyle" width="100%" height="250px"><br>
                                <button class="mt-3">travel</button>
                                <br>
                                <span>{{$users->title}}</span><br>
                                <span>{{$users->date}}</span>
                            </div>
                        @endforeach
                        <div class="col-6">
                            @foreach($travel as $users)
                                <div class="col-12 "  id="lifestyleflex">
                                    <div id="lifestylebox1">
                                        <img src="travelimage/{{$users->image}}" alt="lifestyle" >
                                    </div>
                                    <div id="lifestylebox2">
                                        <button>travel</button>
                                        <span>{{$users->title}}</span>
                                        <span>{{$users->date}}</span>
                                    </div>

                                </div>
                            @endforeach

                            @foreach($travel as $users)
                                <div class="col-12 mt-2" id="lifestyleflex">
                                    <div id="lifestylebox1">
                                        <img src="travelimage/{{$users->image}}" alt="lifestyle" >
                                    </div>
                                    <div id="lifestylebox2">
                                        <button>travel</button>
                                        <span>{{$users->title}}</span>
                                        <span>{{$users->date}}</span>
                                    </div>

                                </div>
                            @endforeach

                            @foreach($travel as $users)
                                <div class="col-12 mt-2" id="lifestyleflex">
                                    <div id="lifestylebox1">
                                        <img src="travelimage/{{$users->image}}" alt="lifestyle" >
                                    </div>
                                    <div id="lifestylebox2">
                                        <button>travel</button>
                                        <span>{{$users->title}}</span>
                                        <span>{{$users->date}}</span>
                                    </div>

                                </div>
                            @endforeach

                            @foreach($travel as $users)
                                <div class="col-12 mt-2" id="lifestyleflex">
                                    <div id="lifestylebox1">
                                        <img src="travelimage/{{$users->image}}" alt="lifestyle" >
                                    </div>
                                    <div id="lifestylebox2">
                                        <button>travel</button>
                                        <span>{{$users->title}}</span>
                                        <span>{{$users->date}}</span>
                                    </div>

                                </div>
                            @endforeach


                        </div>

                    </div>
                </div>

{{--                start politic--}}
                <div class="row">
                    <div class="col-12">
                        <h4>Sport</h4>
                        <hr>
                    </div>

                    <div class="row mt-2">
                        @foreach($lifestyle as $users)
                            <div class="col-6 borders" >
                                <img src="lifestyleimage/{{$users->image}}" alt="lifestyle" width="100%" height="250px"><br>
                                <button class="mt-3">sport</button>
                                <br>
                                <span>{{$users->title}}</span><br>
                                <span>{{$users->date}}</span>
                            </div>
                        @endforeach
                        <div class="col-6">
                            @foreach($lifestyle as $users)
                                <div class="col-12 "  id="lifestyleflex">
                                    <div id="lifestylebox1">
                                        <img src="lifestyleimage/{{$users->image}}" alt="lifestyle" >
                                    </div>
                                    <div id="lifestylebox2">
                                        <button>sport</button>
                                        <span>{{$users->title}}</span>
                                        <span>{{$users->date}}</span>
                                    </div>

                                </div>
                            @endforeach

                            @foreach($lifestyle as $users)
                                <div class="col-12 mt-2" id="lifestyleflex">
                                    <div id="lifestylebox1">
                                        <img src="lifestyleimage/{{$users->image}}" alt="lifestyle" >
                                    </div>
                                    <div id="lifestylebox2">
                                        <button>sport</button>
                                        <span>{{$users->title}}</span>
                                        <span>{{$users->date}}</span>
                                    </div>

                                </div>
                            @endforeach

                            @foreach($lifestyle as $users)
                                <div class="col-12 mt-2" id="lifestyleflex">
                                    <div id="lifestylebox1">
                                        <img src="lifestyleimage/{{$users->image}}" alt="lifestyle" >
                                    </div>
                                    <div id="lifestylebox2">
                                        <button>sport</button>
                                        <span>{{$users->title}}</span>
                                        <span>{{$users->date}}</span>
                                    </div>

                                </div>
                            @endforeach

                            @foreach($lifestyle as $users)
                                <div class="col-12 mt-2" id="lifestyleflex">
                                    <div id="lifestylebox1">
                                        <img src="lifestyleimage/{{$users->image}}" alt="lifestyle" >
                                    </div>
                                    <div id="lifestylebox2">
                                        <button>sport</button>
                                        <span>{{$users->title}}</span>
                                        <span>{{$users->date}}</span>
                                    </div>

                                </div>
                            @endforeach


                        </div>

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
