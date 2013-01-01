var db = require('mongoose')
	, config = require('../config.js')
	, articleSchema = require('./articles.js')
	;

db.connect('mongodb://127.0.0.1/pm_site');

console.log("DB Connected, building models"); 

var Articles = db.model('articles', articleSchema );

module.exports = {
	'Articles' : Articles
};