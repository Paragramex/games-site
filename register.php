<?php 
$path = $_SERVER['DOCUMENT_ROOT'];
require("register.class.php");
require_once($path.'/system/head.php');
		if(isset($_POST['submit'])){
		$user = new RegisterUser($_POST['username'], /* $_POST['email'], */ $_POST['password']);
	}
?>
<div class="row">
  <div class="side">
    <h2>About our login</h2>
    <h5>What its for:</h5>
		<p><?php if (file_exists($path.'/db/site.json')) {
			$name = json_decode(file_get_contents($path.'/db/site.json'));
			echo htmlspecialchars_decode($name->aboutlogin);
		} ?></p>
		<br>
    <h3> Disclaimer: </h3>
    <p><?php if (file_exists($path.'/db/site.json')) {
			$name = json_decode(file_get_contents($path.'/db/site.json'));
			echo htmlspecialchars_decode($name->disclaimer);
		} ?></p>
<link rel="stylesheet" href="/assets/LoginRegister.css">
    <a href="/login.php"><button class="extrabuttons button">Login to an Account</button></a>
	<a href="/extras/socials.php"><button class="extrabuttons button">Use Our Social Login Button [WIP]</button></a>
  </div>
  <div class="main">
<h2>Register</h2>
		<form action="" method="post" enctype="multipart/form-data" autocomplete="off">
		<label>Username</label>
		<input type="text" name="username" required>
		<!--<label>Email</label>
		<input type="email" name="email" required>-->
		<label>Password</label>
		<input type="text" name="password" required>
		<button class="button extrabuttons" type="submit" name="submit">Log in</button>
		<p class="error"><?php echo @$user->error ?></p>
		<p class="success"><?php echo @$user->success ?></p>
			<center><p>Sorry for the crappy login, some kid was complaining about the login system and so I changed it to shut him up</p></center>
	</form>

		
  </div>
</div>
<?php require_once($path.'/system/foot.php');  ?>

