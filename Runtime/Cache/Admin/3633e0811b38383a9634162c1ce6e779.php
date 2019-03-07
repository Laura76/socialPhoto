<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>后台活动发布</title>
    <meta name="keywords"  content="设置关键词..." />
    <meta name="description" content="设置描述..." />
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <link rel="icon" href="/Apps/Admin/View/LoginAdmin/img/icon/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="/Apps/Admin/View/LoginAdmin/css/style.css" />
    <script src="/Apps/Admin/View/LoginAdmin/js/jquery.js"></script>
    <script src="/Apps/Admin/View/LoginAdmin/js/plug-ins/customScrollbar.min.js"></script>
    <script src="/Apps/Admin/View/LoginAdmin/js/plug-ins/echarts.min.js"></script>
    <script src="/Apps/Admin/View/LoginAdmin/js/plug-ins/layerUi/layer.js"></script>
    <script src="/Apps/Admin/View/LoginAdmin/editor/ueditor.config.js"></script>
    <script src="/Apps/Admin/View/LoginAdmin/editor/ueditor.all.js"></script>
    <script src="/Apps/Admin/View/LoginAdmin/js/plug-ins/pagination.js"></script>
    <script src="/Apps/Admin/View/LoginAdmin/js/public.js"></script>
</head>
<body>
<div class="main-wrap">
    <div class="side-nav">
        <div class="side-logo">
            <div class="logo">
				<span class="logo-ico">
					<i class="i-l-1"></i>
					<i class="i-l-2"></i>
					<i class="i-l-3"></i>
				</span>
                <a href="/index.php/Admin/LoginAdmin/userAdmin"><strong>摄影社交网站后台管理</strong></a>
            </div>
        </div>

        <nav class="side-menu content mCustomScrollbar" data-mcs-theme="minimal-dark">
            <ul>
                <li>
                    <dl>
                        <dt>
                            <i class="icon-columns"></i>用户管理<i class="icon-angle-right"></i>
                        </dt>
                        <dd>
                            <a href="/index.php/Admin/LoginAdmin/userEdit">用户编辑</a>
                        </dd>
                    </dl>
                </li>
            </ul>
            <ul>
                <li>
                    <dl>
                        <dt>
                            <i class="icon-columns"></i>摄影活动管理<i class="icon-angle-right"></i>
                        </dt>
                        <dd>
                            <a href="/index.php/Admin/LoginAdmin/activityLaunch">活动发布</a>
                        </dd>
                        <dd>
                            <a href="/index.php/Admin/LoginAdmin/activityEdit">活动编辑</a>
                        </dd>
                    </dl>
                </li>
            </ul>
        </nav>
    </div>
    <div class="content-wrap">
        <header class="top-hd">
            <div class="hd-lt">
                <a class="icon-reorder"></a>
            </div>
            <div class="hd-rt">
                <ul>
                    <li>
                        <a href="#" target="_blank"><i class="icon-home"></i>前台访问</a>
                    </li>
                    <li>
                        <a><i class="icon-random"></i>清除缓存</a>
                    </li>
                    <li>
                        <a><i class="icon-user"></i>管理员:<em><?php echo ($account); ?></em></a>
                    </li>
                    <li>
                        <a><i class="icon-bell-alt"></i>系统消息</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" id="JsSignOut"><i class="icon-signout"></i>安全退出</a>
                    </li>
                </ul>
            </div>
        </header>
        <main class="main-cont content mCustomScrollbar">
            <!--开始::内容-->
            <div class="page-wrap">
                <section class="page-hd">
                    <header>
                        <h2 class="title"><i class="icon-home"></i>活动发布</h2>
                    </header>
                    <hr>
                </section>
                <blockquote class="blockquote mb-20">
                </blockquote>
                <div class="panel panel-default">
                    <div class="panel-bd capitalize">
                        浏览器兼容：google chrome、microsoft edge、360浏览器、火狐浏览器、uc浏览器等高版本浏览器。
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
</body>
</html>