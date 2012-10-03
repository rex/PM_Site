<?php

class Resumailer {

	public $email,$msg,$subject,$from,$to;

	function __construct( $email ) {

		$this->to 		= "Pierce@piercemoore.com";
		$this->from 	= "contactform@piercemoore.com";
		$this->subject 	= "$email wants you to contact them.";
		$this->message 	= "Here's the email address you need to contact: $email.";

	}

	function send() {

		if( mail( $this->to , $this->subject , $this->message ) ) {
			$this->error = false;
			return true;
		} else {
			$this->error = "Unable to send email.";
			return false;
		}

	}

}

$rm = new Resumailer( addslashes( $_REQUEST['email'] ) );
if( $rm->send() ) {
	print json_encode( array( "success" =>	true ) );
} else {
	print json_encode( array( "success" => false , "msg" => $this->error ) );
}

?>