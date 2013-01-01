var pages = require("./pages")
	, blog = require("./blog")
	;

var define = function ( app ) {

	console.log("Defining routes for PierceMoore.com...");
	
	app.get("/code", pages.code );
	app.get("/music", pages.music );
	app.get("/portfolio", pages.portfolio );
	app.get("/resume", pages.resume );
	app.get("/links", pages.links );
	app.get("/login", pages.login );

	// Blog namespaces
	app.get("/blog/:id", blog.fetchArticle );
	app.get("/blog", blog.build );
	app.get("/", pages.home );
}

exports.define = define;