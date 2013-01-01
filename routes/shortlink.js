exports.fetch = function( req , res ) {
	res.render("default.jade", { title : "Shortlinker" });
}