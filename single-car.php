<?php
include_once ('functions/functions.php');
?>
<!doctype html>
<!--[if lt IE 7]>
<html lang="en" class="no-js ie6"><![endif]-->
<!--[if IE 7]>
<html lang="en" class="no-js ie7"><![endif]-->
<!--[if IE 8]>
<html lang="en" class="no-js ie8"><![endif]-->
<!--[if gt IE 8]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->

<head>
    <meta charset="UTF-8">
    <title>Rent an electric</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <link rel="shortcut icon" href="favicon.png">

    <link rel="stylesheet" href="css/bootstrap.css">

    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/main.scss">
    <link rel="stylesheet" href="js/rs-plugin/css/settings.css">

    <script type="text/javascript" src="js/modernizr.custom.32033.js"></script>

    <link rel="stylesheet" href="css/eco.css">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<div class="pre-loader">
    <div class="load-con">
        <img src="img/eco/logo.png" class="animated fadeInDown" alt="">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
</div>

<header>

	<?php menu(); ?>
</header>
    <!--RevSlider-->
    <div class="tp-banner-container">
        <div class="tp-banner">
            <div class="container move-from-top">
                <div class="row">
                    <div class="col-md-3">
                        <div class="inner-cars">
                            <form method="post">

                                <label> Sorteer op soort
                                    <select>
                                        <option>Alle types</option>
                                        <option>Minivan</option>
                                        <option>Standaard</option>
                                        <option>Stationwagen</option>
                                        <option>Hatchback</option>
                                        <option>SUV</option>

                                    </select>
                                </label>

                                <label> Sorteer op kleur
                                    <select>
                                        <option>Blauw</option>
                                        <option>Geel</option>
                                        <option>Paars</option>
                                        <option>Rood</option>
                                        <option>Groen</option>
                                        <option>Wit</option>
                                        <option>Zwart</option>
                                    </select>
                                </label>

                                <label> Sorteer op bouwjaar
                                    <select>
                                        <?php
                                        for ($i = 2017; 1999 < $i; $i--) {
                                            echo ' <option>' . $i . '</option>';
                                        }
                                        ?>
                                    </select>
                                </label>

                                <label> Sorteer op zitplaatsen
                                    <select>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                        <option>6</option>
                                        <option>7</option>
                                        <option>8</option>
                                    </select>
                                </label>


                            </form>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="inner-cars">
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="img/cars/2017-bmw-i8.png">
                                    <i class="fa fa-users" aria-hidden="true"></i> 4
                                </div>
                                <div class="col-md-4">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias architecto beatae
                                    consectetur consequatur, deleniti dolorum est eveniet in laboriosam modi, nostrum,
                                    officiis perferendis placeat possimus quibusdam saepe sint ut veniam!
                                </div>
                                <div class="col-md-4">
                                    <div class="price-wrap pull-right">
                                        <p class="price">€500,00 Per dag</p>
                                        <button class="reservate">Reserveren</button>
                                    </div>
                                </div>
                            </div>



                        </div>

                        <div class="inner-cars">
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="img/cars/2017-bmw-i8.png">
                                    <i class="fa fa-users" aria-hidden="true"></i> 4
                                </div>
                                <div class="col-md-4">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias architecto beatae
                                    consectetur consequatur, deleniti dolorum est eveniet in laboriosam modi, nostrum,
                                    officiis perferendis placeat possimus quibusdam saepe sint ut veniam!
                                </div>
                                <div class="col-md-4">
                                    <div class="price-wrap pull-right">
                                        <p class="price">€500,00 Per dag</p>
                                        <button class="reservate">Reserveren</button>
                                    </div>
                                </div>
                            </div>



                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</header>


