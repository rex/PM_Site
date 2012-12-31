var express = require('express');
var app = express();
var routes = require('./routes.js');

// Define all pages and routes
console.log("Defining routes for PierceMoore.com...");

app.get("/", routes.home );

app.listen(1965);
console.log("PierceMoore.com is listening on port 1965!");