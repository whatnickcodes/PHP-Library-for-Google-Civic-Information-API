<!doctype html>
<!--[if IE 6]> 		<html class="ie6 ie">	<![endif]-->
<!--[if IE 7]>   	<html class="ie7 ie">	<![endif]-->
<!--[if IE 8]>    	<html class="ie8 ie">	<![endif]-->
<!--[if IE 9]>    	<html class="ie9 ie">	<![endif]-->
<!--[if gt IE 9]>	<!--><html>				<!--<![endif]-->
<head>
<!-- Begin Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1"><!-- Force IE to use the latest rendering engine -->
	<meta name="viewport" content="width=1150, maximum-scale=1.0"><!-- Optimize mobile viewport -->
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta name="apple-mobile-web-app-capable" content="yes">
<!-- End Meta -->

<!-- Begin Icons -->
	<!--<link rel="shortcut icon" type="image/png" href="http://tips.io/assets/img/favicon-16.png"><!-- default favicon -->
	<!--<link rel="apple-touch-icon" sizes="57x57" href="images/icons/favicon-57.png"><!-- iPhone low-res and Android -->
	<!--<link rel="apple-touch-icon-precomposed" sizes="57x57" href="images/icons/favicon-57.png"><!-- Legacy Android -->
	<!--<link rel="apple-touch-icon" sizes="72x72" href="images/icons/favicon-72.png"><!-- iPad -->
	<!--<link rel="apple-touch-icon" sizes="114x114" href="images/icons/favicon-114.png"><!-- iPhone 4 -->
	<!--<link rel="apple-touch-icon" sizes="144x144" href="images/icons/favicon-144.png"><!-- iPad hi-res -->
<!-- End Icons -->

<!-- Begin CSS -->
	<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Lato:300,400,700,400italic"> <!-- Fallback to Lato if Segoe UI is not on user's computer -->
	<link rel="stylesheet" href="/assets/css/metro.css">
	<link rel="stylesheet" href="/assets/css/style.css">
<!-- End CSS -->

<!-- Begin JS -->
	<!--[if lt IE 9]><script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script src="http://tips.io/assets/js/magic.js"></script>
<!-- End JS -->
</head>
<body>

	<header>
		<div id="logo">
			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" width="100%" height="100%" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
				<g><path d="M1,52.067c0,0,25.368,31.711,31.711,46.933C50.469,50.8,98.669,2.6,98.669,2.6S73.3,20.358,32.71,71.095L1,52.067z"/></g>
			</svg>	
		</div>
		<h1>Find your polling locations for the 2012 Election</h1>
	</header>

	<section id="content">
		<?php
			if (isset($_GET['address']) && !empty($_GET['address'])) : 
				include 'pages/results.php';
			else :
				include 'pages/search.php';
			endif;
		?>
	</section>

	<footer>
		<a href="http://engagedc.com">Engage</a> || <a href="http://github.com/ncerminara">Fork on GitHub</a>
	</footer>

</body>
</html>