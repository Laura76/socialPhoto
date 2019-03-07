<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
    <title>我的摄影作品</title>
    <link rel="shortcut icon" href="http://north-east-venture.com/assets/favicons/favicon.ico"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="/Apps/Home/View/LoginHome/css/animate.css">
    <link rel="stylesheet" href="/Apps/Home/View/LoginHome/css/icomoon.css">
    <link rel="stylesheet" href="/Apps/Home/View/LoginHome/css/themify-icons.css">
    <link rel="stylesheet" href="/Apps/Home/View/LoginHome/css/bootstrap.css">
    <link rel="stylesheet" href="/Apps/Home/View/LoginHome/css/magnific-popup.css">
    <link rel="stylesheet" href="/Apps/Home/View/LoginHome/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/Apps/Home/View/LoginHome/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="/Apps/Home/View/LoginHome/css/style.css">
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
                            <li class="btn-cta"><a href="/index.php/Home/LoginHome/photographHome2"><span>Get back</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <header id="gtco-header" class="gtco-cover" role="banner" style="background-image: url(/Apps/Home/View/LoginHome/images/img_2.jpg)">
            <div class="overlay"></div>
            <div class="gtco-container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center gtco-heading">
                        <h2></h2>
                        <p></p>
                    </div>
                    <div class="col-md-7 mt-text animate-box" data-animate-effect="fadeInUp">
                        <span class="intro-text-small"><b><strong>热门的摄影作品</strong></b><h1><strong><?php echo ($username); ?></strong></h1></span>
                    </div>

                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <a href="/index.php/Home/LoginHome/photoDetail" class="fh5co-project-item ">
                            <figure>
                                <div class="overlay"><i class="ti-plus"></i></div>
                                <img src="/Apps/Home/View/LoginHome/images/img_2.jpg"  alt="Image" class="img-responsive" id="pic">
                            </figure>
                            <div class="fh5co-text">
                                <h2>Constructive heading</h2>
                                <p><?php echo ($title0); ?></p>
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
                                <p><?php echo ($title1); ?></p>
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
                                <p>热门摄影活动推荐</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            </header>
        <div class="bdsharebuttonbox"><a href="#" class="bds_more" data-cmd="more"></a><a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a><a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a><a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a><a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a></div>
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
<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"0","bdSize":"16"},"share":{},"image":{"viewList":["qzone","tsina","tqq","renren","weixin"],"viewText":"分享到：","viewSize":"16"},"selectShare":{"bdContainerClass":null,"bdSelectMiniList":["qzone","tsina","tqq","renren","weixin"]}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>
</body>
</html>