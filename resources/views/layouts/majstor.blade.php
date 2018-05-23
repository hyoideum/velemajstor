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
    <link rel="stylesheet" href="../public/css/themify-icons.css">
    <link rel="stylesheet" href="../public/css/simple-line-icons.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
          crossorigin="anonymous">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.0/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="../public/css/magnific-popup.css">

    <!-- BX Slider CSS -->
    <link rel="stylesheet" href="../public/css/jquery.bxslider.css">

    <link rel="stylesheet" href="../public/css/style.css">

    <link rel="stylesheet" href="../public/css/responsive.css">

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
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink1">
                                <li>
                                    <a class="dropdown-item" href="listing-map-left.html">Map Left</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="listing-map-right.html">Map Right</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="home-one.html" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true"
                               aria-expanded="false">
                                Pages
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink2">
                                <li>
                                    <a class="dropdown-item" href="home-one.html">Home One</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="dshboard.html" id="navbarDropdownMenuLink3" data-toggle="dropdown" aria-haspopup="true"
                               aria-expanded="false">
                                Dashboard
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink3">
                                <li>
                                    <a class="dropdown-item" href="dashboard.html">Dashboard</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="dashboard-all-listing.html">All listings</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="dashboard-new-listing.html">Add new listings</a>
                                </li>
                            </ul>
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
                <div class="user-panel">
                    @else
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
            <div class="accordion-menu responsive-menu" data-accordion-group>
                <div class="slide-navigation-wrap">
                    <div class="nav-item">
                        <a href="dashboard.html">
                            <span class="menu-icon-wrap icon ti-layers-alt"></span>
                            <span class="menu-title">Dashboard</span>
                        </a>
                    </div>
                </div>
                <div class="slide-navigation-wrap" data-accordion>
                    <div class="nav-item has-sub" data-control>
                        <a href="javascript:void(0)">
                            <span class="menu-icon-wrap icon ti-location-pin"></span>
                            <span class="menu-title">My Listing</span>
                        </a>
                    </div>
                    <div class="menu-content" data-content>
                        <div class="nav-item">
                            <a href="dashboard-all-listing.html">
                                <span class="menu-icon-wrap bullet"></span>
                                <span class="menu-title">All listings</span>
                            </a>
                        </div>
                        <div class="nav-item">
                            <a href="dashboard-new-listing.html">
                                <span class="menu-icon-wrap bullet"></span>
                                <span class="menu-title">Add new listings</span>
                            </a>
                        </div>
                        <div class="nav-item">
                            <a href="dashboard-active-listing.html">
                                <span class="menu-icon-wrap bullet"></span>
                                <span class="menu-title">Active Listings</span>
                            </a>
                        </div>
                        <div class="nav-item">
                            <a href="dashboard-expired-listing.html">
                                <span class="menu-icon-wrap bullet"></span>
                                <span class="menu-title">Expired Listings</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="slide-navigation-wrap">
                    <div class="nav-item">
                        <a href="dashboard-favorites-listing.html">
                            <span class="menu-icon-wrap icon ti-heart"></span>
                            <span class="menu-title">My Favorites</span>
                        </a>
                    </div>
                </div>
                <div class="slide-navigation-wrap" data-accordion>
                    <div class="nav-item has-sub" data-control>
                        <a href="javascript:void(0)">
                            <span class="menu-icon-wrap icon ti-comment-alt"></span>
                            <span class="menu-title">Reviews</span>
                        </a>
                    </div>
                    <div class="menu-content" data-content>
                        <div class="nav-item">
                            <a href="dashboard-all-review.html">
                                <span class="menu-icon-wrap bullet"></span>
                                <span class="menu-title">All Reviews</span>
                            </a>
                        </div>
                        <div class="nav-item">
                            <a href="dashboard-my-review.html">
                                <span class="menu-icon-wrap bullet"></span>
                                <span class="menu-title">My Reviews</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="slide-navigation-wrap" data-accordion>
                    <div class="nav-item has-sub" data-control>
                        <a href="javascript:void(0)">
                            <span class="menu-icon-wrap icon ti-email"></span>
                            <span class="menu-title">Messages</span>
                        </a>
                        <div class="menu-badge-wrap">
                            <span class="menu-badge">5</span>
                        </div>
                    </div>
                    <div class="menu-content" data-content>
                        <div class="nav-item">
                            <a href="dashboard-all-message.html">
                                <span class="menu-icon-wrap bullet"></span>
                                <span class="menu-title">All Messages</span>
                            </a>
                        </div>
                        <div class="nav-item">
                            <a href="dashboard-unread-message.html">
                                <span class="menu-icon-wrap bullet"></span>
                                <span class="menu-title">Unread Messages</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="slide-navigation-wrap" data-accordion>
                    <div class="nav-item has-sub" data-control>
                        <a href="javascript:void(0)">
                            <span class="menu-icon-wrap icon ti-gift"></span>
                            <span class="menu-title">Packages</span>
                        </a>
                    </div>
                    <div class="menu-content" data-content>
                        <div class="nav-item">
                            <a href="dashboard-checkout.html">
                                <span class="menu-icon-wrap bullet"></span>
                                <span class="menu-title">Checkout</span>
                            </a>
                        </div>
                    </div>
                    <div class="menu-content" data-content>
                        <div class="nav-item">
                            <a href="dashboard-package-plan.html">
                                <span class="menu-icon-wrap bullet"></span>
                                <span class="menu-title">Package Plan</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="slide-navigation-wrap">
                    <div class="nav-item">
                        <a href="dashboard-invoices.html">
                            <span class="menu-icon-wrap icon ti-clipboard"></span>
                            <span class="menu-title">Invoices</span>
                        </a>
                    </div>
                </div>
                <div class="slide-navigation-wrap">
                    <div class="nav-item">
                        <a href="dashboard-add-campaign.html">
                            <span class="menu-icon-wrap icon ti-check-box "></span>
                            <span class="menu-title">Add Campaign</span>
                        </a>
                    </div>
                </div>
                <div class="slide-navigation-wrap">
                    <div class="nav-item">
                        <a href="dashboard-claim-refund.html">
                            <span class="menu-icon-wrap icon ti-pencil-alt"></span>
                            <span class="menu-title">Claim & Refund</span>
                        </a>
                    </div>
                </div>
                <div class="slide-navigation-wrap">
                    <div class="nav-item">
                        <a href="dashboard-settings.html">
                            <span class="menu-icon-wrap icon ti-settings"></span>
                            <span class="menu-title">Settings</span>
                        </a>
                    </div>
                </div>
                <div class="slide-navigation-wrap">
                    <div class="nav-item">
                        <a href="dashboard-profile.html">
                            <span class="menu-icon-wrap icon ti-user"></span>
                            <span class="menu-title">My Profile</span>
                        </a>
                    </div>
                </div>
            </div>
        </nav>
    </div>

    <!-- side search end -->

    <div class="page-container-wrap">
        <footer>
            <div class="footer-top-block">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-sm-6">
                            <div class="footer-widget">
                                <div class="footer-logo-block">
                                    <a href="javascript:void(0)">
                                        <img src="images/logo.png" alt="img" class="img-responsive">
                                    </a>
                                </div>
                                <p class="address">
                                    <i class="fa fa-map-marker" aria-hidden="true"></i> Suite # 25/B, Green Street California, CA78542
                                </p>
                                <p>
                                    <i class="fa fa-phone" aria-hidden="true"></i> +1-0000-000-000</p>
                                <p>
                                    <i class="fa fa-envelope-o" aria-hidden="true"></i> info@example.com</p>
                                <div class="footer-social-block">
                                        <span>
                                            Folow us:
                                        </span>
                                    <ul class="social">
                                        <li>
                                            <a href="javascript:void(0)">
                                                <i class="fa fa-facebook" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <i class="fa fa-twitter" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <i class="fa fa-google-plus" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <i class="fa fa-youtube-play" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- footer-social-block -->
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="footer-widget">
                                <h4 class="footer-widget-title">Useful Links</h4>
                                <ul class="footer-content-list">
                                    <li>
                                        <a href="javascript:void(0)">
                                            About ListingGEO
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">
                                            How it Works
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">
                                            Exclusive Listings
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">
                                            Popular Locations
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">
                                            Contact us
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-6">
                            <div class="footer-widget">
                                <h4 class="footer-widget-title">Listing Account</h4>
                                <ul class="footer-content-list">
                                    <li>
                                        <a href="javascript:void(0)">
                                            User Log in
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">
                                            User Registration
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">
                                            Add Listing
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">
                                            Favorite Lisitings
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">
                                            Pricing Plans
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="footer-widget">
                                <h4 class="footer-widget-title">Latest Listings</h4>
                                <article class="latest-post">
                                    <div class="post-thumb">
                                        <!-- <a href="javascript:void(0)">
                                            <img src="images/7.jpg" alt="img" class="img-responsive">
                                        </a> -->
                                    </div>
                                    <div class="post-wrapper">
                                        <h6 class="title">
                                            <a href="javascript:void(0)">
                                                Grand Park Hotel
                                            </a>
                                        </h6>
                                        <p class="post-entry">
                                            175 Church Road, City Tower, California, CA785423
                                        </p>
                                        <div class="post-meta">
                                            <a href="javascript:void(0)" class="post-tag">
                                                Hotel & Resort
                                            </a>
                                        </div>
                                    </div>
                                </article>
                                <article class="latest-post">
                                    <div class="post-thumb">
                                        <!-- <a href="javascript:void(0)">
                                            <img src="images/7.jpg" alt="img" class="img-responsive">
                                        </a> -->
                                    </div>
                                    <div class="post-wrapper">
                                        <h6 class="title">
                                            <a href="javascript:void(0)">
                                                Grand Park Hotel
                                            </a>
                                        </h6>
                                        <p class="post-entry">
                                            175 Church Road, City Tower, California, CA785423
                                        </p>
                                        <div class="post-meta">
                                            <a href="javascript:void(0)" class="post-tag">
                                                Hotel & Resort
                                            </a>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom-block">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 push-md-6">
                            <ul class="footer-nav">
                                <li>
                                    <a href="javascript:void(0)">
                                        Legal
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        Privacy Policy
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        Terms of Use
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6 pull-md-6">
                            <p class="copyright-text">Copyright 2018,
                                <a href="javascript:void(0)">ListingGEO</a>. All Rights Reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>
<script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm"
        crossorigin="anonymous"></script>
<script src="../public/js/jquery.bxslider.js"></script>
<script src="../public/js/jquery.magnific-popup.min.js"></script>
<script src="../public/js/jquery.ajaxchimp.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="
        crossorigin="anonymous"></script>
<script src="../public/js/jquery.waypoints.min.js"></script>
<script src="../public/js/jquery.counterup.min.js"></script>
<script src="../public/js/lobipanel.min.js"></script>
<script src="../public/js/jquery.accordion.js"></script>
<script src="../public/js/jquery.slimscroll.min.js"></script>
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