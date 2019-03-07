<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>摄影活动主页</title>
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
                        <div id="gtco-logo"><a href="/index.php/Home/LoginHome/photographHome2">Splash <em>.</em></a></div>
                    </div>
                    <div class="col-xs-8 text-right menu-1">
                        <ul>
                            <li class="active"><a href="#线下活动">线下活动</a></li>
                            <li class="has-dropdown">
                                <a href="#线上活动">线上活动</a>
                            </li>
                            <li class="btn-cta"><a href="/index.php/Home/LoginHome/photographHome2"><span>Get back</span></a></li>
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
                    <div class="col-md-7 mt-text animate-box" data-animate-effect="fadeInUp">
                        <span class="intro-text-small"><b><strong>热门活动推荐</strong></b><h1><strong><?php echo ($username); ?></strong></h1></span>
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
                                <p>热门摄影活动推荐</p>
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
                                <p>热门摄影活动推荐</p>
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

        <div class="gtco-section border-bottom" name="线下活动" id="线下活动">
            <div class="gtco-container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center gtco-heading">
                        <h2>线下活动</h2>
                        <a href="#">摄影外拍<b>|</b></a><a href="#">美食聚会<b>|</b></a><a href="#">宠物聚会<b>|</b></a><a href="#">自驾活动<b>|</b></a><a href="#">沙龙展览</a></p>
                    </div>
                </div>
                <div class="row">
                        <div class="col-md-4 animate-box">
                            <a href="/Apps/Home/View/LoginHome/images/img_5.jpg" class="fh5co-project-item image-popup">
                            <figure>
                                <div class="overlay"><i class="ti-plus"></i></div>
                                <img src="<?php echo $pictureAddress ;?>" onerror="this.src='/Apps/Home/View/LoginHome/images/img_5.jpg'" alt="Image" class="img-responsive">
                            </figure>
                            </a>
                        </div>
                        <div class="col-md-8">
                            <div class="gtco-widget">
                                <h3>摄影活动题目:<?php echo ($activityTitle1); ?></h3>
                                <ul >
                                    <li>活动组织者:<?php echo ($activityLeader); ?><b>|</b>活动类别:<?php echo ($activityCategory); ?></li>
                                    <li>活动简介:<?php echo ($activityIntroduction); ?></li>
                                    <li>活动时间:<?php echo ($activityTime); ?><b>|</b>活动费用:<?php echo ($activityFee); ?></li>
                                    <li>活动地点:<?php echo ($activityPlace); ?><b>|</b>活动详细地址:<?php echo ($activityPosition); ?></li>
                                </ul>
                            </div>
                        </div>
                </div>
                <div class="row">
                    <div class="col-md-4 animate-box">
                        <a href="/Apps/Home/View/LoginHome/images/img_5.jpg" class="fh5co-project-item image-popup">
                            <figure>
                                <div class="overlay"><i class="ti-plus"></i></div>
                                <img src="/Apps/Home/View/LoginHome/images/img_5.jpg" alt="Image" class="img-responsive">
                            </figure>
                        </a>
                    </div>
                    <div class="col-md-8">
                        <div class="gtco-widget">
                            <h3>摄影活动题目:<?php echo ($activityTitle2); ?></h3>
                            <ul >
                                <li>活动组织者:<?php echo ($activityLeader); ?><b>|</b>活动类别:<?php echo ($activityCategory); ?></li>
                                <li>活动简介:<?php echo ($activityIntroduction); ?></li>
                                <li>活动时间:<?php echo ($activityTime); ?><b>|</b>活动费用:<?php echo ($activityFee); ?></li>
                                <li>活动地点:<?php echo ($activityPlace); ?><b>|</b>活动详细地址:<?php echo ($activityPosition); ?></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 animate-box">
                        <a href="/Apps/Home/View/LoginHome/images/img_5.jpg" class="fh5co-project-item image-popup">
                            <figure>
                                <div class="overlay"><i class="ti-plus"></i></div>
                                <img src="/Apps/Home/View/LoginHome/images/img_5.jpg" alt="Image" class="img-responsive">
                            </figure>
                        </a>
                    </div>
                    <div class="col-md-8">
                        <div class="gtco-widget">
                            <h3>摄影活动题目:<?php echo ($activityTitle3); ?></h3>
                            <ul >
                                <li>活动组织者:<?php echo ($activityLeader); ?><b>|</b>活动类别:<?php echo ($activityCategory); ?></li>
                                <li>活动简介:<?php echo ($activityIntroduction); ?></li>
                                <li>活动时间:<?php echo ($activityTime); ?><b>|</b>活动费用:<?php echo ($activityFee); ?></li>
                                <li>活动地点:<?php echo ($activityPlace); ?><b>|</b>活动详细地址:<?php echo ($activityPosition); ?></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 animate-box">
                        <a href="/Apps/Home/View/LoginHome/images/img_5.jpg" class="fh5co-project-item image-popup">
                            <figure>
                                <div class="overlay"><i class="ti-plus"></i></div>
                                <img src="/Apps/Home/View/LoginHome/images/img_5.jpg" alt="Image" class="img-responsive">
                            </figure>
                        </a>
                    </div>
                    <div class="col-md-8">
                        <div class="gtco-widget">
                            <h3>摄影活动题目:<?php echo ($activityTitle4); ?></h3>
                            <ul >
                                <li>活动组织者:<?php echo ($activityLeader); ?><b>|</b>活动类别:<?php echo ($activityCategory); ?></li>
                                <li>活动简介:<?php echo ($activityIntroduction); ?></li>
                                <li>活动时间:<?php echo ($activityTime); ?><b>|</b>活动费用:<?php echo ($activityFee); ?></li>
                                <li>活动地点:<?php echo ($activityPlace); ?><b>|</b>活动详细地址:<?php echo ($activityPosition); ?></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 animate-box">
                        <a href="/Apps/Home/View/LoginHome/images/img_5.jpg" class="fh5co-project-item image-popup">
                            <figure>
                                <div class="overlay"><i class="ti-plus"></i></div>
                                <img src="/Apps/Home/View/LoginHome/images/img_5.jpg" alt="Image" class="img-responsive">
                            </figure>
                        </a>
                    </div>
                    <div class="col-md-8">
                        <div class="gtco-widget">
                            <h3>摄影活动题目:<?php echo ($activityTitle5); ?></h3>
                            <ul >
                                <li>活动组织者:<?php echo ($activityLeader); ?><b>|</b>活动类别:<?php echo ($activityCategory); ?></li>
                                <li>活动简介:<?php echo ($activityIntroduction); ?></li>
                                <li>活动时间:<?php echo ($activityTime); ?><b>|</b>活动费用:<?php echo ($activityFee); ?></li>
                                <li>活动地点:<?php echo ($activityPlace); ?><b>|</b>活动详细地址:<?php echo ($activityPosition); ?></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 animate-box">
                        <a href="/Apps/Home/View/LoginHome/images/img_5.jpg" class="fh5co-project-item image-popup">
                            <figure>
                                <div class="overlay"><i class="ti-plus"></i></div>
                                <img src="/Apps/Home/View/LoginHome/images/img_5.jpg" alt="Image" class="img-responsive">
                            </figure>
                        </a>
                    </div>
                    <div class="col-md-8">
                        <div class="gtco-widget">
                            <h3>摄影活动题目:<?php echo ($activityTitle6); ?></h3>
                            <ul >
                                <li>活动组织者:<?php echo ($activityLeader); ?><b>|</b>活动类别:<?php echo ($activityCategory); ?></li>
                                <li>活动简介:<?php echo ($activityIntroduction); ?></li>
                                <li>活动时间:<?php echo ($activityTime); ?><b>|</b>活动费用:<?php echo ($activityFee); ?></li>
                                <li>活动地点:<?php echo ($activityPlace); ?><b>|</b>活动详细地址:<?php echo ($activityPosition); ?></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-md-push-4">
                 <ul class="pagination pagination-lg">
                     <li><a href="#">&laquo;</a></li>
                     <li><a href="#">1</a></li>
                     <li><a href="#">2</a></li>
                     <li><a href="#">3</a></li>
                     <li><a href="#">4</a></li>
                     <li><a href="#">5</a></li>
                     <li><a href="#">&raquo;</a></li>
                 </ul><br>
                </div>
            </div>
        </div>

        <div class="gtco-section border-bottom" name="线上活动" id="线上活动">
            <div class="gtco-container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center gtco-heading">
                        <h2>线上活动</h2>
                        <a href="#">视觉类<b>|</b></a><a href="#">味觉类<b>|</b></a><a href="#">旅行类<b>|</b></a><a href="#">汽车类<b>|</b></a><a href="#">爱宠类</a></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 animate-box">
                        <a href="/Apps/Home/View/LoginHome/images/img_5.jpg" class="fh5co-project-item image-popup">
                            <figure>
                                <div class="overlay"><i class="ti-plus"></i></div>
                                <img src="/Apps/Home/View/LoginHome/images/img_5.jpg" alt="Image" class="img-responsive">
                            </figure>
                        </a>
                    </div>
                    <div class="col-md-8">
                        <div class="gtco-widget">
                            <h3>摄影活动题目:<?php echo ($activityTitle); ?></h3>
                            <ul >
                                <li>活动组织者:<?php echo ($activityLeader); ?><b>|</b>活动类别:<?php echo ($activityCategory); ?></li>
                                <li>活动简介:<?php echo ($activityIntroduction); ?></li>
                                <li>活动时间:<?php echo ($activityTime); ?><b>|</b>活动费用:<?php echo ($activityFee); ?></li>
                                <li>活动地点:<?php echo ($activityPlace); ?><b>|</b>活动详细地址:<?php echo ($activityPosition); ?></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 animate-box">
                        <a href="/Apps/Home/View/LoginHome/images/img_5.jpg" class="fh5co-project-item image-popup">
                            <figure>
                                <div class="overlay"><i class="ti-plus"></i></div>
                                <img src="/Apps/Home/View/LoginHome/images/img_5.jpg" alt="Image" class="img-responsive">
                            </figure>
                        </a>
                    </div>
                    <div class="col-md-8">
                        <div class="gtco-widget">
                            <h3>摄影活动题目:<?php echo ($activityTitle); ?></h3>
                            <ul >
                                <li>活动组织者:<?php echo ($activityLeader); ?><b>|</b>活动类别:<?php echo ($activityCategory); ?></li>
                                <li>活动简介:<?php echo ($activityIntroduction); ?></li>
                                <li>活动时间:<?php echo ($activityTime); ?><b>|</b>活动费用:<?php echo ($activityFee); ?></li>
                                <li>活动地点:<?php echo ($activityPlace); ?><b>|</b>活动详细地址:<?php echo ($activityPosition); ?></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 animate-box">
                        <a href="/Apps/Home/View/LoginHome/images/img_5.jpg" class="fh5co-project-item image-popup">
                            <figure>
                                <div class="overlay"><i class="ti-plus"></i></div>
                                <img src="/Apps/Home/View/LoginHome/images/img_5.jpg" alt="Image" class="img-responsive">
                            </figure>
                        </a>
                    </div>
                    <div class="col-md-8">
                        <div class="gtco-widget">
                            <h3>摄影活动题目:<?php echo ($activityTitle); ?></h3>
                            <ul >
                                <li>活动组织者:<?php echo ($activityLeader); ?><b>|</b>活动类别:<?php echo ($activityCategory); ?></li>
                                <li>活动简介:<?php echo ($activityIntroduction); ?></li>
                                <li>活动时间:<?php echo ($activityTime); ?><b>|</b>活动费用:<?php echo ($activityFee); ?></li>
                                <li>活动地点:<?php echo ($activityPlace); ?><b>|</b>活动详细地址:<?php echo ($activityPosition); ?></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 animate-box">
                        <a href="/Apps/Home/View/LoginHome/images/img_5.jpg" class="fh5co-project-item image-popup">
                            <figure>
                                <div class="overlay"><i class="ti-plus"></i></div>
                                <img src="/Apps/Home/View/LoginHome/images/img_5.jpg" alt="Image" class="img-responsive">
                            </figure>
                        </a>
                    </div>
                    <div class="col-md-8">
                        <div class="gtco-widget">
                            <h3>摄影活动题目:<?php echo ($activityTitle); ?></h3>
                            <ul >
                                <li>活动组织者:<?php echo ($activityLeader); ?><b>|</b>活动类别:<?php echo ($activityCategory); ?></li>
                                <li>活动简介:<?php echo ($activityIntroduction); ?></li>
                                <li>活动时间:<?php echo ($activityTime); ?><b>|</b>活动费用:<?php echo ($activityFee); ?></li>
                                <li>活动地点:<?php echo ($activityPlace); ?><b>|</b>活动详细地址:<?php echo ($activityPosition); ?></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 animate-box">
                        <a href="/Apps/Home/View/LoginHome/images/img_5.jpg" class="fh5co-project-item image-popup">
                            <figure>
                                <div class="overlay"><i class="ti-plus"></i></div>
                                <img src="/Apps/Home/View/LoginHome/images/img_5.jpg" alt="Image" class="img-responsive">
                            </figure>
                        </a>
                    </div>
                    <div class="col-md-8">
                        <div class="gtco-widget">
                            <h3>摄影活动题目:<?php echo ($activityTitle); ?></h3>
                            <ul >
                                <li>活动组织者:<?php echo ($activityLeader); ?><b>|</b>活动类别:<?php echo ($activityCategory); ?></li>
                                <li>活动简介:<?php echo ($activityIntroduction); ?></li>
                                <li>活动时间:<?php echo ($activityTime); ?><b>|</b>活动费用:<?php echo ($activityFee); ?></li>
                                <li>活动地点:<?php echo ($activityPlace); ?><b>|</b>活动详细地址:<?php echo ($activityPosition); ?></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 animate-box">
                        <a href="/Apps/Home/View/LoginHome/images/img_5.jpg" class="fh5co-project-item image-popup">
                            <figure>
                                <div class="overlay"><i class="ti-plus"></i></div>
                                <img src="/Apps/Home/View/LoginHome/images/img_5.jpg" alt="Image" class="img-responsive">
                            </figure>
                        </a>
                    </div>
                    <div class="col-md-8">
                        <div class="gtco-widget">
                            <h3>摄影活动题目:<?php echo ($activityTitle); ?></h3>
                            <ul >
                                <li>活动组织者:<?php echo ($activityLeader); ?><b>|</b>活动类别:<?php echo ($activityCategory); ?></li>
                                <li>活动简介:<?php echo ($activityIntroduction); ?></li>
                                <li>活动时间:<?php echo ($activityTime); ?><b>|</b>活动费用:<?php echo ($activityFee); ?></li>
                                <li>活动地点:<?php echo ($activityPlace); ?><b>|</b>活动详细地址:<?php echo ($activityPosition); ?></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-md-push-4">
                    <ul class="pagination pagination-lg">
                        <li><a href="#">&laquo;</a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">&raquo;</a></li>
                    </ul><br>
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