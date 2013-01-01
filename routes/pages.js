var jade = require('jade');

exports.home = function ( req, res ) {
	res.send("Welcome to PierceMoore.com!");
}

exports.links = function( req , res ) {
	res.render('links.jade');
}

exports.code = function( req , res ) {
	res.render('code.jade');
}

exports.music = function( req , res ) {
	res.render('music.jade');
}

exports.portfolio = function( req , res ) {
	res.render('portfolio.jade');
}

exports.resume = function( req , res ) {
	res.render('resume.jade');
}

exports.login = function( req , res ) {
	res.render('login.jade');
}