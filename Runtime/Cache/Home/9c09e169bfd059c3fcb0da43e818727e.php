<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>
    <title>CSS3/jQuery自定义弹出窗口DEMO演示</title>
    <link rel="stylesheet" href="/Apps/Home/View/LoginHome/css/style1.css" charset="utf-8" type="text/css"/>
</head>

<body>

<html lang="en" class="no-js">
	<head>
		<script src="/Apps/Home/View/LoginHome/js/modernizr.custom.js"></script>
	</head>
	<body>
		<!-- All modals added here for the demo. You would of course just have one, dynamically created -->
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
		
		<div class="container">
			<!-- Top Navigation -->

			<header>
				<div style="text-align:center;clear:both;">
<script src="/gg_bd_ad_720x90.js" type="text/javascript"></script>
<script src="/follow.js" type="text/javascript"></script>
</div>
			</header>
			<div class="main clearfix">
				<div class="column">
					<p>There are many possibilities for modal overlays to appear. Here are some modern ways of showing them using CSS transitions and animations.</p>
				</div>
				<div class="column">
					<button class="md-trigger" data-modal="modal-1">Fade in &amp; Scale</button>
				</div>
			</div>
		</div><!-- /container -->
		<div class="md-overlay"></div><!-- the overlay element -->

		<!-- classie.js by @desandro: https://github.com/desandro/classie -->
		<script src="/Apps/Home/View/LoginHome/js/classie.js"></script>
		<script src="/Apps/Home/View/LoginHome/js/modalEffects.js"></script>

		<!-- for the blur effect -->
		<!-- by @derSchepp https://github.com/Schepp/CSS-Filters-Polyfill -->
		<script>
			// this is important for IEs
			var polyfilter_scriptpath = '/js/';
		</script>
		<script src="/Apps/Home/View/LoginHome/js/cssParser.js"></script>
		<script src="/Apps/Home/View/LoginHome/js/css-filters-polyfill.js"></script>
	</body>
</html>

  <script src="/Apps/Home/View/LoginHome/js/index.js"></script>

</body>

</html>