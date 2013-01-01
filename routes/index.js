var pages = require("./pages")
	, blog = require("./blog")
	, shortlink = require("./shortlink")
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

	// URL Shortener links are our last line of defense
	app.get("/:id", shortlink.fetch );
	app.get("/", pages.home );
}

exports.define = define;