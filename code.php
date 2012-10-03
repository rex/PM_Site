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


?>



<div class="row">

	<div class="twelve columns">

		<p class="huge_text" style="text-align:center;">
			I write lots and lots of code.
		</p>

		<hr />


<?php 

$counter = 1;

foreach( $snips->snips as $snippet ): ?>

<div id="snippet_<?=$counter;?>" class="snippet reveal-modal expand">
	<h1><?=$snippet->name;?></h1>
	<script src="<?=$snippet->url;?>"></script>

	<?php if( $counter > 1 ): ?>
		<a href="#" data-reveal-id="snippet_<?=$counter - 1;?>" class="medium secondary button" style="float: left;">Last Snippet: <?=$snips->snips->{$counter - 1}->short;?></a>
	<?php endif; ?>

	<?php if( isset( $snips->snips->{$counter + 1} ) ): ?>
		<a href="#" data-reveal-id="snippet_<?=$counter + 1;?>" class="medium button" style="float: right;">Next Snippet: <?=$snips->snips->{$counter + 1}->short;?></a>
	<?php endif; ?>

	<a class="close-reveal-modal normal alert button"> </a>
</div>


<a href="#" data-reveal-id="snippet_<?=$counter;?>" class="large secondary button <?=$snippet->lang;?>"><?=$snippet->short;?></a>

<?php $counter++; ?>
<?php endforeach; ?>



	</div>

</div>

<?php include( 'includes/footer.inc.php' ); ?>