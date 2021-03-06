<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>发布摄影作品</title>
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
    <style type="text/css">
			*{
				margin: 0;
				padding: 0;
			}
			#upBox{
				text-align: center;
				width:500px;
				padding: 20px;
				border: 1px solid #666;
				margin: auto;
				margin-top: 150px;
				margin-bottom: 200px;
				position: relative;
				border-radius: 10px;
			}
			#inputBox{
				width: 100%;
				height: 40px;
				border: 1px solid cornflowerblue;
				color: cornflowerblue;
				border-radius: 20px;
				position: relative;
				text-align: center;
				line-height: 40px;
				overflow: hidden;
				font-size: 16px;
			}
			#inputBox input{
				width: 114%;
				height: 40px;
				opacity: 0;
				cursor: pointer;
				position: absolute;
				top: 0;
				left: -14%;

			}
			#imgBox{
				text-align: left;
			}
			.imgContainer{
				display: inline-block;
				width: 32%;
				height: 150px;
				margin-left: 1%;
				border: 1px solid #666666;
				position: relative;
				margin-top: 30px;
				box-sizing: border-box;
			}
			.imgContainer img{
				width: 100%;
				height: 150px;
				cursor: pointer;
			}
			.imgContainer p{
				position: absolute;
				bottom: -1px;
				left: 0;
				width: 100%;
				height: 30px;
				background: black;
				text-align: center;
				line-height: 30px;
				color: white;
				font-size: 16px;
				font-weight: bold;
				cursor: pointer;
				display: none;
			}
			.imgContainer:hover p{
				display: block;
			}
			#btn{
				display: inline-block;
				text-align: center;
				line-height: 30px;
				outline: none;
				width: 100px;
				height: 30px;
				background: cornflowerblue;
				border: 1px solid cornflowerblue;
				color: white;
				cursor: pointer;
				margin-top: 30px;
				border-radius: 5px;
			}
		</style>
    <script src="http://www.jq22.com/jquery/jquery-1.10.2.js"></script>
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
                            <li class="btn-cta"><a href="/index.php/Home/LoginHome/photographHome2"><span>Get back</span></a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </nav>
        <header id="gtco-header" class="gtco-cover" role="banner" style="background-image: url(/Apps/Home/View/LoginHome/images/img_2.jpg)">
            <div style="width: 100%;height: 100vh;position: relative;">
                <form id="upBox" action="/index.php/Home/LoginHome/photoUploadSubmit" enctype="multipart/form-data" method="post">
                    <input name="title" class="form-control" placeholder="标题"><br/>
                    <input name="content" class="form-control" placeholder="内容"><br/>
                    <input name="location" class="form-control" placeholder="拍摄地点"><br/>
                    <input name="keyword" class="form-control" placeholder="关键词:自拍、小吃、沙滩、DIY......"><br/>
                    <input type="file"  name="photo" /><br/>
                    <select id="example-radio" class="form-control" name="photoCategory">
                        <option value="photoCategory">photoCategory</option>
                        <option value="人像摄影" name="photoCategory" >人像摄影</option>
                        <option value="生态摄影">生态摄影</option>
                        <option value="宠物摄影">宠物摄影</option>
                        <option value="自拍摄影">自拍摄影</option>
                        <option value="商业摄影">商业摄影</option>
                    </select>
                    <input type="submit" id="btn" value="上传">
                </form>
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