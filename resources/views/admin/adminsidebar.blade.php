<body>
<div class="container-scroller">
<!-- partial:partials/_sidebar.html -->
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
{{--        <a class="sidebar-brand brand-logo" href="{{url('dashboard')}}"><img src="assets/images/logo.svg" alt="logo" /></a>--}}
{{--        <a class="sidebar-brand brand-logo-mini" href="{{url('dashboard')}}"><img src="assets/images/logo-mini.svg" alt="logo" /></a>--}}
    </div>
    <ul class="nav">

{{--        fetch pixture name from database--}}
        <li class="nav-item profile">
            <div class="profile-desc">
                <div class="profile-pic">
                    <div class="count-indicator">
                        <img class="img-xs rounded-circle " src="assets/images/faces/face1.jpg" alt="">
                        <span class="count bg-success"></span>
                    </div>
                    <div class="profile-name">
                        <h5 class="mb-0 font-weight-normal">{{ Auth::user()->name }}</h5>

                    </div>
                </div>
        </li>
        <li class="nav-item nav-category">
            <span class="nav-link">Navigation</span>
        </li>

        <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('dashboard')}}">
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>


        <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('addstaff')}}">
              <span class="menu-icon">
                <i class="mdi mdi-playlist-play"></i>
              </span>
                <span class="menu-title">Add Staff</span>
            </a>
        </li>

        <li class="nav-item menu-items">
            <a class="nav-link" href="addadmin">
              <span class="menu-icon">
                <i class="mdi mdi-playlist-play"></i>
              </span>
                <span class="menu-title">Add User</span>
            </a>
        </li>



        <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('allstaff')}}">
              <span class="menu-icon">
                <i class="mdi mdi-table-large"></i>
              </span>
                <span class="menu-title">allstaff</span>
            </a>
        </li>



</nav>
