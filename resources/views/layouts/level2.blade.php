<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Velemajstor</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="location listing creative">
    <meta name="author" content="CodePassenger">

    <!-- google fonts -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Dosis:100,200,300,400,500,600,700,800,900" rel="stylesheet"> -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4"
          crossorigin="anonymous">
    <link rel="stylesheet" href="../../public/css/themify-icons.css">
    <link rel="stylesheet" href="../../public/css/simple-line-icons.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
          crossorigin="anonymous">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.0/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="../../public/css/magnific-popup.css">

    <!-- BX Slider CSS -->
    <link rel="stylesheet" href="../../public/css/jquery.bxslider.css">

    <link rel="stylesheet" href="../../public/css/style.css">

    <link rel="stylesheet" href="../../public/css/responsive.css">

    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAK7FxGgMUYw-6i8Xjw-AZ5JO70H9w3Am8&libraries=places&region=BA&types=(cities)"></script>
</head>

<body>
<div class="main-wrap">
    <!-- Main Navigation -->
    <div class="main-nav-section">
        <nav class="navbar navbar-expand-lg fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ route('index') }}">
                    <span class="icon ti-user"></span>
                    <b>VELE</b>Majstor
                </a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars navbar-toggle-btn" aria-hidden="true"></i>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarCollapse">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="icon ti-home"></i>
                            </a>
                        </li>

                        @auth
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink3" data-toggle="dropdown" aria-haspopup="true"
                                   aria-expanded="false">
                                    {{ Auth::user()->name }}
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink3">
                                    <li>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                            </li>
                    </ul>
                </div>
                @else
                <div class="user-panel">
                        <a href="{{ route('login') }}" class="user-login-btn border-btn">
                            <i class="fa fa-user-o" aria-hidden="true"></i>Login
                        </a>
                        <a href="{{ route('register') }}" class="user-login-btn border-btn">
                            <i class="fa fa-user-o" aria-hidden="true"></i>Register
                        </a>
                    @endauth
                </div>
            </div>
        </nav>
    </div>
    <!-- main nav section -->
    <div class="main-header-section main-header-section-two">
        <div class="overlay"></div>

        @yield('content')

    </div>
</div>
<!-- main-header section -->

<!-- side search -->

<a href="#" id="slide-nav-trigger" class="slide-nav-trigger">
    <i class="fa fa-bars" aria-hidden="true"></i>
    Dashboard Navigation
</a>
<div class="slide-menu-wrap">
    <nav id="cbp-spmenu-s1" class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left">
        <!-- <div class="user-profile-block">
            <div>
                <div class="user-thumb">
                    <img src="images/misc/9.jpg" alt="img" class="img-responsive">
                </div>
                <div class="user-info">
                    <h5>
                        Robert Smith
                    </h5>
                    <span>UI Designer</span>
                </div>
            </div>
            <a href="#" class="listing-btn-cmn">Update Profile</a>
        </div> -->
        <div class="slide-navigation-wrap">
            <div class="nav-item">
                <a href="{{ route('jobs') }}">
                    <span class="menu-icon-wrap icon ti-layers-alt"></span>
                    <span class="menu-title">Svi poslovi</span>
                </a>
            </div>
        </div>

        @auth
            @if(Auth::user()->hasRole('majstor'))
                <div class="slide-navigation-wrap">
                    <div class="nav-item">
                        <a href="{{ route('post_job') }}">
                            <span class="menu-icon-wrap icon ti-pencil-alt"></span>
                            <span class="menu-title">Postavi posao</span>
                        </a>
                    </div>
                </div>

                <div class="slide-navigation-wrap">
                    <div class="nav-item">
                        <a href="{{ route('my_jobs', ['id' => Auth::user()->id]) }}">
                            <span class="menu-icon-wrap icon ti-check-box"></span>
                            <span class="menu-title">Moji poslovi</span>
                        </a>
                    </div>
                </div>
            @endif

            @if(Auth::user()->hasRole('admin'))
                <div class="slide-navigation-wrap">
                    <div class="nav-item">
                        <a href="{{ route('show_new_jobs') }}">
                            <span class="menu-icon-wrap icon ti-check-box"></span>
                            <span class="menu-title">Novi poslovi</span>
                        </a>
                    </div>
                </div>

                <div class="slide-navigation-wrap">
                    <div class="nav-item">
                        <a href="{{ route('categories') }}">
                            <span class="menu-icon-wrap icon ti-clipboard"></span>
                            <span class="menu-title">Kategorije</span>
                        </a>
                    </div>
                </div>

                <div class="slide-navigation-wrap">
                    <div class="nav-item">
                        <a href="{{ route('new_category') }}">
                            <span class="menu-icon-wrap icon ti-pencil-alt"></span>
                            <span class="menu-title">Dodaj kategoriju</span>
                        </a>
                    </div>
                </div>

                <div class="slide-navigation-wrap">
                    <div class="nav-item">
                        <a href="{{ route('users') }}">
                            <span class="menu-icon-wrap icon ti-clipboard"></span>
                            <span class="menu-title">Korisnici</span>
                        </a>
                    </div>
                </div>
            @endif

        <div class="slide-navigation-wrap">
            <div class="nav-item">
                <a href="{{ route('profile') }}">
                    <span class="menu-icon-wrap icon ti-user"></span>
                    <span class="menu-title">Moj Profil</span>
                </a>
            </div>
        </div>
        @endauth
    </nav>
</div>
<!-- side search end -->

</div>
</div>
<script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm"
        crossorigin="anonymous"></script>
<script src="../../public/js/jquery.bxslider.js"></script>
<script src="../../public/js/jquery.magnific-popup.min.js"></script>
<script src="../../public/js/jquery.ajaxchimp.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="
        crossorigin="anonymous"></script>
<script src="../../public/js/jquery.waypoints.min.js"></script>
<script src="../../public/js/jquery.counterup.min.js"></script>
<script src="../../public/js/lobipanel.min.js"></script>
<script src="../../public/js/jquery.accordion.js"></script>
<script src="../../public/js/jquery.slimscroll.min.js"></script>
<!-- Google-map -->
<!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAmiJjq5DIg_K9fv6RE72OY__p9jz0YTMI"></script> -->
<script src="../public/js/custom.js"></script>
<script type='text/javascript'>
    var element = $(this);
    var map;
    function initialize(myCenter, selector) {
        var marker = new google.maps.Marker({
            position: myCenter
        });
        var mapProp = {
            center: myCenter,
            zoom: 8,
            draggable: false,
            scrollwheel: false,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        map = new google.maps.Map(selector, mapProp);
        marker.setMap(map);
    };

    $('#post_listing_modal_one').on('shown.bs.modal', function (e) {
        var element = $(e.relatedTarget);
        var data = element.data("lat").split(',')
        initialize(new google.maps.LatLng(data[0], data[1]), document.getElementById("listing_post_map_one"));
        google.maps.event.trigger(map, 'resize');
    });
    $('#post_listing_modal_two').on('shown.bs.modal', function (e) {
        var element = $(e.relatedTarget);
        var data = element.data("lat").split(',')
        initialize(new google.maps.LatLng(data[0], data[1]), document.getElementById("listing_post_map_two"));
        google.maps.event.trigger(map, 'resize');
    });
    $('#post_listing_modal_three').on('shown.bs.modal', function (e) {
        var element = $(e.relatedTarget);
        var data = element.data("lat").split(',')
        initialize(new google.maps.LatLng(data[0], data[1]), document.getElementById("listing_post_map_three"));
        google.maps.event.trigger(map, 'resize');
    });
</script>
</body>

</html>