// check if user is logged in to use clients :)
// if not, redirect to login page
// sorry skids
// you cant copy the client code rip

setTimeout( function() {
// test if its coming from the site
if (document.referrer.match(/^https?:\/\/([^\/]+\.)?paragram\.repl\.co(\/|$)/i)) {
	
	// dont touch this stupid!!! 😠
	if (document.cookie.indexOf("verified=") < 0) {
		url = window.location.href;
    alert("NOT LOGGED IN, ERROR 401");
    window.location.replace("/system/validate.php?client=" + url);
		
} else {alert("VALID USER, THANKS FOR USING OUR SERVICE :)");}
} 


// if not coming from site...

if (!document.referrer.match(/^https?:\/\/([^\/]+\.)?paragram\.repl\.co(\/|$)/i)) {
    alert("WRONG SOURCE, ERROR 401");
    location.href = "/system/validate.php";
}
}, 3000);
