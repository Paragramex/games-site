<?php
$path = $_SERVER['DOCUMENT_ROOT'];
$authlink = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$encodedauthlink = base64_encode($authlink);
$decodedauthlink = base64_decode($encodedauthlink);
if (!isset($_COOKIE['authed'])){
	header("Location: /login.php?redirect=$encodedauthlink");
};
if (!isset($_GET['site'])){
		header("Location: /view?page=home");
}
require_once($path.'/system/head.php');
$base64refsite = $_GET['site'];
$refferersite = base64_decode($base64refsite);
echo $refferersite;
?>
<div class="main">
<div class="content">
	<header>
<h3>External Auth</h3>
	
			</header>
		<main>
			<center>
				<p>Hey <?php echo $_SESSION['user']; ?>, do you want to </p>
			<p>Login with the 3rd-party application:</p>
				<i><?php echo $refferersite ?></i>
			<br>
				<br>
				<?php 
if (isset($_GET['permissions'])){
if ($_GET['permissions'] == "all") {
	$data = "success=true&user=test&mail=test";
} elseif ($_GET['permissions'] == "user") {
	$data = "success=true&user=test";
} elseif ($_GET['permissions'] == "mail") {
	$data = "success=true&mail=test";
} else {
	$data = "success=true";
}
}else{
	$data = "success=true";
}
?>
			<a href="<?php echo "https://" . $refferersite . "/ok.php?" . $data ?>"><button class="extrabuttons button">Yes</button></a>
				<br>
				
    <a href="<?php echo "https://" . $refferersite . "/cancel.php"; ?>"><button class="extrabuttons button extrabuttons">No</button></a>
			<br>
			<p>To continue, we will give the following data to the site: </p>
				<ul style="list-style: none;">
					<?php 
					if (isset($_GET['permissions'])){
	$perms = $_GET['permissions'];
		if ($perms == "all"){ echo "<li>[Your Username]</li><br><li>[Your Email Address]</li>";}
		if ($perms == "user"){ echo "<li>[Your Username]</li>";}
		if ($perms == "mail"){ echo "<li>[Your Email Address]</li>";}
} else {
	echo '[That you logged in, no further data will be shared]';
} ?>
				</ul>
</p>
				</center>
		</main>
</div>
</div>
</div>

<?php require_once($path."/system/foot.php");  ?>

