<?php 

$title = "Portfolio";
include( 'includes/header.inc.php' ); ?>

<div class="row">
	<div class="twelve columns">
		<p class="huge_text" style="text-align:center;">
			A brief overview of some of my projects.
		</p>
	</div>
</div>

<hr />





<div class="row">
	<div class="five columns">
		<a class="th">
			<img src="<?=$images;?>/icons/placeholder_350x200.jpg" alt="Placeholder" title="Placeholder" />
			<div class="port_caption"><p class="heading">cms</p></div>
		</a>
	</div>
	<div class="seven columns portfolio_listing">
		<!-- <p class="heading">CMS Project</p> -->
		<p>Built a fully-featured CMS from scratch, complete with tiered user levels, messaging, notifications, and a javascript-based page building platform.</p>

		<a href="#" data-reveal-id="portfolio_cms" class="large button port_open_info">Screenshots</a>
	</div>
</div>

<div class="row">
	<hr />
	<div class="five columns">
		<a class="th">
			<img src="<?=$images;?>/icons/placeholder_350x200.jpg" alt="Placeholder" title="Placeholder" />
			<div class="port_caption"><p class="heading">bantp</p></div>
		</a>
	</div>
	<div class="seven columns portfolio_listing">
		<!-- <p class="heading">Bad Ass New Tab Page</p> -->
		<p>I wrote a browser extension for Google Chrome that makes the new tab page a functional, beautiful place to make browsing more pleasant.</p>

		<ul class="button-group rounded port_open_info">
			<li><a href="https://chrome.google.com/webstore/detail/bad-ass-new-tab-page/imlpnfeegpmpamjfojedndkmnhdmdnmd" class="large success button">Chrome Web Store</a></li>
			<li><a href="#" data-reveal-id="portfolio_bantp" class="large button">Screenshots</a></li>
		</ul>
	</div>
</div>

<div class="row">
	<hr />
	<div class="five columns">
		<a class="th">
			<img src="<?=$images;?>/icons/placeholder_350x200.jpg" alt="Placeholder" title="Placeholder" />
			<div class="port_caption"><p class="heading">rubyphp</p></div>
		</a>
	</div>
	<div class="seven columns portfolio_listing">
		<!-- <p class="heading">RubyPHP</p> -->
		<p>I wrote a really awesome PHP class that allows developers to harness the simplicity and syntax of Ruby in their codebase.</p>

		
		<ul class="button-group rounded port_open_info">
			<li><a href="#" class="large success button">View on GitHub</a></li>
			<li><a href="#" data-reveal-id="portfolio_rubyphp" class="large button">Screenshots</a></li>
		</ul>
	</div>
</div>

<div class="row">
	<hr />
	<div class="five columns">
		<a class="th">
			<img src="<?=$images;?>/icons/placeholder_350x200.jpg" alt="Placeholder" title="Placeholder" />
			<div class="port_caption"><p class="heading">tickomatic</p></div>
		</a>
	</div>
	<div class="seven columns portfolio_listing">
		<!-- <p class="heading">TickoMatic</p> -->
		<p>I wrote a fun little application that provides users with a countdown timer and a serene image switching theme.</p>

		<a href="#" data-reveal-id="portfolio_tickomatic" class="large button port_open_info">Screenshots</a>
	</div>
</div>

<script>
$(window).load( function() {
	$("#slider_bantp").orbit({
		animation : "fade",
		animationSpeed : 400
	});
});
</script>
<!-- Below are the modal dialogs -->
<div id="portfolio_bantp" class="hidden reveal-modal large">
	<p class="big_white">Bad Ass New Tab Page</p>
	<div id="slider_bantp" class="slider">
		<img src="<?=$images;?>/portfolio/bantp_1.jpg" />
		<img src="<?=$images;?>/portfolio/bantp_2.jpg" />
		<img src="<?=$images;?>/portfolio/bantp_3.jpg" />
		<img src="<?=$images;?>/portfolio/bantp_4.jpg" />
	</div>
</div>

<?php include( 'includes/footer.inc.php' ); ?>