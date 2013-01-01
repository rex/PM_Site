var jade = require('jade');

exports.home = function ( req, res ) {
	res.send("Welcome to PierceMoore.com!");
}

exports.links = function( req , res ) {
	res.render('links.jade', { title : 'Links', content : 'This is some page content here yay!' });
}

exports.code = function( req , res ) {
	res.render('code.jade', { title : 'Code', content : 'This is some page content here yay!' });
}

exports.music = function( req , res ) {
	res.render('music.jade', { title : 'Music', content : 'This is some page content here yay!' });
}

exports.portfolio = function( req , res ) {
	res.render('portfolio.jade', { title : 'Portfolio', content : 'This is some page content here yay!' });
}

exports.resume = function( req , res ) {
	res.render('resume.jade', { title : 'Resume', content : 'This is some page content here yay!' });
}

exports.login = function( req , res ) {
	res.render('login.jade', { title : 'Login', content : 'This is some page content here yay!' });
}