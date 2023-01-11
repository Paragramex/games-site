<?php
if (isset($_GET['game'])){
	
	$gameurl = $_GET['game'];

	$game = base64_decode($gameurl);

echo '<iframe src="' . $game . '" width="100%" height="100%" ></iframe>';
	
} else {
	include("../view/pages/error.php");
}

?>

