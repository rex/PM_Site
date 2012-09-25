<?php

$url = "http://localhost/PM_Site";

?>

<!DOCTYPE html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8" />

	<!-- Set the viewport width to device width for mobile -->
	<meta name="viewport" content="width=device-width" />

	<title><?=$title;?> :: Pierce Moore</title>

	<link rel="stylesheet" href="assets/css/foundation.min.css">
	<!-- <link rel="stylesheet" href="assets/css/style.css" type="text/css"> -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,700|Oswald:300|Open+Sans+Condensed:300|Josefin+Slab:300,700' rel='stylesheet' type='text/css'>

	<!-- Included JS Files (Compressed) -->
	<link rel="stylesheet/less" href="assets/less/styles.less" type="text/css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
	<script src="assets/js/unified.js"></script>


	<!-- IE Fix for HTML5 Tags -->
	<!--[if lt IE 9]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

</head>
<body>


<div class="row">
	<div class="five columns">
		<a class="logo" href="#">Pierce Moore</a>
		<h5 style="margin-top:0;">great code, great food, great music, great company.</h5>
	</div>

	<div class="seven columns">
		<br /><br />
		<a href="<?=$url;?>/code" class="btn">
			Code
		</a>
		<a href="<?=$url;?>/music/" class="btn">
			Music
		</a>
		<a href="<?=$url;?>/portfolio/" class="btn">
			Portfolio
		</a>
		<a href="<?=$url;?>/showcase/" class="btn">
			Showcase
		</a>
	</div>
</div>
