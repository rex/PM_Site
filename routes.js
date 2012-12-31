var jade = require('jade');

exports.home = function ( req, res ) {
	res.send("Welcome to PierceMoore.com!");
}

exports.links = function( req , res ) {
	console.log( req.body );
	res.render('links.jade');
}