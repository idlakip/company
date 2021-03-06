<!DOCTYPE html>
<html>

<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css" media="screen,projection" />

    <!-- my CSS -->
    <link rel="stylesheet" href="materialize/css/style.css">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="icon/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="icon/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="icon/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="icon/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="icon/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon-precomposed" sizes="60x60" href="icon/apple-touch-icon-60x60.png" />
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="icon/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon-precomposed" sizes="76x76" href="icon/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="icon/apple-touch-icon-152x152.png" />
    <link rel="icon" type="image/png" href="icon/favicon-196x196.png" sizes="196x196" />
    <link rel="icon" type="image/png" href="icon/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/png" href="icon/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="icon/favicon-16x16.png" sizes="16x16" />
    <link rel="icon" type="image/png" href="icon/favicon-128.png" sizes="128x128" />
    <meta name="application-name" content="&nbsp;" />
    <meta name="msapplication-TileColor" content="#FFFFFF" />
    <meta name="msapplication-TileImage" content="mstile-144x144.png" />
    <meta name="msapplication-square70x70logo" content="mstile-70x70.png" />
    <meta name="msapplication-square150x150logo" content="mstile-150x150.png" />
    <meta name="msapplication-wide310x150logo" content="mstile-310x150.png" />
    <meta name="msapplication-square310x310logo" content="mstile-310x310.png" />
    <title>LAKIP</title>
</head>

