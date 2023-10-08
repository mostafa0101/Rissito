<x-guest-layout>

    <div id="home" class="banner-area">

        <!-- Backgound Image -->
        <div class="bg-image bg-parallax overlay" style="background-image:url(./img/background02.jpg)"></div>
        <!-- /Backgound Image -->

        <div class="home-wrapper">

            <div class="col-md-10 col-md-offset-1 text-center">
                <div class="home-content">
                    <h1 class="white-text">Welcome To Risotto Restaurant</h1>
                    <h4 class="white-text lead">Nec solet elaboraret eu, ea usu vidit accusam. Ea per legimus singulis percipitur. Graecis ullamcorper nec ex, vix euismod detraxit voluptaria at.</h4>
                    <a href="{{route('menus.index')}}"><button class="main-button">Discover Menu</button></a>
                </div>
            </div>

        </div>

    </div>
    <!-- /Home -->

    <!-- About -->
    <div id="about" class="section">

        <!-- container -->
        <div class="container">

            <!-- row -->
            <div class="row">

                <!-- section header -->
                <div class="section-header text-center">
                    <h4 class="sub-title">About Us</h4>
                    <h2 class="title">The Risotto Restaurant</h2>
                </div>
                <!-- /section header -->

                <!-- about content -->
                <div class="col-md-5">
                    <h4 class="lead">Welcome to Risotto Restaurant. Since 1988, Offering Traditional Dishes of the highest quality.</h4>
                </div>
                <!-- /about content -->

                <!-- about content -->
                <div class="col-md-7">
                    <p>Te sit stet labitur veritus, sea similique consetetur ut. Ne fastidii oportere usu. Iusto mediocrem iudicabit ea eos, nemore offendit detraxit ei cum. Oblique conclusionemque qui cu, eum no sonet putant. Eos cu nulla vidisse. Mazim oporteat eam ex, his ei audiam audire, affert corrumpit pri cu.</p>
                </div>
                <!-- /about content -->

                <!-- Gallery Slider -->
                <div class="col-md-12">
                    <div id="Gallery" class="owl-carousel owl-theme">

                        <!-- single column -->
                        <div class="Gallery-item">

                            <!-- single image -->
                            <div class="Gallery-img" style="background-image:url(./img/image01.jpg)"></div>
                            <!-- /single image -->

                        </div>
                        <!-- single column -->

                        <!-- single column -->
                        <div class="Gallery-item">

                            <!-- single image -->
                            <div class="Gallery-img" style="background-image:url(./img/image02.jpg)"></div>
                            <!-- /single image -->

                            <!-- single image -->
                            <div class="Gallery-img" style="background-image:url(./img/image03.jpg)"></div>
                            <!-- /single image -->

                        </div>
                        <!-- single column -->

                        <!-- single column -->
                        <div class="Gallery-item">

                            <div class="item-column">
                                <!-- single image -->
                                <div class="Gallery-img" style="background-image:url(./img/image04.jpg)"></div>
                                <!-- /single image -->

                                <!-- single image -->
                                <div class="Gallery-img" style="background-image:url(./img/image05.jpg)"></div>
                                <!-- /single image -->
                            </div>

                            <div class="item-column">
                                <!-- single image -->
                                <div class="Gallery-img" style="background-image:url(./img/image06.jpg)"></div>
                                <!-- /single image -->

                                <!-- single image -->
                                <div class="Gallery-img" style="background-image:url(./img/image07.jpg)"></div>
                                <!-- /single image -->
                            </div>

                        </div>
                        <!-- /single column -->

                    </div>
                </div>
                <!-- /Gallery Slider -->


            </div>
            <!-- /row -->

        </div>
        <!-- /container -->

    </div>
    <!-- /About -->


    <!-- Menu -->
    <div id="menu" class="section">

        <!-- Backgound Image -->
        <div class="bg-image bg-parallax overlay" style="background-image:url(./img/background01.jpg)"></div>
        <!-- /Backgound Image -->

        <!-- container -->
        <div class="container">

            <!-- row -->
            <div class="row">

                <div class="section-header text-center">
                    <h4 class="sub-title">Discover</h4>
                    <h2 class="title white-text">Our Menu</h2>
                </div>

                <!-- menu nav -->
                <ul class="menu-nav">
                    @foreach($category as $c)
                        <li class="active"><a data-toggle="tab" href="#menu1">{{$c->name}}</a></li>
                    @endforeach
                </ul>
                <!-- /menu nav -->

                <!-- menu content -->
                <div id="menu-content" class="tab-content">

                    <!-- menu1 -->
                    <div id="menu1" class="tab-pane fade in active">
                        <div class="col-md-6">

                            <!-- single dish -->
                            @foreach($menu as $m)
                                <div class="single-dish">
                                    <div class="single-dish-heading">
                                        <h4 class="name">{{$m->name}}</h4>
                                        <h4 class="price">{{$m->price}}$</h4>
                                    </div>
                                    <p></p>
                                </div>
                            @endforeach
                            <!-- /single dish -->
                        </div>
                    </div>
                    <!-- /menu1 -->

                </div>
                <!-- /menu content -->

            </div>
            <!-- /row -->

        </div>
        <!-- /container -->

    </div>
    <!-- /Menu -->


    <!-- Events -->
    <div id="events" class="section">

        <!-- container -->
        <div class="container">

            <!-- row -->
            <div class="row">

                <!-- section header -->
                <div class="section-header text-center">
                    <h4 class="sub-title">Special Event</h4>
                    <h2 class="title">Upcoming Event</h2>
                </div>
                <!-- /section header -->

                <!-- single event -->
                <div class="col-md-6">
                    <div class="event">
                        <div class="event-img">
                            <img src="./img/event01.jpg" alt="">
                            <div class="event-day">
                                <span>08<br>July</span>
                            </div>
                        </div>
                        <div class="event-content">
                            <p><i class="fa fa-clock-o"></i> 8.00PM - 10.00PM</p>
                            <h3><a href="blog.html">te vero tritani iuvaret vis. Nec odio periculis adipiscing an.</a></h3>
                            <p>Te sit stet labitur veritus, sea similique consetetur ut. Ne fastidii oportere usu. Iusto mediocrem iudicabit ea eos, nemore offendit detraxit ei cum.</p>
                        </div>
                    </div>
                </div>
                <!-- /single event -->

                <!-- single event -->
                <div class="col-md-6">
                    <div class="event">
                        <div class="event-img">
                            <img src="./img/event02.jpg" alt="">
                            <div class="event-day">
                                <span>08<br>July</span>
                            </div>
                        </div>
                        <div class="event-content">
                            <p><i class="fa fa-clock-o"></i> 8.00PM - 10.00PM</p>
                            <h3><a href="#">te vero tritani iuvaret vis. Nec odio periculis adipiscing an.</a></h3>
                            <p>Te sit stet labitur veritus, sea similique consetetur ut. Ne fastidii oportere usu. Iusto mediocrem iudicabit ea eos, nemore offendit detraxit ei cum.</p>
                        </div>
                    </div>
                </div>
                <!-- /single event -->

                <!-- single event -->
                <div class="col-md-6">
                    <div class="event">
                        <div class="event-img">
                            <img src="./img/event02.jpg" alt="">
                            <div class="event-day">
                                <span>08<br>July</span>
                            </div>
                        </div>
                        <div class="event-content">
                            <p><i class="fa fa-clock-o"></i> 8.00PM - 10.00PM</p>
                            <h3><a href="#">te vero tritani iuvaret vis. Nec odio periculis adipiscing an.</a></h3>
                            <p>Te sit stet labitur veritus, sea similique consetetur ut. Ne fastidii oportere usu. Iusto mediocrem iudicabit ea eos, nemore offendit detraxit ei cum.</p>
                        </div>
                    </div>
                </div>
                <!-- /single event -->

                <!-- single event -->
                <div class="col-md-6">
                    <div class="event">
                        <div class="event-img">
                            <img src="./img/event01.jpg" alt="">
                            <div class="event-day">
                                <span>08<br>July</span>
                            </div>
                        </div>
                        <div class="event-content">
                            <p><i class="fa fa-clock-o"></i> 8.00PM - 10.00PM</p>
                            <h3><a href="#">te vero tritani iuvaret vis. Nec odio periculis adipiscing an.</a></h3>
                            <p>Te sit stet labitur veritus, sea similique consetetur ut. Ne fastidii oportere usu. Iusto mediocrem iudicabit ea eos, nemore offendit detraxit ei cum.</p>
                        </div>
                    </div>
                </div>
                <!-- /single event -->

            </div>
            <!-- /row -->

        </div>
        <!-- /container -->

    </div>
    <!-- /Events -->



    <!-- Contact -->
    <div id="contact" class="section">

        <!-- opening time -->
        <div class="col-md-4 col-md-offset-30 col-sm-10  col-sm-offset-2">
            <div class="opening-time row">
                <div class="section-header text-center">
                    <h2 class="title white-text">Opening Time</h2>
                </div>
                <ul>
                    <li>
                        <h4 class="day">Sunday</h4>
                        <h4 class="hours">8:00 am – 11:00 pm</h4>
                    </li>
                    <li>
                        <h4 class="day">Monday</h4>
                        <h4 class="hours">8:00 am – 11:00 pm</h4>
                    </li>
                    <li>
                        <h4 class="day">Tuesday</h4>
                        <h4 class="hours">8:00 am – 11:00 pm</h4>
                    </li>
                    <li>
                        <h4 class="day">Wednesday</h4>
                        <h4 class="hours">8:00 am – 11:00 pm</h4>
                    </li>
                    <li>
                        <h4 class="day">Thursday</h4>
                        <h4 class="hours">8:00 am – 11:00 pm</h4>
                    </li>
                    <li>
                        <h4 class="day">Friday</h4>
                        <h4 class="hours">Closed</h4>
                    </li>
                    <li>
                        <h4 class="day">Saturday</h4>
                        <h4 class="hours">Closed</h4>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /opening time -->


        <!-- container -->
        <div class="container">

            <!-- row -->
            <div class="row">

                <div class="col-md-4 col-md-offset-0">
                    <div class="section-header">
                        <h4 class="sub-title">Contact Us</h4>
                        <h2 class="title">Get In Touch</h2>
                    </div>
                    <div class="contact-content">
                        <p>Te sit stet labitur veritus, sea similique consetetur ut. Ne fastidii oportere usu. Iusto mediocrem iudicabit ea eos, nemore offendit detraxit ei cum.</p>
                        <h3>Tel: <a href="#">045-548-14-97</a></h3>
                        <p>Address: 3685 Granville Lane</p>
                        <p>Email: <a href="#">Risotto@email.com</a></p>
                        <ul class="list-inline">
                            <li><p>Follow Us:</p></li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div>

            </div>
            <!-- /row -->

        </div>
        <!-- /container -->

        <!-- map -->
        <div id="map"></div>
        <!-- /map -->

    </div>
    <!-- Contact -->




    <!-- Footer -->
    <footer id="footer">

        <!-- container -->
        <div class="container">

            <!-- row -->
            <div class="row">

                <!-- footer nav -->
                <div class="col-md-6">
                    <nav class="footer-nav">
                        <a href="">Home</a>
                        <a href="">About</a>
                        <a href="">Menu</a>
                        <a href="">Reservation</a>
                        <a href="">Events</a>
                        <a href="">Contact</a>
                    </nav>
                </div>
                <!-- /footer nav -->

            </div>
            <!-- /row -->

        </div>
        <!-- /container -->

    </footer>
    <!-- /Footer -->

</x-guest-layout>
