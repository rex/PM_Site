<?php

$url = "http://localhost/PM_Site";
$assets = "$url/assets";
$images = "$assets/images";
$page = strtolower( str_replace( "/PM_Site/" , "" , $_SERVER['REQUEST_URI'] ) );

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

	<link rel="shortcut icon" href="<?=$images;?>/favicon.ico" />
	<link rel="stylesheet" href="assets/css/foundation.min.css">
	<!-- <link rel="stylesheet" href="assets/css/style.css" type="text/css"> -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,700|Oxygen+Mono|Source+Sans+Pro:900|Open+Sans+Condensed:300|Josefin+Slab:300,700' rel='stylesheet' type='text/css'>

	<!-- Included JS Files (Compressed) -->
	<link rel="stylesheet/less" href="<?=$assets;?>/less/styles.less" type="text/css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
	<script src="<?=$assets;?>/js/unified.js"></script>


	<!-- IE Fix for HTML5 Tags -->
	<!--[if lt IE 9]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
<script>
function track( category , item , meta ) {
	_gaq.push([ '_trackevent', category , item , meta ]);
}
</script>
</head>
<body>

<a href="https://www.github.com/piercemoore" target="_blank" class="forkme_link"><img src="https://s3.amazonaws.com/github/ribbons/forkme_right_darkblue_121621.png" style="width: 110px;height:110px;" alt="Fork me on GitHub!" title="Fork me on GitHub!" /></a>

<!-- <a href="<?=$url;?>/resume" id="hire_me">
	<h1>Hire Me!</h1>
</a> -->
<div class="row">
	<div class="five columns">
		<a class="logo" id="logo" href="<?=$url;?>">PIERCE MOORE</a>
		<p style="font-family: 'Open Sans Condensed';font-size: 1.4em;letter-spacing: -1px;">Great code, great food, great music, great company.</p>
	</div>

	<div class="seven columns">
		<ul class="nav-bar">
			<li class="<?=($page=='code') ? 'active' : null ;?>"><a href="<?=$url;?>/code">Code</a></li>
			<li class="<?=($page=='music') ? 'active' : null ;?>"><a href="<?=$url;?>/music">Music</a></li>
			<li class="<?=($page=='portfolio') ? 'active' : null ;?>"><a href="<?=$url;?>/portfolio">Portfolio</a></li>
			<!-- <li class="<?=($page=='showcase') ? 'active' : null ;?>"><a href="<?=$url;?>/showcase">Showcase</a></li>-->
			
			<?php if( $page == 'resume' ): ?>
				<li class="active">
					<a href="<?=$url;?>/resume">Resume</a>
				</li>
			<?php else: ?>
				<li class="has-flyout">
					<a href="<?=$url;?>/resume">Resume</a>
					<!-- <a href="#" class="flyout-toggle"><span> </span></a> -->
					<ul class="flyout">
						<li><a href="<?=$url;?>/resume#objective">Objective</a></li>
						<li><a href="<?=$url;?>/resume#experience">Experience</a></li>
						<li><a href="<?=$url;?>/resume#certs">Certifications</a></li>
						<li><a href="<?=$url;?>/portfolio">Portfolio</a></li>
						<li><a href="<?=$url;?>/resume#skills">Training / Skills</a></li>
						<li><a href="<?=$url;?>/resume#references">References</a></li>
					</ul>
				</li>
			<?php endif; ?>
			<li class="down" style="float: right;"><a href="#" data-reveal-id="hireme_modal" style="font-size: 1.2em;letter-spacing: -2px;"><strong>Hire Me!</strong></a></li>
		</ul>
	</div>

</div>

<script>
$(document).ready(function() {
	$("#hireme_contact_submit").live('click', function() {
		$.ajax({
			url		:	"<?=$url;?>/includes/ajax.php",
			data 	: 	'email=' + $("#hireme_contact_email").val(),
			success : 	function( msg ) {
				console.log( msg );
				alert( msg );
			}
		});
	});
});
</script>

<!-- "Hire Me" Modal for all pages -->
<div id="hireme_modal" class="reveal-modal medium" style="display: none;">
	<p class="heading">I make a great team member.</p>

	<p class="subheading" style="line-height: 100%;">
		I am currently looking for the next team that I will grow with, and I think that you should consider me for yours.
	</p>
	<div class="row">
		<div class="three columns">

			<a class="th"><img class="th" src="<?=$images;?>/PierceMoore.jpg" /></a>

		</div>

		<div class="nine columns">
		 
			<table>
				<thead>
					<th>Connect on LinkedIn</th>
					<!-- <th>Download my vCard</th>
					<th>Download my R&eacute;sum&eacute;</th> -->
				</thead>

				<tbody>
					<tr>
						<td><a href="http://www.linkedin.com/in/piercemoore" target="_blank" class="large radius button" alt="View my LinkedIn Profile" title="View my LinkedIn Profile" ><img src="<?=$images;?>/icons/linkedin.png" /></a></td>
						<!-- <td><a href="#" target="_blank" class="large radius button disabled" alt="Download my vCard" title="Download my vCard" ><img src="<?=$images;?>/icons/vcard.png" /></a></td> -->
						<!-- <td><a href="#" target="_blank" class="large radius button disabled" alt="Download my R&eacute;sum&eacute;" title="Download my R&eacute;sum&eacute;" ><img src="<?=$images;?>/icons/resume.png" /></a></td> -->
					</tr>
				</tbody>
			</table>


			<!-- <p class="subheading">If you leave me your email address, I'll contact you immediately.</p>
			<div class="row collapse">
				<div class="ten columns">
					<input type="text" id="hireme_contact_email" placeholder="Your Email Address..." />
				</div>
				<div class="two columns">
					<a href="#" id="hireme_contact_submit" class="postfix button" style="padding-left: 20px;padding-right: 20px;">Connect</a>
				</div>
			</div> -->
		</div>
	</div>
	

	<a class="close-reveal-modal normal alert button"> </a>
</div>