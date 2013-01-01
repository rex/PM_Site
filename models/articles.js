var mongoose = require('mongoose')
	,	Schema = mongoose.Schema
	, ObjectId = Schema.Types.ObjectId
	;

var CommentSchema = new Schema({
	author : { type : String },
	replyTo : { type : ObjectId },
	content : { type : String }
});

var articleSchema = new Schema({
	slug : { type : String, required : true },
	comments : [CommentSchema],
	content : { type : String, default : "" },
	tags : [{ type : String }],
	created : { type : Date, default : Date.now },
	updated : { type : Date },
	version : { type : Number, default : 1 }
});

module.exports = articleSchema;