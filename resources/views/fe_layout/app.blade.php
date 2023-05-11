<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap"
        rel="stylesheet">

    <title>NetKitchen</title>

    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="css/font-awesome.css">

    <link rel="stylesheet" href="css/templatemo-klassy-cafe.css">

    <link rel="stylesheet" href="css/owl-carousel.css">

    <link rel="stylesheet" href="css/lightbox.css">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->


    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    @include('partial_template.navbar')
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Main Banner Area Start ***** -->
    <div id="top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <div class="left-content">
                        <div class="inner-content">
                            <h4>NetKitchen</h4>
                            <h6>THE BEST EXPERIENCE</h6>
                            <div class="main-white-button scroll-to-section">
                                <a href="#reservation">Make A Reservation</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="main-banner header-text">
                        <div class="Modern-Slider">
                            <!-- Item -->
                            <div class="item">
                                <div class="img-fill">
                                    <img src="images/slide-01.jpg" alt="">
                                </div>
                            </div>
                            <!-- // Item -->
                            <!-- Item -->
                            <div class="item">
                                <div class="img-fill">
                                    <img src="images/slide-02.jpg" alt="">
                                </div>
                            </div>
                            <!-- // Item -->
                            <!-- Item -->
                            <div class="item">
                                <div class="img-fill">
                                    <img src="images/slide-03.jpg" alt="">
                                </div>
                            </div>
                            <!-- // Item -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** About Area Starts ***** -->
    <section class="section" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="left-text-content">
                        <div class="section-heading">
                            <h6>About Us</h6>
                            <h2>We Leave A Delicious Memory For You</h2>
                        </div>
                        <p>Klassy Cafe is one of the best <a href="https://templatemo.com/tag/restaurant"
                                target="_blank" rel="sponsored">restaurant HTML templates</a> with Bootstrap v4.5.2 CSS
                            framework. You can download and feel free to use this website template layout for your
                            restaurant business. You are allowed to use this template for commercial purposes.
                            <br><br>You are NOT allowed to redistribute the template ZIP file on any template donwnload
                            website. Please contact us for more information.</p>
                        <div class="row">
                            <div class="col-4">
                                <img src="images/about-thumb-01.jpg" alt="">
                            </div>
                            <div class="col-4">
                                <img src="images/about-thumb-02.jpg" alt="">
                            </div>
                            <div class="col-4">
                                <img src="images/about-thumb-03.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="right-content">
                        <div class="thumb">
                            <a rel="nofollow" href="http://youtube.com"><i class="fa fa-play"></i></a>
                            <img src="images/about-video-bg.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** About Area Ends ***** -->

    <!-- ***** Menu Area Starts ***** -->
    <section class="section" id="menu">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="section-heading">
                        <h6>Our Menu</h6>
                        <h2>Our selection of cakes with quality taste</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="menu-item-carousel">
            <div class="col-lg-12">
                <div class="owl-menu-item owl-carousel">
                    @foreach($products as $item)
                        @if($item->category =='cake')
                            <div class="item">
                                @if($item->id ==7)
                                    <div class='card card1'>
                                        <div class="price">
                                            <h6>${{ $item->price }}</h6>
                                        </div>
                                        <div class='info'>
                                            <h1 class='title'>{{ $item->name }}</h1>
                                            <p class='description'>{{ $item->description }}</p>
                                            <div class="main-text-button">
                                                <div class="scroll-to-section"><a href="#reservation">Make Reservation
                                                        <i class="fa fa-angle-down"></i></a></div>
                                            </div>
                                        </div>
                                    </div>
                                @elseif($item->id ==8)
                                    <div class='card card2'>
                                        <div class="price">
                                            <h6>${{ $item->price }}</h6>
                                        </div>
                                        <div class='info'>
                                            <h1 class='title'>{{ $item->name }}</h1>
                                            <p class='description'>{{ $item->description }}</p>
                                            <div class="main-text-button">
                                                <div class="scroll-to-section"><a href="#reservation">Make Reservation
                                                        <i class="fa fa-angle-down"></i></a></div>
                                            </div>
                                        </div>
                                    </div>
                                    @elseif($item->id ==9)
                                    <div class='card card3'>
                                        <div class="price">
                                            <h6>${{ $item->price }}</h6>
                                        </div>
                                        <div class='info'>
                                            <h1 class='title'>{{ $item->name }}</h1>
                                            <p class='description'>{{ $item->description }}</p>
                                            <div class="main-text-button">
                                                <div class="scroll-to-section"><a href="#reservation">Make Reservation
                                                        <i class="fa fa-angle-down"></i></a></div>
                                            </div>
                                        </div>
                                    </div>
                                    @elseif($item->id ==10)
                                    <div class='card card4'>
                                        <div class="price">
                                            <h6>${{ $item->price }}</h6>
                                        </div>
                                        <div class='info'>
                                            <h1 class='title'>{{ $item->name }}</h1>
                                            <p class='description'>{{ $item->description }}</p>
                                            <div class="main-text-button">
                                                <div class="scroll-to-section"><a href="#reservation">Make Reservation
                                                        <i class="fa fa-angle-down"></i></a></div>
                                            </div>
                                        </div>
                                    </div>
                                    @elseif($item->id ==11)
                                    <div class='card card5'>
                                        <div class="price">
                                            <h6>${{ $item->price }}</h6>
                                        </div>
                                        <div class='info'>
                                            <h1 class='title'>{{ $item->name }}</h1>
                                            <p class='description'>{{ $item->description }}</p>
                                            <div class="main-text-button">
                                                <div class="scroll-to-section"><a href="#reservation">Make Reservation
                                                        <i class="fa fa-angle-down"></i></a></div>
                                            </div>
                                        </div>
                                    </div>                    
                                @endif
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Menu Area Ends ***** -->

    <!-- ***** Reservation Us Area Starts ***** -->
    <section class="section" id="reservation">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <div class="left-text-content">
                        <div class="section-heading">
                            <h6>Contact Us</h6>
                            <h2>Here You Can Make A Reservation Or Just walkin to our cafe</h2>
                        </div>
                        <p>Donec pretium est orci, non vulputate arcu hendrerit a. Fusce a eleifend riqsie, namei
                            sollicitudin urna diam, sed commodo purus porta ut.</p>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="phone">
                                    <i class="fa fa-phone"></i>
                                    <h4>Phone Numbers</h4>
                                    <span><a href="#">080-090-0990</a><br><a href="#">080-090-0880</a></span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="message">
                                    <i class="fa fa-envelope"></i>
                                    <h4>Emails</h4>
                                    <span><a href="#">hello@company.com</a><br><a href="#">info@company.com</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-form">
                        <form id="contact" action="" method="post">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h4>Table Reservation</h4>
                                </div>
                                <div class="col-lg-6 col-sm-12">
                                    <fieldset>
                                        <input name="name" type="text" id="name" placeholder="Your Name*" required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-6 col-sm-12">
                                    <fieldset>
                                        <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*"
                                            placeholder="Your Email Address" required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-6 col-sm-12">
                                    <fieldset>
                                        <input name="phone" type="text" id="phone" placeholder="Phone Number*"
                                            required="">
                                    </fieldset>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <fieldset>
                                        <select value="number-guests" name="number-guests" id="number-guests">
                                            <option value="number-guests">Number Of Guests</option>
                                            <option name="1" id="1">1</option>
                                            <option name="2" id="2">2</option>
                                            <option name="3" id="3">3</option>
                                            <option name="4" id="4">4</option>
                                            <option name="5" id="5">5</option>
                                            <option name="6" id="6">6</option>
                                            <option name="7" id="7">7</option>
                                            <option name="8" id="8">8</option>
                                            <option name="9" id="9">9</option>
                                            <option name="10" id="10">10</option>
                                            <option name="11" id="11">11</option>
                                            <option name="12" id="12">12</option>
                                        </select>
                                    </fieldset>
                                </div>
                                <div class="col-lg-6">
                                    <div id="filterDate2">
                                        <div class="input-group date" data-date-format="dd/mm/yyyy">
                                            <input name="date" id="date" type="text" class="form-control"
                                                placeholder="dd/mm/yyyy">
                                            <div class="input-group-addon">
                                                <span class="glyphicon glyphicon-th"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <fieldset>
                                        <select value="time" name="time" id="time">
                                            <option value="time">Time</option>
                                            <option name="Breakfast" id="Breakfast">Breakfast</option>
                                            <option name="Lunch" id="Lunch">Lunch</option>
                                            <option name="Dinner" id="Dinner">Dinner</option>
                                        </select>
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <textarea name="message" rows="6" id="message" placeholder="Message"
                                            required=""></textarea>
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <button type="submit" id="form-submit" class="main-button-icon">Make A
                                            Reservation</button>
                                    </fieldset>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Reservation Area Ends ***** -->

    <!-- ***** Menu Area Starts ***** -->
    <section class="section" id="offers">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 offset-lg-4 text-center">
                    <div class="section-heading">
                        <h6>Klassy Week</h6>
                        <h2>This Week’s Special Meal Offers</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="row" id="tabs">
                        <div class="col-lg-12">
                            <div class="heading-tabs">
                                <div class="row">
                                    <div class="col-lg-6 offset-lg-3">
                                        <ul>
                                            <li><a href='#tabs-1'><img src="images/tab-icon-01.png" alt="">Breakfast</a>
                                            </li>
                                            <li><a href='#tabs-2'><img src="images/tab-icon-02.png" alt="">Lunch</a></a>
                                            </li>
                                            <li><a href='#tabs-3'><img src="images/tab-icon-03.png"
                                                        alt="">Dinner</a></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <section class='tabs-content'>
                                <article id='tabs-1'>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="left-list">
                                                    @foreach($products as $item)
                                                        @if($item->id < 4 )
                                                            <div class="col-lg-12">
                                                                @if($item->id ==1)
                                                                    <div class="tab-item">
                                                                        <img src="images/tab-item-01.png" alt="">
                                                                        <h4>{{ $item->name }}</h4>
                                                                        <p>{{ $item->description }}</p>
                                                                        <div class="price">
                                                                            <h6>{{ $item->price }}</h6>
                                                                        </div>
                                                                    </div>
                                                                @elseif($item->id==2)
                                                                    <div class="tab-item">
                                                                        <img src="images/tab-item-02.png" alt="">
                                                                        <h4>{{ $item->name }}</h4>
                                                                        <p>{{ $item->description }}</p>
                                                                        <div class="price">
                                                                            <h6>{{ $item->price }}</h6>
                                                                        </div>
                                                                    </div>
                                                                @elseif($item->id==3)
                                                                    <div class="tab-item">
                                                                        <img src="images/tab-item-03.png" alt="">
                                                                        <h4>{{ $item->name }}</h4>
                                                                        <p>{{ $item->description }}</p>
                                                                        <div class="price">
                                                                            <h6>{{ $item->price }}</h6>
                                                                        </div>
                                                                    </div>
                                                                @endif
                                                            </div>

                                                        @endif
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="right-list">
                                                    @foreach($products as $item)
                                                    @if($item->id > 3 and $item->id < 7 )
                                                            <div class="col-lg-12">
                                                                @if($item->id==4)
                                                                    <div class="tab-item">
                                                                        <img src="images/tab-item-04.png" alt="">
                                                                        <h4>{{ $item->name }}</h4>
                                                                        <p>{{ $item->description }}</p>
                                                                        <div class="price">
                                                                            <h6>{{ $item->price }}</h6>
                                                                        </div>
                                                                    </div>
                                                                @elseif($item->id==5)
                                                                    <div class="tab-item">
                                                                        <img src="images/tab-item-05.png" alt="">
                                                                        <h4>{{ $item->name }}</h4>
                                                                        <p>{{ $item->description }}</p>
                                                                        <div class="price">
                                                                            <h6>{{ $item->price }}</h6>
                                                                        </div>
                                                                    </div>
                                                                @elseif($item->id==6)
                                                                    <div class="tab-item">
                                                                        <img src="images/tab-item-06.png" alt="">
                                                                        <h4>{{ $item->name }}</h4>
                                                                        <p>{{ $item->description }}</p>
                                                                        <div class="price">
                                                                            <h6>{{ $item->price }}</h6>
                                                                        </div>
                                                                    </div>
                                                                @endif
                                                            </div>
                                                        @endif
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <article id='tabs-2'>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="left-list">
                                                    @foreach($products as $item)
                                                        @if($item->id < 4 )
                                                            <div class="col-lg-12">
                                                                @if($item->id ==1)
                                                                    <div class="tab-item">
                                                                        <img src="images/tab-item-01.png" alt="">
                                                                        <h4>{{ $item->name }}</h4>
                                                                        <p>{{ $item->description }}</p>
                                                                        <div class="price">
                                                                            <h6>{{ $item->price }}</h6>
                                                                        </div>
                                                                    </div>
                                                                @elseif($item->id==2)
                                                                    <div class="tab-item">
                                                                        <img src="images/tab-item-02.png" alt="">
                                                                        <h4>{{ $item->name }}</h4>
                                                                        <p>{{ $item->description }}</p>
                                                                        <div class="price">
                                                                            <h6>{{ $item->price }}</h6>
                                                                        </div>
                                                                    </div>
                                                                @elseif($item->id==3)
                                                                    <div class="tab-item">
                                                                        <img src="images/tab-item-03.png" alt="">
                                                                        <h4>{{ $item->name }}</h4>
                                                                        <p>{{ $item->description }}</p>
                                                                        <div class="price">
                                                                            <h6>{{ $item->price }}</h6>
                                                                        </div>
                                                                    </div>
                                                                @endif
                                                            </div>

                                                        @endif
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="right-list">
                                                    @foreach($products as $item)
                                                    @if($item->id > 3 and $item->id < 7 )
                                                            <div class="col-lg-12">
                                                                @if($item->id==4)
                                                                    <div class="tab-item">
                                                                        <img src="images/tab-item-04.png" alt="">
                                                                        <h4>{{ $item->name }}</h4>
                                                                        <p>{{ $item->description }}</p>
                                                                        <div class="price">
                                                                            <h6>{{ $item->price }}</h6>
                                                                        </div>
                                                                    </div>
                                                                @elseif($item->id==5)
                                                                    <div class="tab-item">
                                                                        <img src="images/tab-item-05.png" alt="">
                                                                        <h4>{{ $item->name }}</h4>
                                                                        <p>{{ $item->description }}</p>
                                                                        <div class="price">
                                                                            <h6>{{ $item->price }}</h6>
                                                                        </div>
                                                                    </div>
                                                                @elseif($item->id==6)
                                                                    <div class="tab-item">
                                                                        <img src="images/tab-item-06.png" alt="">
                                                                        <h4>{{ $item->name }}</h4>
                                                                        <p>{{ $item->description }}</p>
                                                                        <div class="price">
                                                                            <h6>{{ $item->price }}</h6>
                                                                        </div>
                                                                    </div>
                                                                @endif
                                                            </div>
                                                        @endif
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <article id='tabs-3'>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="left-list">
                                                    @foreach($products as $item)
                                                        @if($item->id < 4 )
                                                            <div class="col-lg-12">
                                                                @if($item->id ==1)
                                                                    <div class="tab-item">
                                                                        <img src="images/tab-item-01.png" alt="">
                                                                        <h4>{{ $item->name }}</h4>
                                                                        <p>{{ $item->description }}</p>
                                                                        <div class="price">
                                                                            <h6>{{ $item->price }}</h6>
                                                                        </div>
                                                                    </div>
                                                                @elseif($item->id==2)
                                                                    <div class="tab-item">
                                                                        <img src="images/tab-item-02.png" alt="">
                                                                        <h4>{{ $item->name }}</h4>
                                                                        <p>{{ $item->description }}</p>
                                                                        <div class="price">
                                                                            <h6>{{ $item->price }}</h6>
                                                                        </div>
                                                                    </div>
                                                                @elseif($item->id==3)
                                                                    <div class="tab-item">
                                                                        <img src="images/tab-item-03.png" alt="">
                                                                        <h4>{{ $item->name }}</h4>
                                                                        <p>{{ $item->description }}</p>
                                                                        <div class="price">
                                                                            <h6>{{ $item->price }}</h6>
                                                                        </div>
                                                                    </div>
                                                                @endif
                                                            </div>

                                                        @endif
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="right-list">
                                                    @foreach($products as $item)
                                                    @if($item->id > 3 and $item->id < 7 )
                                                            <div class="col-lg-12">
                                                                @if($item->id==4)
                                                                    <div class="tab-item">
                                                                        <img src="images/tab-item-04.png" alt="">
                                                                        <h4>{{ $item->name }}</h4>
                                                                        <p>{{ $item->description }}</p>
                                                                        <div class="price">
                                                                            <h6>{{ $item->price }}</h6>
                                                                        </div>
                                                                    </div>
                                                                @elseif($item->id==5)
                                                                    <div class="tab-item">
                                                                        <img src="images/tab-item-05.png" alt="">
                                                                        <h4>{{ $item->name }}</h4>
                                                                        <p>{{ $item->description }}</p>
                                                                        <div class="price">
                                                                            <h6>{{ $item->price }}</h6>
                                                                        </div>
                                                                    </div>
                                                                @elseif($item->id==6)
                                                                    <div class="tab-item">
                                                                        <img src="images/tab-item-06.png" alt="">
                                                                        <h4>{{ $item->name }}</h4>
                                                                        <p>{{ $item->description }}</p>
                                                                        <div class="price">
                                                                            <h6>{{ $item->price }}</h6>
                                                                        </div>
                                                                    </div>
                                                                @endif
                                                            </div>
                                                        @endif
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                              
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Chefs Area Ends ***** -->

    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-xs-12">
                    <div class="right-text-content">
                        <ul class="social-icons">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="logo">
                        <a href="index.html"><img src="images/white-logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-4 col-xs-12">
                    <div class="left-text-content">
                        <p>© Copyright NetKitchen
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="js/owl-carousel.js"></script>
    <script src="js/accordions.js"></script>
    <script src="js/datepicker.js"></script>
    <script src="js/scrollreveal.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/imgfix.min.js"></script>
    <script src="js/slick.js"></script>
    <script src="js/lightbox.js"></script>
    <script src="js/isotope.js"></script>

    <!-- Global Init -->
    <script src="js/custom.js"></script>
    <script>
        $(function () {
            var selectedClass = "";
            $("p").click(function () {
                selectedClass = $(this).attr("data-rel");
                $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("." + selectedClass).fadeOut();
                setTimeout(function () {
                    $("." + selectedClass).fadeIn();
                    $("#portfolio").fadeTo(50, 1);
                }, 500);

            });
        });

    </script>
</body>

</html>
