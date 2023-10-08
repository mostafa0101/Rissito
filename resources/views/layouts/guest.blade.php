<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Restaurant</title>

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,700%7CCabin:400%7CDancing+Script" rel="stylesheet">

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>

    <!-- Owl Carousel -->
    <link type="text/css" rel="stylesheet" href="css/owl.carousel.css"/>
    <link type="text/css" rel="stylesheet" href="css/owl.theme.default.css"/>

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="css/style.css"/>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->



    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>



</head>

<body>
<header id="header">

    <!-- Top nav -->
    <div id="top-nav">
        <div class="container">

            <!-- logo -->
            <div class="logo">
                <a href="{{route('welcome')}}"><img src="./img/logo.png" alt="logo"></a>
            </div>
            <!-- logo -->

            <!-- Mobile toggle -->
            <button class="navbar-toggle">
                <span></span>
            </button>
            <!-- Mobile toggle -->

            <!-- social links -->
            <ul class="social-nav">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
            </ul>
            <!-- /social links -->

        </div>
    </div>
    <!-- /Top nav -->

    <!-- Bottom nav -->
    <div id="bottom-nav">
        <div class="container">
            <nav id="nav">

                <!-- nav -->
                <ul class="main-nav nav navbar-nav">
                    <li><a href="{{route('welcome')}}">Home</a></li>
                    <li><a href="{{route('categories.index')}}">Categories</a></li>
                    <li><a href="{{route('menus.index')}}">Menu</a></li>
                    <li><a href="{{route('reservations.step.one')}}">Reservation</a></li>
                    <li><a href="">Events</a></li>
                    <li><a href="">Contact</a></li>
                </ul>
                <!-- /nav -->

                <!-- button nav -->
                <ul class="cta-nav">
                    <li><a href="{{route('reservations.step.one')}}" class="main-button">Reserve</a></li>
                </ul>
                <!-- button nav -->

                <!-- contact nav -->
                <ul class="contact-nav nav navbar-nav">
                    <li><a href="tel:0455481497"><i class="fa fa-phone"></i> 045-548-14-97</a></li>
                    <li><a href="#"><i class="fa fa-map-marker"></i> 3685 Granville Lane</a></li>
                </ul>
                <!-- contact nav -->

            </nav>
        </div>
    </div>
    <!-- /Bottom nav -->


</header>

<div class="font-sans text-gray-900 antialiased min-h-screen">
    {{ $slot }}
</div>

</body>

</html>
