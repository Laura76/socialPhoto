<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en" class="no-js">
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
<meta name="viewport" content="width=device-width, initial-scale=1"> 
<title>后台管理系统登录</title>
<link rel="stylesheet" type="text/css" href="/Apps/Admin/View/LoginAdmin/css/normalize.css" />
<link rel="stylesheet" type="text/css" href="/Apps/Admin/View/LoginAdmin/css/demo.css" />
<!--必要样式-->
<link rel="stylesheet" type="text/css" href="/Apps/Admin/View/LoginAdmin/css/component.css" />
<!--[if IE]>
<script src="js/html5.js"></script>
<![endif]-->
</head>
<body>
		<div class="container demo-1">
			<div class="content">
				<div id="large-header" class="large-header">
					<canvas id="demo-canvas"></canvas>
					<div class="logo_box">
						<h3>欢迎你</h3>
						<form action="/index.php/Admin/LoginAdmin/photographAdmin" name="f" method="post">
							<div class="input_outer">
								<span class="u_user"></span>
								<input name="account" class="text" style="color: #FFFFFF !important" type="text" placeholder="请输入账户">
							</div>
							<div class="input_outer">
								<span class="us_uer"></span>
								<input name="password" class="text" style="color: #FFFFFF !important; position:absolute; z-index:100;"value="" type="password" placeholder="请输入密码">
							</div>
							<div class="mb2"><input type="submit" class="act-but submit" href="javascript:;" style="color: #FFFFFF" value="			  登录			  	"></div>
						</form>
					</div>
				</div>
			</div>
		</div><!-- /container -->
		<script src="/Apps/Admin/View/LoginAdmin/js/TweenLite.min.js"></script>
		<script src="/Apps/Admin/View/LoginAdmin/jsEasePack.min.js"></script>
		<script src="/Apps/Admin/View/LoginAdmin/js/rAF.js"></script>
		<script src="/Apps/Admin/View/LoginAdmin/js/demo-1.js"></script>
		<div style="text-align:center;">
</div>
	</body>
</html>