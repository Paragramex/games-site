<?php 
$path = $_SERVER['DOCUMENT_ROOT'];
require_once($path.'/system/head.php');
$authlink = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$encodedauthlink = base64_encode($authlink);
	?>
  <div class="main">
<div class="content">
		<header>
			<h2>Error<h2>
			</header>
		<main>
			<?php
if(!isset($_COOKIE['verified'])) {
  echo "Verification status is: [false]<br>";
	echo " Reload page or <a href='/view?page=login?redirect=$encodedauthlink'>login</a> to view that page<br>";
} else {
  echo "Verification status is: [" . $_COOKIE['verified'] . "]<br>";
  echo "<a href="?><?php echo $_GET['client']; ?><?php echo ">continue</a> to the last page?";
} ?>
		</main>
</div>
</div>
</div>

<?php require_once($path.'/system/foot.php');  ?>

