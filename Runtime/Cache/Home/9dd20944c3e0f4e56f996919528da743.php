<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>我的相册</title>
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
                        <div id="gtco-logo"><a href="/index.php/Home/LoginHome/userHome">Splash <em>.</em></a></div>
                    </div>
                    <div class="col-xs-8 text-right menu-1">
                        <ul>
                            <li class="active"><a href="/index.php/Home/LoginHome/addalbum">新增相册</a></li>
                            <li class="btn-cta"><a href="/index.php/Home/LoginHome/userHome"><span>Get back</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <header id="gtco-header" class="gtco-cover" role="banner" style="background-image: url(/Apps/Home/View/LoginHome/images/img_6.jpg)">
            <div class="overlay"></div>
            <div class="gtco-container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center gtco-heading">
                        <h2></h2>
                        <p></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-6 animate-box">
                            <form action="/index.php/Home/LoginHome/addAlbum" method="post" >
                                <div class="row form-group">
                                    <div class="col-md-12">
                                        <input type="text" id="name" class="form-control" placeholder="albumTitle" name="albumTitle" >
                                        <br/>
                                        <input type="text"  class="form-control" placeholder="albumKeyword" name="albumKeyword" >
                                        <br/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="submit" value="Create Album" class="btn btn-primary">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </div>
</div>
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