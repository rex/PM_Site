<?php 

$title = "Code";
include( 'includes/header.inc.php' ); ?>

<?php

class Snippets {

	public $snips;

	function __construct() {

		$this->snips = new stdClass;
	
	}

	public function add( $name , $short , $lang , $url ) {

		end( $this->snips );
		( count( $this->snips ) == 0 ) ? $id = 0 : $id = ( key( $this->snips ) + 1 );
		$this->snips->$id = new stdClass;
		$this->snips->$id->name = $name;
		$this->snips->$id->short = $short;
		$this->snips->$id->lang = $lang;
		$this->snips->$id->url = $url;

	}

}

$snips = new Snippets();
$snips->add( "Basic Reddit Reader in PHP" , "PHP Reddit Reader" , "php" , "https://gist.github.com/3105963.js?file=redditReaderBasic.php" );
$snips->add( "Recursively Convert a Multi-Dimentional PHP Array to an Object" , "Array to Object" , "php" , "https://gist.github.com/3107841.js?file=arrayToObject.php" );
$snips->add( "Function Recursion within a Class / Object" , "Recursion in a Class" , "php" , "https://gist.github.com/2292935.js?file=gistfile1.aw" );
$snips->add( "Unlimited / Variable Number Function Arguments" , "Variable Function Arguments" , "php" , "https://gist.github.com/2253239.js?file=gistfile1.aw" );
$snips->add( "Keep the Footer at the Bottom of the Page with jQuery" , "jQuery Footer Placement" , "js" , "https://gist.github.com/1969584.js?file=placefooter.jquery.js" );
$snips->add( "Add and Loop Through All Snippets on this Page" , "This Page's Snippet Loop" , "php" , "https://gist.github.com/3825556.js?file=pm_codepage.php" );
$snips->add( "Recurse through an object and display formatted contents" , "Formatted Object Recursion Display" , "php" , "https://gist.github.com/4005418.js?file=zngine_feedback.php" );
$snips->add( "Mongoose Schema to store GitHub Issues" , "Mongoose Schema - GitHub Issues" , "js" , "https://gist.github.com/4005413.js?file=feedback.js" );

?>

<script>
$(window).load( function() {
	$(".snippetButton").click( function( e ) {
		e.preventDefault();
		var href = $(this).attr("href");
		$("html,body").animate({ scrollTop : 0 }, 500 , function() {
			$(href).reveal();
		});
		$(".reveal-modal").attr("style","top: -30px;margin-top:-30px;");
		
	});
});
</script>

<div class="row">

	<div class="twelve columns">

		<p class="huge_text" style="text-align:center;">
			I write lots and lots of code.
		</p>


<?php 

$counter = 1;

foreach( $snips->snips as $snippet ): ?>

<div id="snippet_<?=$counter;?>" class="snippet reveal-modal expand">
	<h1><?=$snippet->name;?></h1>
	<script src="<?=$snippet->url;?>"></script>

	<?php if( $counter > 1 ): ?>
		<a href="#" data-reveal-id="snippet_<?=$counter - 1;?>" class="medium secondary button snippetButton" style="float: left;">Last Snippet: <?=$snips->snips->{$counter - 1}->short;?></a>
	<?php endif; ?>

	<?php if( isset( $snips->snips->{$counter + 1} ) ): ?>
		<a href="#" data-reveal-id="snippet_<?=$counter + 1;?>" class="medium button snippetButton" style="float: right;">Next Snippet: <?=$snips->snips->{$counter + 1}->short;?></a>
	<?php endif; ?>

	<a class="close-reveal-modal normal alert button"> </a>
</div>


<a href="#" data-reveal-id="snippet_<?=$counter;?>" class="medium secondary button snippetButton"><span class="round label"><?=$snippet->lang;?></span> <?=$snippet->short;?></a>

<?php $counter++; ?>
<?php endforeach; ?>



	</div>

</div>
<!-- https://api.github.com/users/piercemoore/repos? -->
<script>


