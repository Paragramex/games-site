// check if user is logged in to use clients :)
// if not, redirect to login page
// sorry skids
// you cant copy the client code rip

alert("workss");

// test if its coming from the site
if (document.referrer.match(/^https?:\/\/([^\/]+\.)?paragram\.great-site\.net(\/|$)/i)) {
	
	// dont touch this kadin 😠
	if (document.cookie.indexOf("verified=") < 0) {
    alert("NOT LOGGED IN, ERROR 401");
    location.href = "//paragram.great-site.net/account.php";
		
} else {alert("VALID USER, THANKS FOR USING OUR SERVICE :)");}
} 


// if not coming from site...

if (!document.referrer.match(/^https?:\/\/([^\/]+\.)?paragram\.great-site\.net(\/|$)/i)) {
    alert("WRONG SOURCE, ERROR 401");
    location.href = "//paragram.great-site.net/account.php";
}