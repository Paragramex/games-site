<?php
if (isset($_GET['redirect'])){
						$redir = $_GET['redirect'];
						$decodedredir = base64_decode($redir);
						setcookie("authed", "true", time() + (60 * 5), "/"); // 5 minutes idiot
						header("location: $decodedredir"); 
	exit();
					} else {
					header("location: account.php"); exit();
}
?>