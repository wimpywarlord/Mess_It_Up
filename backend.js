var express = require("express");
var bodyParser = require('body-parser');
var app = express();

app.use( express.static( "public" ) );
app.use(bodyParser.urlencoded({extended:true}));

var img={
	imglink: "/images/2.jpg",
};

app.get("/",function(req,res)
	{	
		res.render("homepage.ejs",{img:img});
	}	
);

app.listen( process.env.PORT || 3000 , function(){
	console.log("SERVER 3000 HAS STARTED");
});