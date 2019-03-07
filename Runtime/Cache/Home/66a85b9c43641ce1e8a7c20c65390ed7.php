<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
    <title>摄影社交网站主页</title>
    <link rel="shortcut icon" href="http://north-east-venture.com/assets/favicons/favicon.ico"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" >
    <link rel="stylesheet" href="/Apps/Home/View/LoginHome/css/animate.css">
    <link rel="stylesheet" href="/Apps/Home/View/LoginHome/css/icomoon.css">
    <link rel="stylesheet" href="/Apps/Home/View/LoginHome/css/themify-icons.css">
    <link rel="stylesheet" href="/Apps/Home/View/LoginHome/css/bootstrap.css">
    <link rel="stylesheet" href="/Apps/Home/View/LoginHome/css/magnific-popup.css">
    <link rel="stylesheet" href="/Apps/Home/View/LoginHome/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/Apps/Home/View/LoginHome/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="/Apps/Home/View/LoginHome/css/style.css">
    <link rel="stylesheet" href="/Apps/Home/View/LoginHome/css/nav.css">
    <script src="/Apps/Home/View/LoginHome/js/modernizr-2.6.2.min.js"></script>
    <script src="/Apps/Home/View/LoginHome/js/respond.min.js"></script>

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
                            <li class="active"><a href="/index.php/Home/LoginHome/userHome">我的主页</a></li>
                            <li class="has-dropdown">
                                <a href="/index.php/Home/LoginHome/photographActivity">摄影活动</a>
                                <ul class="dropdown">
                                    <li><a href="#">我的摄影活动</a></li>
                                    <li><a href="/index.php/Home/LoginHome/activityLaunch">发布摄影活动</a></li>
                                </ul>
                            </li>
                            <li class="has-dropdown">
                                <a href="#">摄影作品</a>
                            </li>
                            <li class="btn-cta"><a href="#getstarted"><span>Get started</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <header id="gtco-header" class="gtco-cover" role="banner" style="background-image: url(/Apps/Home/View/LoginHome/images/img_2.jpg)">
            <div class="overlay"></div>
            <div class="gtco-container">
                <div class="row">
                    <div class="col-md-12 col-md-offset-0 text-left">
                        <div class="row row-mt-15em">
                            <div class="col-md-7 mt-text animate-box" data-animate-effect="fadeInUp">
                                <span class="intro-text-small">Welcome to Splash,<h1><strong><?php echo ($username); ?></strong></h1></span>
                                <h1>Discover beauty with your own "eyes"!</h1>
                            </div>
                            <div class="col-md-4 col-md-push-1 animate-box" data-animate-effect="fadeInRight">
                                <div class="form-wrap">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div class="gtco-section border-bottom" name="getstarted" id="getstarted">
            <div class="gtco-container">
                    <nav class="secondary-nav">
                        <ul class="nav-list">
                            <li class="active" data-index="0">
                                <a target="_self" href="/index.php/Home/LoginHome/photographHome2#getstarted">推荐</a>
                            </li>
                            <li class="" data-index="1">
                                <a target="_self" href="/index.php/Home/LoginHome/photographHomeFollow#getstarted">关注</a>
                            </li>
                            <li class="" data-index="2">
                                <a target="_self" href="#getstarted">精选</a>
                            </li>
                            <li class="" data-index="3">
                                <a target="_self" href="#getstarted">人像</a>
                            </li>
                            <li class="" data-index="4">
                                <a target="_self" href="#getstarted">人文</a>
                            </li>
                            <li class="" data-index="5">
                                <a target="_self" href="#getstarted">风光</a>
                            </li>
                            <li class="" data-index="6">
                                <a target="_self" href="#getstarted">短视频</a>
                            </li>
                        </ul>
                    </nav>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <a href="/Apps/Home/View/LoginHome/images/img_2.jpg" class="fh5co-project-item image-popup">
                            <figure>
                                <div class="overlay"><i class="ti-plus"></i></div>
                                <img src="/Apps/Home/View/LoginHome/images/img_2.jpg" alt="Image" class="img-responsive">
                            </figure>
                            <div class="fh5co-text">
                                <h2><?php echo ($photoTitle0); ?></h2>
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
    </div>
</div>
<script src="/Apps/Home/View/LoginHome/js/jquery.min.js"></script>
<script src="/Apps/Home/View/LoginHome/js/jquery.easing.1.3.js"></script>
<script src="/Apps/Home/View/LoginHome/js/bootstrap.min.js"></script>
<script src="/Apps/Home/View/LoginHome/js/jquery.waypoints.min.js"></script>
<script src="/Apps/Home/View/LoginHome/js/owl.carousel.min.js"></script>
<script src=/Apps/Home/View/LoginHome/js/jquery.countTo.js"></script>
<script src="/Apps/Home/View/LoginHome/js/jquery.magnific-popup.min.js"></script>
<script src="/Apps/Home/View/LoginHome/js/magnific-popup-options.js"></script>
<script src="/Apps/Home/View/LoginHome/js/main.js"></script>
</body>
</html>