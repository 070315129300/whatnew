@include('css');
@include('navbar')



<div class="container">
    <div class="row">
        <div class="col-12">
            advert
        </div>
        <div class="row">
            <div class="col-6">
                <div class="banner-box" style="background-image: url('images/image2.jpg');">
                    <h4>Crazy deals</h4>
                    <h4>Smell good, it your right</h4>
                    <span>The best perfume deal at demmstore</span>
                    <button class="btn btn-outline-secondary">learn more</button>
                </div>
            </div>
            <div class="col-6">
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

<div class="container mt-5">
    <div class="row">
        <div class="col-12" id="main">
            {{--            main side start--}}
            <div id="mainsideses">
                <div class="row">
                    <div class="col-12 mb-3">
                        <h4>entertainment</h4>
                        <hr>
                    </div>

                    <div class="row mt-2">
                        @foreach($user as $users)
                        <div class="col-6 border" >
                            <img src="lifestyleimage/{{$users->image}}" alt="lifestyle" width="100%" height="200px"><br>
                            <button>entertainment new</button>
                            <br>
                            <span>{{$users->title}}</span><br>
                            <span>{{$users->date}}</span>
                        </div>
                        <div class="col-6">
                            <div col-12>hi</div>
                            <div col-12>hi</div>
                            <div col-12>hi</div>
                        </div>
                        @endforeach
                    </div>
                </div>


                <div class="row">
                    <div class="col-12">
                        <h4> latest article</h4>
                    </div>
                </div>
                <div class="row mb-5">
                    <div class="col-6">hi</div>
                    <div class="col-6">hi</div>
                    <div class="col-6">hi</div>
                    <div class="col-6">hi</div>
                    <div class="col-6">hi</div>
                    <div class="col-6">hi</div>
                    <div class="col-6">hi</div>
                    <div class="col-6">hi</div>
                    <div class="col-6">hi</div>
                    <div class="col-6">hi</div>
                    <div class="col-6">hi</div>
                    <div class="col-6">hi</div>
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
