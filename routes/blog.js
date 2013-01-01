var mongoose = require('mongoose')
	,	Blog = mongoose.model('articles');

exports.build = function( req , res ) {
	var Entry = new Blog();
	Entry.slug = "Entry slug here";
	Entry.save( function( err , response ) {
		res.render('blog.jade', { title : 'Blog', content : response });
	});
	 
}

exports.fetchArticle = function( req , res ) {
	Blog.findOne({ _id : req.params.id }, function( err, article ) {
		res.render('blog.jade', { title : 'Article Title', content : article });
	});
}

exports.fetchArticles = function( req , res ) {
	Blog.find( function( err, articles ) {
		res.render('blog.jade', { articles : articles });
	});
}