$(document).ready(function() {

	var btn_gh_fetch = $("#github_show");
	var progress = $("#github_progress");
	var gh_list =  $("#github_area");
	var gh_table = $("#github_repos_table tbody");
	var p_repo = $("#processing_repo");
	var p_action = $("#processing_action");
	var p_progress = $("#processing_progress");
	var p_header = $("#processing_header");
	var gh_gravatar_img = $("#my_gravatar_gh");
	var gh_gravatar_a = $("#my_gravatar_link");
	var gh_name = "";
	var gh_link = "";
	var gh_grav = "";

	function addField( name , value ) {
		console.log( "Adding field: " + name + ", value: " + value );
		//p_action.text( name );
		return "<td>" + value + "</td>";
	}

	$("#github_show").click( function() {
		var table_html = "";
		var pbar_width = 0;

		$(this).addClass("disabled").slideUp("fast");
		progress.slideDown("fast").removeClass("hidden");
		p_header.text("FETCHING...");
		pbar_width += 5;
		p_progress.animate({width: pbar_width + "%"}, 250 );

		$.getJSON("https://api.github.com/users/piercemoore/repos?", function( data ) {
			pbar_width += 5;
			p_progress.animate({width: pbar_width + "%" }, 250 );
			p_header.text("PROCESSING...");
			var increment = 80 / parseInt( data.length );
			$.each( data , function( key , val ) {
				pbar_width += increment;
				p_progress.animate({ width : pbar_width + "%" }, 250, "linear", function() {
					p_repo.text( val.name );
				});
				console.log("Now doing repository '" + val.name + "'." );
				var repo_link = '<a class="small radius button f_general" style="font-weight: 700;" href="' + val.html_url + '" target="_blank" alt="Open \"' + val.name + '\" on GitHub" title="Open \"' + val.name + '\" on GitHub">' + val.name + '</a>';
				table_html += "<tr>";
				table_html += addField( "Repository Name" , repo_link );
				table_html += addField( "Repository Description" , val.description );
				table_html += addField( "Repository Language" , val.language );
				table_html += addField( "Watchers" , val.watchers );
				table_html += addField( "Forks" , val.forks );
				table_html += addField( "Issues" , val.open_issues_count );
				table_html += "</tr>";
				gh_gravatar_img.attr({
					src : val.owner.avatar_url,
					alt : "See " + val.owner.login + " on GitHub",
					title : "See " + val.owner.login + " on GitHub"
				});
				gh_gravatar_a.attr({
					href : "https://www.github.com/user/" + val.owner.login,
					alt : "See " + val.owner.login + " on GitHub",
					title : "See " + val.owner.login + " on GitHub"
				});
			});
			gh_table.append( table_html );
			p_progress.animate({ width : "100%" }, 100, "linear", function() {
				progress.slideUp("fast");
				gh_list.slideDown("fast");
			});
		});

	});

});
</script>

	<hr />

<div class="row">
	<div id="github_progress" class="twelve columns hidden">
		<div class="radius progress" style="width:100%;">
			<span class="meter" id="processing_progress" style="width: 0%;"><img src="<?=$images;?>/ajax-loader.gif" style="margin:1px 5px;float: right;" /></span>
		</div>
		<h2 class="f_general" id="processing_header">PROCESSING REPOSITORY:</h2>
		<p id="processing_repo" class="subheading"></p>
		<p class="subheading" id="processing_action"></p>
	</div>
	<div class="twelve columns centered" style="text-align: center;">
		<a href="#" id="github_show" class="large radius button">
			<p>
				<img src="<?=$images;?>/icons/githubpx.png" alt="Fetch my GitHub Repos" title="Fetch my GitHub Repos" align="left" style="margin-right: 15px;" />
				Fetch my GitHub Repos by Clicking this Awesome Button!
			</p>
		</a>
	</div>
</div>

<div id="github_area" style="display:none;">


	<div class="row">
		<div class="four columns">
			<a href="" class="th" id="my_gravatar_link"><img src="" id="my_gravatar_gh" alt="" title="" /></a>
		</div>
		<div class="eight columns">
			<p class="heading">Here are all my public GitHub repos.</p>
		</div>
	</div>
	<br />
	<div class="row">
		<div class="twelve columns">
			<table id="github_repos_table">
				<thead>
					<th style="width: 175px;">Name</th>
					<th>Description</th>
					<th>Language</th>
					<th>W</th>
					<th>F</th>
					<th>I</th>
				</thead>
				<tbody></tbody>
			</table>
		</div>
	</div>
</div>

<?php include( 'includes/footer.inc.php' ); ?>