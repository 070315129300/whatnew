
	<section class="">
		<div class="container">
			<div class="row justify-content-between">
				<div class="col">
					<a class="navbar-brand" href="/">What New <span>cayleb</span></a>
				</div>
				<div class="col d-flex justify-content-end">
					<div class="social-media">
		    		<p class="mb-0 d-flex">
		    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
		    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
		    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
		    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-dribbble"><i class="sr-only">Dribbble</i></span></a>
		    		</p>
	        </div>
				</div>
			</div>
		</div>
		<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">

	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="fa fa-bars"></span> Menu
	      </button>
				<form action="#" class="searchform order-lg-last">
          <div class="form-group d-flex">
            <input type="text" class="form-control pl-3" placeholder="Search">
            <button type="submit" class="form-control search"><span class="fa fa-search"></span></button>
          </div>
        </form>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav mr-auto">
	        	<li class="nav-item active dropdown">
              <a class="nav-link dropdown-toggle" href="/" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">WhatNew</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
              	<a class="dropdown-item" href="/">News</a>

              </div>
            </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="entertainmentnews" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Entertainment</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown04">
                        <a class="dropdown-item" href="entertainmentnews">Page 1</a>
                        <a class="dropdown-item" href="#">Page 2</a>

                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="businessnews" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Business</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown04">
                        <a class="dropdown-item" href="businessnews">Businessnews</a>

                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="travel" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Travel</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown04">
                        <a class="dropdown-item" href="travel">All Tour</a>
                        <a class="dropdown-item" href="tournigeria">Tour De Nigeria</a>
                        <a class="dropdown-item" href="tourworld">Tour De World</a>

                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="lifestyle" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Life Style</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown04">
                        <a class="dropdown-item" href="lifestyle">All Life Style</a>
                        <a class="dropdown-item" href="lagosstyle">Lagos Life Style</a>
                        <a class="dropdown-item" href="abujastyle">Abuja Life Style</a>

                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="video" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Video</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown04">
                        <a class="dropdown-item" href="video">All Videos</a>
                        <a class="dropdown-item" href="funnyvideos">Funny Video </a>
                        <a class="dropdown-item" href="football">Football</a>
                    </div>
                </li>
            @if (Route::has('login'))
                    <a href="{{ url('/') }}" class="nav-link"></a>

                    @auth
                @else
                <li class="nav-item"><a href="{{ route('login') }}" class="nav-link">Login</a></li>
                        @if (Route::has('register'))
                <li class="nav-item"><a href="{{ route('register') }}" class="nav-link">Register</a></li>
                            @endif
                        @endauth
                @endif

            </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->

	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>


