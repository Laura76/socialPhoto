<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>我的主页</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="og:description" content=""/>
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">

    <!-- Animate.css -->
    <link rel="stylesheet" href="/Apps/Home/View/LoginHome/css/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="/Apps/Home/View/LoginHome/css/icomoon.css">
    <!-- Themify Icons-->
    <link rel="stylesheet" href="/Apps/Home/View/LoginHome/css/themify-icons.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="/Apps/Home/View/LoginHome/css/bootstrap.css">

    <!-- Magnific Popup -->
    <link rel="stylesheet" href="/Apps/Home/View/LoginHome/css/magnific-popup.css">

    <!-- Owl Carousel  -->
    <link rel="stylesheet" href="/Apps/Home/View/LoginHome/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/Apps/Home/View/LoginHome/css/owl.theme.default.min.css">

    <!-- Theme style  -->
    <link rel="stylesheet" href="/Apps/Home/View/LoginHome/css/style.css">

    <!-- Modernizr JS -->
    <script src="/Apps/Home/View/LoginHome/js/modernizr-2.6.2.min.js"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="/Apps/Home/View/LoginHome/js/respond.min.js"></script>
    <![endif]-->

</head>
<body>

<div class="gtco-loader"></div>

<div id="page">


    <div class="page-inner">
        <nav class="gtco-nav" role="navigation">
            <div class="gtco-container">

                <div class="row">
                    <div class="col-sm-4 col-xs-12">
                        <div id="gtco-logo"><a href="#getstarted">Splash <em>.</em></a></div>
                    </div>
                    <div class="col-xs-8 text-right menu-1">
                        <ul>
                            <li class="active"><a href="#账户信息设置">账户信息设置</a></li>
                            <li><a href="tour.html">Tour</a></li>
                            <li class="has-dropdown">
                                <a href="#">Dropdown</a>
                                <ul class="dropdown">
                                    <li><a href="#">Web Design</a></li>
                                    <li><a href="#">eCommerce</a></li>
                                    <li><a href="#">Branding</a></li>
                                    <li><a href="#">API</a></li>
                                </ul>
                            </li>
                            <li><a href="pricing.html">Pricing</a></li>
                            <li><a href="contact.html">Contact</a></li>
                            <li class="btn-cta"><a href="/index.php/Home/LoginHome/photographHome2"><span>Get back</span></a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </nav>

        <header id="gtco-header" class="gtco-cover" role="banner" style="background-image: url(/Apps/Home/View/LoginHome/images/img_2.jpg)">
            <div class="overlay"></div>
        </header>


        <div class="gtco-section border-bottom" name="账户信息设置" id="账户信息设置">
            <div class="gtco-container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-6 animate-box">
                            <h3>基本信息</h3>
                            <form action="/index.php/Home/LoginHome/userHome2">
                                <div class="row form-group">
                                    <div class="col-md-12">
                                        <label class="sr-only" for="name">Name</label>
                                        <input type="text" id="name" class="form-control" placeholder="Your name:<?php echo ($username); ?>">
                                    </div>

                                </div>
                                <div class="row form-group">
                                    <div class="col-md-12">
                                        <label class="sr-only" for="subject">password</label>
                                        <input type="text" id="subject" class="form-control" placeholder="Your password:<?php echo ($password); ?>">
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col-md-12">
                                        <label class="sr-only" for="email">Email</label>
                                        <input type="text" id="email" class="form-control" placeholder="Your email address:<?php echo ($email); ?>">
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col-md-12">
                                        <label class="sr-only" for="subject">WeChat</label>
                                        <input type="text" id="subject" class="form-control" placeholder="Your WeChat account:<?php echo ($wechat); ?>">
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col-md-12">
                                        <label class="sr-only" for="message">Introduction</label>
                                        <textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Your introduction:<?php echo ($introduction); ?>"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="submit" value="Save Change" class="btn btn-primary">
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="gtco-section border-bottom" name="getstarted" id="getstarted">
            <div class="gtco-container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center gtco-heading">
                        <h2>Beautiful Images</h2>
                        <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <a href="/Apps/Home/View/LoginHome/images/img_2.jpg" class="fh5co-project-item image-popup">
                            <figure>
                                <div class="overlay"><i class="ti-plus"></i></div>
                                <img src="/Apps/Home/View/LoginHome/images/img_2.jpg" alt="Image" class="img-responsive">
                            </figure>
                            <div class="fh5co-text">
                                <h2>Constructive heading</h2>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia..</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <a href="/Apps/Home/View/LoginHome/images/img_3.jpg" class="fh5co-project-item image-popup">
                            <figure>
                                <div class="overlay"><i class="ti-plus"></i></div>
                                <img src="/Apps/Home/View/LoginHome/images/img_3.jpg" alt="Image" class="img-responsive">
                            </figure>
                            <div class="fh5co-text">
                                <h2>Constructive heading</h2>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia..</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <a href="/Apps/Home/View/LoginHome/images/img_4.jpg" class="fh5co-project-item image-popup">
                            <figure>
                                <div class="overlay"><i class="ti-plus"></i></div>
                                <img src="/Apps/Home/View/LoginHome/images/img_4.jpg" alt="Image" class="img-responsive">
                            </figure>
                            <div class="fh5co-text">
                                <h2>Constructive heading</h2>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia..</p>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <a href="/Apps/Home/View/LoginHome/images/img_1.jpg" class="fh5co-project-item image-popup">
                            <figure>
                                <div class="overlay"><i class="ti-plus"></i></div>
                                <img src="/Apps/Home/View/LoginHome/images/img_1.jpg" alt="Image" class="img-responsive">
                            </figure>
                            <div class="fh5co-text">
                                <h2>Constructive heading</h2>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia..</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <a href="/Apps/Home/View/LoginHome/images/img_5.jpg" class="fh5co-project-item image-popup">
                            <figure>
                                <div class="overlay"><i class="ti-plus"></i></div>
                                <img src="/Apps/Home/View/LoginHome/images/img_5.jpg" alt="Image" class="img-responsive">
                            </figure>
                            <div class="fh5co-text">
                                <h2>Constructive heading</h2>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia..</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <a href="/Apps/Home/View/LoginHome/images/img_6.jpg" class="fh5co-project-item image-popup">
                            <figure>
                                <div class="overlay"><i class="ti-plus"></i></div>
                                <img src="/Apps/Home/View/LoginHome/images/img_6.jpg" alt="Image" class="img-responsive">
                            </figure>
                            <div class="fh5co-text">
                                <h2>Constructive heading</h2>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia..</p>
                            </div>
                        </a>
                    </div>

                </div>
            </div>
        </div>

        <div id="gtco-features" class="border-bottom">
            <div class="gtco-container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center gtco-heading animate-box">
                        <h2>Splash Features</h2>
                        <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i class="ti-vector"></i>
						</span>
                            <h3>Pixel Perfect</h3>
                            <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. </p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i class="ti-tablet"></i>
						</span>
                            <h3>Fully Responsive</h3>
                            <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. </p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i class="ti-settings"></i>
						</span>
                            <h3>Web Development</h3>
                            <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. </p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i class="ti-ruler-pencil"></i>
						</span>
                            <h3>Web Design</h3>
                            <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. </p>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i class="ti-paint-roller"></i>
						</span>
                            <h3>Accent Colours</h3>
                            <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. </p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i class="ti-announcement"></i>
						</span>
                            <h3>Theme Updates</h3>
                            <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. </p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i class="ti-stats-up"></i>
						</span>
                            <h3>Increase Earnings</h3>
                            <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. </p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i class="ti-magnet"></i>
						</span>
                            <h3>Passive Income</h3>
                            <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div id="gtco-counter" class="gtco-section">
            <div class="gtco-container">

                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center gtco-heading animate-box">
                        <h2>Fun Facts</h2>
                        <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
                    </div>
                </div>

                <div class="row">

                    <div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
                        <div class="feature-center">
						<span class="icon">
							<i class="ti-settings"></i>
						</span>
                            <span class="counter js-counter" data-from="0" data-to="22070" data-speed="5000" data-refresh-interval="50">1</span>
                            <span class="counter-label">Creativity Fuel</span>

                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
                        <div class="feature-center">
						<span class="icon">
							<i class="ti-face-smile"></i>
						</span>
                            <span class="counter js-counter" data-from="0" data-to="97" data-speed="5000" data-refresh-interval="50">1</span>
                            <span class="counter-label">Happy Clients</span>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
                        <div class="feature-center">
						<span class="icon">
							<i class="ti-briefcase"></i>
						</span>
                            <span class="counter js-counter" data-from="0" data-to="402" data-speed="5000" data-refresh-interval="50">1</span>
                            <span class="counter-label">Projects Done</span>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
                        <div class="feature-center">
						<span class="icon">
							<i class="ti-time"></i>
						</span>
                            <span class="counter js-counter" data-from="0" data-to="212023" data-speed="5000" data-refresh-interval="50">1</span>
                            <span class="counter-label">Hours Spent</span>

                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div id="gtco-products">
            <div class="gtco-container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center gtco-heading">
                        <h2>More Products</h2>
                        <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="owl-carousel owl-carousel-carousel">
                        <div class="item">
                            <a href="#"><img src="/Apps/Home/View/LoginHome/images/img_1.jpg" alt="Free HTML5 Bootstrap Template by "></a>
                        </div>
                        <div class="item">
                            <a href="#"><img src="/Apps/Home/View/LoginHome/images/img_2.jpg" alt="Free HTML5 Bootstrap Template by "></a>
                        </div>
                        <div class="item">
                            <a href="#"><img src="/Apps/Home/View/LoginHome/images/img_3.jpg" alt="Free HTML5 Bootstrap Template by "></a>
                        </div>
                        <div class="item">
                            <a href="#"><img src="/Apps/Home/View/LoginHome/images/img_4.jpg" alt="Free HTML5 Bootstrap Template by "></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div id="gtco-subscribe">
            <div class="gtco-container">
                <div class="row animate-box">
                    <div class="col-md-8 col-md-offset-2 text-center gtco-heading">
                        <h2>Subscribe</h2>
                        <p>Be the first to know about the new templates.</p>
                    </div>
                </div>
                <div class="row animate-box">
                    <div class="col-md-8 col-md-offset-2">
                        <form class="form-inline">
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label for="email" class="sr-only">Email</label>
                                    <input type="email" class="form-control" id="email" placeholder="Your Email">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <button type="submit" class="btn btn-default btn-block">Subscribe</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <footer id="gtco-footer" role="contentinfo">
            <div class="gtco-container">
                <div class="row row-p	b-md">

                    <div class="col-md-4">
                        <div class="gtco-widget">
                            <h3>About <span class="footer-logo">Splash<span>.<span></span></h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore eos molestias quod sint ipsum possimus temporibus officia iste perspiciatis consectetur in fugiat repudiandae cum. Totam cupiditate nostrum ut neque ab?</p>
                        </div>
                    </div>

                    <div class="col-md-4 col-md-push-1">
                        <div class="gtco-widget">
                            <h3>Links</h3>
                            <ul class="gtco-footer-links">
                                <li><a href="#">Knowledge Base</a></li>
                                <li><a href="#">Career</a></li>
                                <li><a href="#">Press</a></li>
                                <li><a href="#">Terms of services</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="gtco-widget">
                            <h3>Get In Touch</h3>
                            <ul class="gtco-quick-contact">
                                <li><a href="#"><i class="icon-phone"></i> +1 234 567 890</a></li>
                                <li><a href="#"><i class="icon-mail2"></i> info@</a></li>
                                <li><a href="#"><i class="icon-chat"></i> Live Chat</a></li>
                            </ul>
                        </div>
                    </div>

                </div>

                <div class="row copyright">
                    <div class="col-md-12">
                        <p class="pull-left">
                            <small class="block">Copyright &copy; 2016.Company name All rights reserved.<a target="_blank" href="http://www.moke8.com/html/">&#x7F51;&#x9875;&#x6A21;&#x677F;</a></small>
                        </p>
                        <p class="pull-right">
                        <ul class="gtco-social-icons pull-right">
                            <li><a href="#"><i class="icon-twitter"></i></a></li>
                            <li><a href="#"><i class="icon-facebook"></i></a></li>
                            <li><a href="#"><i class="icon-linkedin"></i></a></li>
                            <li><a href="#"><i class="icon-dribbble"></i></a></li>
                        </ul>
                        </p>
                    </div>
                </div>

            </div>
        </footer>
    </div>

</div>

<div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
</div>

<!-- jQuery -->
<script src="/Apps/Home/View/LoginHome/js/jquery.min.js"></script>
<!-- jQuery Easing -->
<script src="/Apps/Home/View/LoginHome/js/jquery.easing.1.3.js"></script>
<!-- Bootstrap -->
<script src="/Apps/Home/View/LoginHome/js/bootstrap.min.js"></script>
<!-- Waypoints -->
<script src="/Apps/Home/View/LoginHome/js/jquery.waypoints.min.js"></script>
<!-- Carousel -->
<script src="/Apps/Home/View/LoginHome/js/owl.carousel.min.js"></script>
<!-- countTo -->
<script src=/Apps/Home/View/LoginHome/js/jquery.countTo.js"></script>
<!-- Magnific Popup -->
<script src="/Apps/Home/View/LoginHome/js/jquery.magnific-popup.min.js"></script>
<script src="/Apps/Home/View/LoginHome/js/magnific-popup-options.js"></script>
<!-- Main -->
<script src="/Apps/Home/View/LoginHome/js/main.js"></script>

</body>
</html>