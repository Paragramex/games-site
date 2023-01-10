<?php 
$path = $_SERVER['DOCUMENT_ROOT'];
include $path.'/system/logging.php';

session_start();
?>
<center>
	  <style>img[id^="captcha-id"] {max-width:100%;}</style>
    <img src="/system/captcha.php" height="45" alt="CAPTCHA image" id="captcha-id-<?php echo array_rand(range(1, 5000)); ?>" />
	  <form action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="post">
	  <label>To continue to site, please solve the anti-bot challenge.
	  <input type="text" name="captcha_solution" />
		  <input type="submit" />
	  </label></form>
	<p><?php 
if (isset($_POST['captcha_solution'])) {
	$messages = array(
	"success" => "<p style='color:green;'><strong>[Success!]</strong> Redirecting....</p>",
	"failure" => "<p style='color:red;'><strong>[Failure]</strong> Text incorrect. Correct text was <u>" . $_SESSION['answer'] . "</u></p>");
	if ($_SESSION['answer'] === $_POST['captcha_solution']) {
		echo $messages['success'];
		$_SESSION['notbot'] = "true";
		echo "<script>window.location.replace('home.php')</script>";
		exit();
	} else {
		echo $messages['failure'];
	}
} else {
	echo "Anti-Bot Challenge ";
}
?></p>
</center>


<!--
<title>Redirecting...</title>
<meta charset="UTF-8">
	<meta name="title" content="">
  <meta name="description" content="This site is aimed to be a collection of every client for EaglerCraft.">
  <meta name="keywords" content="Eaglercraft, paragram, eagler, hacks, hax, LAX1DUDE, FuchsiaX, ayuncraft, codercraft, Resent, Precision, minecraft, 1.5.2">
  <meta name="author" content="paragram">
<meta name="viewport" content="width=device-width, initial-scale=1">
<div class="hero-image">
  <div class="hero-text">
    <h1>GET RICKED LOSER 🤣</h1>
   <p>You should be automatically redirected in <span id="seconds"></span> seconds.</p>
  </div>
</div>

<style>
body, html {
    height: 100%;
}

/* The hero image */
.hero-image {
  /* Use "linear-gradient" to add a darken background effect to the image (photographer.jpg). This will make the text easier to read */
  background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("https://media.tenor.com/x8v1oNUOmg4AAAAd/rickroll-roll.gif");

  /* Set a specific height */
  height: 90%;
	

  /* Position and center the image to scale nicely on all screens */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

/* Place text in the middle of the image */
.hero-text {
  text-align: center;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: white;
}
</style>
<script>

var seconds = 5;
var foo;

function redirect() {
    document.location.href = '/home.php';
}

function updateSecs() {
    document.getElementById("seconds").innerHTML = seconds;
    seconds--;
    if (seconds == -1) {
        clearInterval(foo);
        redirect();
    }
}

function countdownTimer() {
    foo = setInterval(function () {
        updateSecs()
    }, 1000);
}

countdownTimer();</script> -->