exports.build = function( req , res ) {
	res.render('blog.jade');
}

exports.fetchArticle = function( req , res ) {
	Blog.findOne({ _id : req.params.id }, function( err, article ) {
		res.render('blog.jade', { article : article });
	});
}

exports.fetchArticles = function( req , res ) {
	Blog.find( function( err, articles ) {
		res.render('blog.jade', { articles : articles });
	});
}