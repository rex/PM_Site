var express = require('express')
	, app = express()
	, routes = require('./routes/index.js')
	, config = require('./config')
	;

// Configuring server
console.log("Configuring Node.js server for PierceMoore.com...");

app.configure( function() {
	// Configure
	app.set('port', config.port );
	app.set('views', __dirname + '/views' );

	// Set middleware
	app.use( express.favicon() );
	app.use( express.bodyParser() );
	app.use( app.router );
	app.use( express.static( __dirname + '/../public' ) );
});

// Define all pages and routes
routes.define(app);

app.listen( app.get('port'), function() {
	console.log("PierceMoore.com is up and running on port " + app.get('port') );
});