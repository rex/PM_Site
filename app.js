var express = require('express');
var app = express();
var routes = require('./routes.js');

// Configuring server
console.log("Configuring Node.js server for PierceMoore.com...");

app.set('views', __dirname + '/views' );
app.use(express.static( __dirname + '/../public' ) );

// Define all pages and routes
console.log("Defining routes for PierceMoore.com...");

app.get("/links", routes.links );
app.get("/", routes.home );

app.listen(1965);
console.log("PierceMoore.com is listening on port 1965!");