<div class="wrapper">


    <section id="about">
        <div class="container">

            <div class="section-heading scrollpoint sp-effect3">
                <h1>Over ons</h1>
                <div class="divider"></div>
            </div>

            <div class="row">
                <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="about-item scrollpoint sp-effect2">
                        <i class="fa fa-leaf fa-2x"></i>
                        <h3>Milieuvriendelijke</h3>
                        <p>Omdat onze auto's voornamelijk elecktrishe zijn, rijden de auto's milieuvriendelijke</p>

                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="about-item scrollpoint sp-effect5">
                        <i class="fa fa-globe fa-2x"></i>
                        <h3>300 locaties</h3>
                        <p>Wij willen zo snel mogelijk uitbreiden naar Belgie, Duitsland, Frankrijk en Italie </p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="about-item scrollpoint sp-effect5">
                        <i class="fa fa-clock-o fa-2x"></i>
                        <h3>24/7</h3>
                        <p>Wij zijn 24/7 open zodat u de auto kan ophalen wanneer u wilt.</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="about-item scrollpoint sp-effect1">
                        <i class="fa fa-eur fa-2x"></i>
                        <h3>Beste prijsgarantie</h3>
                        <p>Wij garanderen u de beste prijzen voor onze huurauto's!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="features">
        <div class="container">
            <div class="section-heading scrollpoint sp-effect3">
                <h1>Features</h1>
                <div class="divider"></div>
                <p>Learn more about this feature packed App</p>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-4 scrollpoint sp-effect1">
                    <div class="media media-left feature">
                        <a class="pull-right" href="#">
                            <i class="fa fa-cogs fa-2x"></i>
                        </a>
                        <div class="media-body">
                            <h3 class="media-heading">User Settings</h3>
                            Lorem ipsum dolor sit amet.
                        </div>
                    </div>
                    <div class="media media-left feature">
                        <a class="pull-right" href="#">
                            <i class="fa fa-envelope fa-2x"></i>
                        </a>
                        <div class="media-body">
                            <h3 class="media-heading">Messages Inbox</h3>
                            Lorem ipsum dolor sit amet.
                        </div>
                    </div>
                    <div class="media media-left feature">
                        <a class="pull-right" href="#">
                            <i class="fa fa-users fa-2x"></i>
                        </a>
                        <div class="media-body">
                            <h3 class="media-heading">Friends List</h3>
                            Lorem ipsum dolor sit amet.
                        </div>
                    </div>
                    <div class="media media-left feature">
                        <a class="pull-right" href="#">
                            <i class="fa fa-comments fa-2x"></i>
                        </a>
                        <div class="media-body">
                            <h3 class="media-heading">Live Chat Messages</h3>
                            Lorem ipsum dolor sit amet.
                        </div>
                    </div>
                    <div class="media media-left feature">
                        <a class="pull-right" href="#">
                            <i class="fa fa-calendar fa-2x"></i>
                        </a>
                        <div class="media-body">
                            <h3 class="media-heading">Calendar / Planner</h3>
                            Lorem ipsum dolor sit amet.
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <img src="img/eco/iphone-eco.png" class="img-responsive scrollpoint sp-effect5" alt="">
                </div>
                <div class="col-md-4 col-sm-4 scrollpoint sp-effect2">
                    <div class="media feature">
                        <a class="pull-left" href="#">
                            <i class="fa fa-map-marker fa-2x"></i>
                        </a>
                        <div class="media-body">
                            <h3 class="media-heading">My Places</h3>
                            Lorem ipsum dolor sit amet.
                        </div>
                    </div>
                    <div class="media feature">
                        <a class="pull-left" href="#">
                            <i class="fa fa-film fa-2x"></i>
                        </a>
                        <div class="media-body">
                            <h3 class="media-heading">Media Player™</h3>
                            Lorem ipsum dolor sit amet.
                        </div>
                    </div>
                    <div class="media feature">
                        <a class="pull-left" href="#">
                            <i class="fa fa-compass fa-2x"></i>
                        </a>
                        <div class="media-body">
                            <h3 class="media-heading">Intuitive Statistics</h3>
                            Lorem ipsum dolor sit amet.
                        </div>
                    </div>
                    <div class="media feature">
                        <a class="pull-left" href="#">
                            <i class="fa fa-picture-o fa-2x"></i>
                        </a>
                        <div class="media-body">
                            <h3 class="media-heading">Weather on-the-go</h3>
                            Lorem ipsum dolor sit amet.
                        </div>
                    </div>
                    <div class="media active feature">
                        <a class="pull-left" href="#">
                            <i class="fa fa-plus fa-2x"></i>
                        </a>
                        <div class="media-body">
                            <h3 class="media-heading">And much more!</h3>
                            Lorem ipsum dolor sit amet.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="reviews">
        <div class="container">
            <div class="section-heading inverse scrollpoint sp-effect3">
                <h1>Reviews</h1>
                <div class="divider"></div>
                <p>Read What's The People Are Saying About Us</p>
            </div>
            <div class="row">
                <div class="col-md-10 col-md-push-1 scrollpoint sp-effect3">
                    <div class="review-filtering">
                        <div class="review">
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="review-person">
                                        <img src="http://api.randomuser.me/portraits/women/94.jpg" alt=""
                                             class="img-responsive">
                                    </div>
                                </div>
                                <div class="col-md-10">
                                    <div class="review-comment">
                                        <h3>“I love Oleose, I highly recommend it, Everyone Try It Now”</h3>
                                        <p>
                                            - Krin Fox
                                            <span>
                                                    <i class="fa fa-star fa-lg"></i>
                                                    <i class="fa fa-star fa-lg"></i>
                                                    <i class="fa fa-star fa-lg"></i>
                                                    <i class="fa fa-star fa-lg"></i>
                                                    <i class="fa fa-star-o fa-lg"></i>
                                                </span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="review rollitin">
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="review-person">
                                        <img src="http://api.randomuser.me/portraits/men/70.jpg" alt=""
                                             class="img-responsive">
                                    </div>
                                </div>
                                <div class="col-md-10">
                                    <div class="review-comment">
                                        <h3>“Oleaose Is The Best Stable, Fast App I Have Ever Experienced”</h3>
                                        <p>
                                            - Theodore Willis
                                            <span>
                                                    <i class="fa fa-star fa-lg"></i>
                                                    <i class="fa fa-star fa-lg"></i>
                                                    <i class="fa fa-star fa-lg"></i>
                                                    <i class="fa fa-star-half-o fa-lg"></i>
                                                    <i class="fa fa-star-o fa-lg"></i>
                                                </span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="review rollitin">
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="review-person">
                                        <img src="http://api.randomuser.me/portraits/men/93.jpg" alt=""
                                             class="img-responsive">
                                    </div>
                                </div>
                                <div class="col-md-10">
                                    <div class="review-comment">
                                        <h3>“Keep It Up Guys Your Work Rules, Cheers :)”</h3>
                                        <p>
                                            - Ricky Grant
                                            <span>
                                                    <i class="fa fa-star fa-lg"></i>
                                                    <i class="fa fa-star fa-lg"></i>
                                                    <i class="fa fa-star fa-lg"></i>
                                                    <i class="fa fa-star-half-o fa-lg"></i>
                                                    <i class="fa fa-star-o fa-lg"></i>
                                                </span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="screens">
        <div class="container">

            <div class="section-heading scrollpoint sp-effect3">
                <h1>Screens</h1>
                <div class="divider"></div>
                <p>See what’s included in the App</p>
            </div>

            <div class="filter scrollpoint sp-effect3">
                <a href="javascript:void(0)" class="button js-filter-all active">All Screens</a>
                <a href="javascript:void(0)" class="button js-filter-one">User Access</a>
                <a href="javascript:void(0)" class="button js-filter-two">Social Network</a>
                <a href="javascript:void(0)" class="button js-filter-three">Media Players</a>
            </div>
            <div class="slider filtering scrollpoint sp-effect5">
                <div class="one">
                    <img src="img/eco/screens/profile.jpg" alt="">
                    <h4>Profile Page</h4>
                </div>
                <div class="two">
                    <img src="img/eco/screens/menu.jpg" alt="">
                    <h4>Toggel Menu</h4>
                </div>
                <div class="three">
                    <img src="img/eco/screens/weather.jpg" alt="">
                    <h4>Weather Forcast</h4>
                </div>
                <div class="one">
                    <img src="img/eco/screens/signup.jpg" alt="">
                    <h4>Sales Analysis</h4>
                </div>
                <div class="one">
                    <img src="img/eco/screens/calendar.jpg" alt="">
                    <h4>Event Calendar</h4>
                </div>
                <div class="two">
                    <img src="img/eco/screens/options.jpg" alt="">
                    <h4>Some Options</h4>
                </div>
                <div class="three">
                    <img src="img/eco/screens/sales.jpg" alt="">
                    <h4>Lorem ipsum dolor</h4>
                </div>
            </div>
        </div>
    </section>

    <section id="demo">
        <div class="container">
            <div class="section-heading scrollpoint sp-effect3">
                <h1>Demo</h1>
                <div class="divider"></div>
                <p>Take a closer look in more detail</p>
            </div>
            <div class="row">
                <div class="col-md-8 col-md-offset-2 scrollpoint sp-effect2">
                    <div class="video-container">
                        <iframe src="http://player.vimeo.com/video/70984663"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="getApp">
        <div class="container-fluid">
            <div class="section-heading inverse scrollpoint sp-effect3">
                <h1>Get App</h1>
                <div class="divider"></div>
                <p>Choose your native platform and get started!</p>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="hanging-phone scrollpoint sp-effect2 hidden-xs">
                        <img src="img/eco/eco-angled2.png" alt="">
                    </div>
                    <div class="platforms">
                        <a href="#" class="btn btn-primary inverse scrollpoint sp-effect1">
                            <i class="fa fa-android fa-3x pull-left"></i>
                            <span>Download for</span><br>
                            <b>Android</b>
                        </a>

                        <a href="#" class="btn btn-primary inverse scrollpoint sp-effect2">
                            <i class="fa fa-apple fa-3x pull-left"></i>
                            <span>Download for</span><br>
                            <b>Apple IOS</b>
                        </a>
                    </div>

                </div>
            </div>


        </div>
    </section>

    <section id="support" class="doublediagonal">
        <div class="container">
            <div class="section-heading scrollpoint sp-effect3">
                <h1>Support</h1>
                <div class="divider"></div>
                <p>For more info and support, contact us!</p>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-8 col-sm-8 scrollpoint sp-effect1">
                            <form role="form">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Your name">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Your email">
                                </div>
                                <div class="form-group">
                                    <textarea cols="30" rows="10" class="form-control"
                                              placeholder="Your message"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                            </form>
                        </div>
                        <div class="col-md-4 col-sm-4 contact-details scrollpoint sp-effect2">
                            <div class="media">
                                <a class="pull-left" href="#">
                                    <i class="fa fa-map-marker fa-2x"></i>
                                </a>
                                <div class="media-body">
                                    <h4 class="media-heading">4, Some street, California, USA</h4>
                                </div>
                            </div>
                            <div class="media">
                                <a class="pull-left" href="#">
                                    <i class="fa fa-envelope fa-2x"></i>
                                </a>
                                <div class="media-body">
                                    <h4 class="media-heading">
                                        <a href="mailto:support@oleose.com">support@oleose.com</a>
                                    </h4>
                                </div>
                            </div>
                            <div class="media">
                                <a class="pull-left" href="#">
                                    <i class="fa fa-phone fa-2x"></i>
                                </a>
                                <div class="media-body">
                                    <h4 class="media-heading">+1 234 567890</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <a href="#" class="scrollpoint sp-effect3">
                <img src="img/eco/logo.png" alt="" class="logo">
            </a>
            <div class="social">
                <a href="#" class="scrollpoint sp-effect3"><i class="fa fa-twitter fa-lg"></i></a>
                <a href="#" class="scrollpoint sp-effect3"><i class="fa fa-google-plus fa-lg"></i></a>
                <a href="#" class="scrollpoint sp-effect3"><i class="fa fa-facebook fa-lg"></i></a>
            </div>
            <div class="rights">
                <p>Copyright &copy; 2014</p>
                <p>Template by <a href="http://www.scoopthemes.com" target="_blank">ScoopThemes</a></p>
            </div>
        </div>
    </footer>

</div>
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/placeholdem.min.js"></script>
<script src="js/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
<script src="js/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<script src="js/waypoints.min.js"></script>
<script src="js/scripts.js"></script>
<script>
    $(document).ready(function () {
        appMaster.preLoader();
    });
</script>
</body>

</html>