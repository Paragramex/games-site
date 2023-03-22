<?php 
$path = $_SERVER['DOCUMENT_ROOT'];
require_once($path.'/system/head.php');

?>
<div class="row">
  <div class="side">
    <h2>Anti-Bot</h2>
    <h5>What its for:</h5>
		<p>To prevent bots from just scraping the website :/</p>
		<br>
    <h3> Disclaimer: </h3>
    <p><?php if (file_exists($path.'/db/site.json')) {
			$name = json_decode(file_get_contents($path.'/db/site.json'));
			echo htmlspecialchars_decode($name->disclaimer);
		} ?></p>
<link rel="stylesheet" href="/assets/LoginRegister.css">
    <a href="/register.php"><button class="extrabuttons button">Register an Account</button></a>
	<a href="/extras/socials.php"><button class="extrabuttons button">Use Our Social Login Button [WIP]</button></a>
  </div>
  <div class="main">
<h2>Anti-Bot</h2>
<center>
		<style>img[id^="captcha-id"] {max-width:100%;}</style>
	  <form action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="post">
				<p><?php 
if (isset($_POST['captcha_solution'])) {
	$messages = array(
	"success" => "<p style='color:green;'><strong>[Success!]</strong> Redirecting....</p>",
	"failure" => "<p style='color:red;'><strong>[Failure]</strong> Text incorrect. Correct text was <u>" . $_SESSION['answer'] . "</u></p>");
	if ($_SESSION['answer'] === $_POST['captcha_solution']) {
		echo $messages['success'];
		$_SESSION['notbot'] = "true";
		echo "<script>window.location.replace('/view?page=home')</script>";
		exit();
	} else {
		echo $messages['failure'];
	}
} else {
	echo "--Anti-Bot Challenge--";
}
?></p>
			 <img src="/system/captcha.php" height="45" alt="CAPTCHA image" id="captcha-id-<?php echo array_rand(range(1, 5000)); ?>" />
				<label>Please solve the anti-bot challenge to continue
	  <input class="" type="text" name="captcha_solution" placeholder="Anti-Bot Code Here"/>
		  <input class="button extrabuttons" type="submit" value="Check"/>
	  </label></form>
	</center>
  </div>
</div>
<?php
$visitors = file_get_contents($path.'/db/visitcount.txt');
$visitors = $visitors+1;

file_put_contents($path.'/db/visitcount.txt',$visitors);
?>

<?php require_once($path.'/system/foot.php');  ?>

