<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>摄影作品</title>
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
    <link rel="stylesheet" href="/Apps/Home/View/LoginHome/css/style1.css" media="screen" type="text/css" />
    <script type="text/javascript">
        $(document).ready(function(){
            $("#follow").click(function(){
                alert("csd");
         });
        });
    </script>
</head>
<body>
<div class="md-modal md-effect-1" id="modal-1">
    <div class="md-content">
        <h3>Modal Dialog</h3>
        <div>
            <p>This is a modal window. You can do the following things with it:</p>
            <ul>
                <li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
                <li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
                <li><strong>Close:</strong> click on the button below to close the modal.</li>
            </ul>
            <button class="md-close">Close me!</button>
        </div>
    </div>
</div>
<div class="gtco-loader"></div>
<div id="page">
    <div class="page-inner">
        <nav class="gtco-nav" role="navigation">
            <div class="gtco-container">
                <div class="row">
                    <div class="col-sm-4 col-xs-12">
                        <div id="gtco-logo"><a href="/index.php/Home/LoginHome/photographHome2">Splash <em>.</em></a></div>
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
                    <div class="col-md-12">
                        <div class="col-md-6 animate-box">
                            <h3>作品图片展示</h3>
                            <img src="/Apps/Home/View/LoginHome/images/img_2.jpg"  alt="Image" class="img-responsive" id="pic">
                        </div>
                        <div class="col-md-5 col-md-push-1 animate-box">
                            <div class="gtco-contact-info">
                                <h3>作品信息</h3>
                                <ul>
                                    <!-- 点击作者（链接）进入作者个人空间-->
                                    <form id="upBox" method="post">
                                        <li class="phone"><a href="#"><b>作者:<?php echo ($username); ?></b></a>
                                        <button class="md-trigger" data-modal="modal-1" id="follow">Follow</button>
                                    </form> 
                                     <li class="address"><b>拍摄地点： <?php echo ($location); ?></b></li>
                                    <li ><b>作品标题：<?php echo ($title0); ?></b></li>
                                    <li ><b>作品内容：<?php echo ($content); ?></b></li>
                                    <li ><b>作品关键字：<?php echo ($keyword); ?></b></li>
                                    <li ><b>作品分类：<?php echo ($photoCategory); ?></b></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
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