<body id="home" class="scrollspy">
    <!-- Navbar -->
    <div class="navbar-fixed">
        <nav class="blue darken-2">
            <div class="container">
                <div class="nav-wrapper">
                    <a href="#home" class="brand-logo">LAKIP</a>
                    <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                    <ul class="right hide-on-med-and-down">
                        <li><a href="/portfolio/index.php">Home</a></li>
                        <li><a href="#about">About Us</a></li>
                        <li><a href="#clients">Clients</a></li>
                        <li><a href="#services">Services</a></li>
                        <li><a href="#portfolio">Portfolio</a></li>
                        <li><a href="#contact">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <!-- Sidenav -->
    <ul class="sidenav" id="mobile-nav">
        <li><a href="#about">About Us</a></li>
        <li><a href="#clients">Clients</a></li>
        <li><a href="#services">Services</a></li>
        <li><a href="#portfolio">Portfolio</a></li>
        <li><a href="#contact">Contact Us</a></li>
    </ul>

    <!-- Slider -->
    <div class="slider">
        <ul class="slides">
            <li>
                <img src="img/slider/1.png"> <!-- random image -->
                <div class="caption left-align">
                    <h3>Trending Searches</h3>
                    <h5 class="light grey-text text-lighten-3">Search Bussiness.</h5>
                </div>
            </li>
            <li>
                <img src="img/slider/2.png"> <!-- random image -->
                <div class="caption center-align">
                    <h3>Mobile</h3>
                    <h5 class="light grey-text text-lighten-3">Contact Mobile.</h5>
                </div>
            </li>
            <li>
                <img src="img/slider/3.png"> <!-- random image -->
                <div class="caption right-align">
                    <h3>Nature Pictures</h3>
                    <h5 class="light grey-text text-lighten-3">Free Nature.</h5>
                </div>
            </li>
            <li>
                <img src="img/slider/4.png"> <!-- random image -->
                <div class="caption center-align">
                    <h3>Interview</h3>
                    <h5 class="light grey-text text-lighten-3">Company Profile.</h5>
                </div>
            </li>
        </ul>
    </div>

    <!-- About us -->
    <section id="about" class="about scrollspy">
        <div class="container">
            <div class="row">
                <h3 class="center light grey-text text-darken-3">About us</h3>
                <div class="col m6 light">
                    <h5>We Are Professionals</h5>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                </div>
                <div class="col m6 light">
                    <p>WEB DEVELOPMENT</p>
                    <div class="progress">
                        <div class="determinate" style="width: 88%;"></div>
                    </div>
                    <p>MOBILE APP DEVELOPMENT</p>
                    <div class="progress">
                        <div class="determinate" style="width: 68%;"></div>
                    </div>
                    <p>GAME DEVELOPMENT</p>
                    <div class="progress">
                        <div class="determinate" style="width: 90%;"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Clients -->
    <div id="clients" class="parallax-container scrollspy">
        <div class="parallax"><img src="img/slider/4.png"></div>

        <!-- Our clients -->
        <div class="container clients">
            <h3 class="center light white-text">Our Clients</h3>
            <div class="row">
                <div class="col m4 s12 center">
                    <img src="img/clients/gojek.png" alt="gojek">
                </div>
                <div class="col m4 s12 center">
                    <img src="img/clients/tokopedia.png" alt="tokopedia">
                </div>
                <div class="col m4 s12 center">
                    <img src="img/clients/traveloka.png" alt="traveloka">
                </div>
            </div>
        </div>
    </div>

    <!-- Services -->
    <section id="services" class="services grey lighten-3 scrollspy">
        <div class="container">
            <div class="row">
                <h3 class="light center grey-text text-darken-3">Our Services</h3>
                <div class="col m4 s12">
                    <div class="card-panel center">
                        <i class="material-icons medium">desktop_mac</i>
                        <h5>Web Development</h5>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Enim, vero.</p>
                    </div>
                </div>
                <div class="col m4 s12">
                    <div class="card-panel center">
                        <i class="material-icons medium">business</i>
                        <h5>Business</h5>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Enim, vero.</p>
                    </div>
                </div>
                <div class="col m4 s12">
                    <div class="card-panel center">
                        <i class="material-icons medium">hotel</i>
                        <h5>Hotel</h5>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Enim, vero.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col m4 s12">
                    <div class="card-panel center">
                        <i class="material-icons medium">location_on</i>
                        <h5>location</h5>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Enim, vero.</p>
                    </div>
                </div>
                <div class="col m4 s12">
                    <div class="card-panel center">
                        <i class="material-icons medium">event_available</i>
                        <h5>Event</h5>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Enim, vero.</p>
                    </div>
                </div>
                <div class="col m4 s12">
                    <div class="card-panel center">
                        <i class="material-icons medium">group</i>
                        <h5>Group</h5>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Enim, vero.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col m4 s12">
                    <div class="card-panel center">
                        <i class="material-icons medium">airport_shuttle</i>
                        <h5>Airport Shuttle</h5>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Enim, vero.</p>
                    </div>
                </div>
                <div class="col m4 s12">
                    <div class="card-panel center">
                        <i class="material-icons medium">contact_phone</i>
                        <h5>ContactPhone</h5>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Enim, vero.</p>
                    </div>
                </div>
                <div class="col m4 s12">
                    <div class="card-panel center">
                        <i class="material-icons medium">contact_mail</i>
                        <h5>Contact Mail</h5>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Enim, vero.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- portfolio -->
    <section id="portfolio" class="portfolio scrollspy">
        <div class="container">
            <h3 class="light center grey-text text-darken-3">Portfolio</h3>
            <div class="row">
                <div class="col m3 s12">
                    <img src="img/portfolio/1.png" alt="" class="responsive-img materialboxed">
                </div>
                <div class="col m3 s12">
                    <img src="img/portfolio/2.png" alt="" class="responsive-img materialboxed">
                </div>
                <div class="col m3 s12">
                    <img src="img/portfolio/3.png" alt="" class="responsive-img materialboxed">
                </div>
                <div class="col m3 s12">
                    <img src="img/portfolio/4.png" alt="" class="responsive-img materialboxed">
                </div>
            </div>
            <div class="row">
                <div class="col m3 s12">
                    <img src="img/portfolio/5.png" alt="" class="responsive-img materialboxed">
                </div>
                <div class="col m3 s12">
                    <img src="img/portfolio/6.png" alt="" class="responsive-img materialboxed">
                </div>
                <div class="col m3 s12">
                    <img src="img/portfolio/2.png" alt="" class="responsive-img materialboxed">
                </div>
                <div class="col m3 s12">
                    <img src="img/portfolio/3.png" alt="" class="responsive-img materialboxed">
                </div>
            </div>
        </div>
    </section>
    <!-- contact us -->
    <section id="contact" class="contact scrollspy">
        <div class="container">
            <h3 class="light grey-text text-darken-3 center">Contact Us</h3>
            <div class="row">
                <div class="col m5 s12">
                    <div class="card-panel blue darken-2 center white-text">
                        <i class="material-icons">email</i>
                        <h5>Contact</h5>
                        <p>Lembaga Administrasi Keuangan dan Ilmu Pemerintahan</p>
                    </div>
                    <ul class="collection with-header">
                        <li class="collection-header">
                            <h4>Our Office</h4>
                        </li>
                        <li class="collection-item">LAKIP</li>
                        <li class="collection-item">Jl. Serdang Baru Raya No. 4B, Kemayoran - Jakarta Pusat 10650</li>
                        <li class="collection-item">DKI Jakarta - Indonesia</li>
                    </ul>
                </div>
                <div class="col m7 s12">
                    <form action="">
                        <div class="card-panel">
                            <h5>Please fill out this form</h5>
                            <div class="input-field">
                                <input type="text" id="name" required class="validate">
                                <label for="name">Name</label>
                            </div>
                            <div class="input-field">
                                <input type="email" id="email" class="validate">
                                <label for="name">Email</label>
                            </div>
                            <div class="input-field">
                                <textarea name="message" id="message" class="materialize-textarea"></textarea>
                                <label for="message">Message</label>
                            </div>
                            <button type="submit" class="btn blue darken-2">Send</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- footer -->
    <footer class="blue darken-2 white-text center">
        <p class="flow-text"> &copy; Copyright 2018 - <?php echo date('Y') ?> LAKIP.</p>
    </footer>
    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="materialize/js/materialize.min.js"></script>
    <script type="text/javascript" src="materialize/js/lakip.1.0.js"></script>
</body>

</html>